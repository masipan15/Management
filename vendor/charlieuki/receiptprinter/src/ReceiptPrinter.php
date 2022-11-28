<?php

namespace charlieuki\ReceiptPrinter;

use Exception;
use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\CapabilityProfile;
use charlieuki\ReceiptPrinter\Item as Item;
use charlieuki\ReceiptPrinter\Store as Store;
use Mike42\Escpos\PrintConnectors\CupsPrintConnector;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\PrintConnectors\NetworkPrintConnector;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

class ReceiptPrinter
{
    private $printer;
    private $logo;
    private $store;
    private $items;
    private $currency = 'Rp';
    private $subtotal = 0;
    private $tax_percentage = 10;
    private $kembalian = 0;
    private $pembayaran = 0;
    private $grandtotal = 0;
    private $request_amount = 0;
    private $qr_code = [];
    private $transaction_id = '';

    function __construct()
    {
        $this->printer = null;
        $this->items = [];
    }

    public function init($connector_type, $connector_descriptor, $connector_port = 9100)
    {
        switch (strtolower($connector_type)) {
            case 'cups':
                $connector = new CupsPrintConnector($connector_descriptor);
                break;
            case 'windows':
                $connector = new WindowsPrintConnector($connector_descriptor);
                break;
            case 'network':
                $connector = new NetworkPrintConnector($connector_descriptor);
                break;
            default:
                $connector = new FilePrintConnector("php://stdout");
                break;
        }

        if ($connector) {
            // Load simple printer profile
            $profile = CapabilityProfile::load("default");
            // Connect to printer
            $this->printer = new Printer($connector, $profile);
        } else {
            throw new Exception('Invalid printer connector type. Accepted values are: cups');
        }
    }

    public function close()
    {
        if ($this->printer) {
            $this->printer->close();
        }
    }

    public function setStore($mid, $name, $address, $phone, $email, $website)
    {
        $this->store = new Store($mid, $name, $address, $phone, $email, $website);
    }

    public function setLogo($logo)
    {

        $this->logo = $logo;
    }
    public function graphics($logo)
    {

        $this->logo = $logo;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function addItem($name, $qty, $price)
    {
        $item = new Item($name, $qty, $price);
        $item->setCurrency($this->currency);

        $this->items[] = $item;
    }

    public function setRequestAmount($amount)
    {
        $this->request_amount = $amount;
    }

    public function setKembalian($kembalian)
    {
        $this->kembalian = $kembalian;

        // if ($this->subtotal == 0) {
        //     $this->calculateSubtotal();
        // }

        // $this->tax = (int) $this->tax_percentage / 100 * (int) $this->subtotal;
    }

    public function setPembayaran($pembayaran)
    {
        $this->pembayaran = $pembayaran;
    }


    public function calculateSubtotal()
    {
        $this->subtotal = 0;

        foreach ($this->items as $item) {
            $this->subtotal += (int) $item->getQty() * (int) $item->getPrice();
        }
    }

    public function calculateGrandTotal()
    {
        if ($this->subtotal == 0) {
            $this->calculateSubtotal();
        }

        $this->grandtotal = (int) $this->subtotal;
    }

    public function setTransactionID($transaction_id)
    {
        $this->transaction_id = $transaction_id;
    }

    public function setQRcode($content)
    {
        $this->qr_code = $content;
    }

    public function setTextSize($width = 1, $height = 1)
    {
        if ($this->printer) {
            $width = ($width >= 1 && $width <= 8) ? (int) $width : 1;
            $height = ($height >= 1 && $height <= 8) ? (int) $height : 1;
            $this->printer->setTextSize($width, $height);
        }
    }

    public function getPrintableQRcode()
    {
        return json_encode($this->qr_code);
    }

    public function getPrintableHeader($left_text, $right_text, $is_double_width = false)
    {
        $cols_width = $is_double_width ? 8 : 16;

        return str_pad($left_text, $cols_width) . str_pad($right_text, $cols_width, ' ', STR_PAD_LEFT);
    }

    public function getPrintableSummary($label, $value, $is_double_width = false)
    {
        $left_cols = $is_double_width ? 6 : 12;
        $right_cols = $is_double_width ? 10 : 20;

        $formatted_value = $this->currency . number_format($value, 0, ',', '.');

        return str_pad($label, $left_cols) . str_pad($formatted_value, $right_cols, ' ', STR_PAD_LEFT);
    }

    public function feed($feed = NULL)
    {
        $this->printer->feed($feed);
    }

    public function cut()
    {
        $this->printer->cut();
    }

    public function printDashedLine()
    {
        $line = '';

        for ($i = 0; $i < 32; $i++) {
            $line .= '-';
        }

        $this->printer->text($line);
    }

    public function printLogo()
    {
        if ($this->logo) {
            $image = EscposImage::load($this->logo, false);

            // $this->printer->feed();
            // $this->printer->bitImage($image);
            // $this->printer->feed();
        }
    }

    public function printQRcode()
    {
        if (!empty($this->qr_code)) {
            $this->printer->qrCode($this->getPrintableQRcode(), Printer::QR_ECLEVEL_L, 8);
        }
    }

    public function printReceipt($with_items = true)
    {
        if ($this->printer) {
            // Get total, subtotal, etc
            $subtotal = $this->getPrintableSummary('Subtotal', $this->subtotal);
            $pembayaran = $this->getPrintableSummary('Pembayaran', $this->pembayaran);
            $kembalian = $this->getPrintableSummary('Kembalian', $this->kembalian);
            $total = $this->getPrintableSummary('TOTAL', $this->grandtotal, true);
            $header = $this->getPrintableHeader(
                'KT: ' . $this->transaction_id,
                'NT: ' . $this->store->getMID()
            );
            $footer = "Terima kasih telah berbelanja!\n";
            // Init printer settings
            $this->printer->initialize();
            $this->printer->selectPrintMode();
            // Set margins
            $this->printer->setPrintLeftMargin(1);
            // Print receipt headers
            $this->printer->setJustification(Printer::JUSTIFY_CENTER);
            // Print logo
            $this->printLogo();
            $this->printer->selectPrintMode(Printer::MODE_FONT_A);
            $this->printer->feed();
            $this->printer->text("{$this->store->getName()}\n");
            $this->printer->selectPrintMode();
            $this->printer->text("{$this->store->getAddress()}\n");
            $this->printer->text($header . "\n");
            $this->printer->feed();
            // Print receipt title
            $this->printer->setEmphasis(true);
            $this->printer->text("Rincian\n");
            $this->printer->setEmphasis(false);
            $this->printer->feed();
            // Print items
            if ($with_items) {
                $this->printer->setJustification(Printer::JUSTIFY_LEFT);
                foreach ($this->items as $item) {
                    $this->printer->text($item);
                }
                $this->printer->feed();
            }
            // Print subtotal
            $this->printer->setEmphasis(true);
            $this->printer->text($subtotal);
            $this->printer->setEmphasis(false);
            $this->printer->feed();
            // Print tax
            $this->printer->text($pembayaran);
            $this->printer->feed(2);
            // Print Pembayaran
            $this->printer->text($kembalian);
            $this->printer->feed(2);
            // Print grand total
            $this->printer->selectPrintMode(Printer::MODE_DOUBLE_WIDTH);
            $this->printer->text($total);
            $this->printer->feed();
            $this->printer->selectPrintMode();
            // Print qr code
            $this->printQRcode();
            // Print receipt footer
            $this->printer->feed();
            $this->printer->setJustification(Printer::JUSTIFY_CENTER);
            $this->printer->text($footer);
            $this->printer->feed();
            // Print receipt date
            $this->printer->text(date('j F Y H:i:s'));
            $this->printer->feed(2);
            // Cut the receipt
            $this->printer->cut();
            $this->printer->close();
        } else {
            throw new Exception('Printer has not been initialized.');
        }
    }

    // public function printRequest()
    // {
    //     if ($this->printer) {
    //         // Get request amount
    //         $total = $this->getPrintableSummary('TOTAL', $this->request_amount, true);
    //         $header = $this->getPrintableHeader(
    //             'KT: ' . $this->transaction_id,
    //             'NT: ' . $this->store->getMID()
    //         );
    //         $footer = "This is not  proof of payment.\n";
    //         // Init printer settings
    //         $this->printer->initialize();
    //         $this->printer->feed();
    //         $this->printer->setJustification(Printer::JUSTIFY_CENTER);
    //         // Print logo
    //         $this->printLogo();
    //         // Print receipt headers
    //         //$this->printer->selectPrintMode(Printer::MODE_DOUBLE_WIDTH);
    //         //$this->printer->text("U L T I P A Y\n");
    //         //$this->printer->feed();
    //         $this->printer->selectPrintMode();
    //         $this->printer->text("{$this->store->getName()}\n");
    //         $this->printer->text("{$this->store->getAddress()}\n");
    //         $this->printer->text($header . "\n");
    //         $this->printer->feed();
    //         // Print receipt title
    //         $this->printDashedLine();
    //         $this->printer->setEmphasis(true);
    //         $this->printer->text("PAYMENT REQUEST\n");
    //         $this->printer->setEmphasis(false);
    //         $this->printDashedLine();
    //         $this->printer->feed();
    //         // Print instruction
    //         $this->printer->text("Please scan the code below\nto make payment\n");
    //         $this->printer->feed();
    //         // Print qr code
    //         $this->printQRcode();
    //         $this->printer->feed();
    //         // Print grand total
    //         $this->printer->selectPrintMode(Printer::MODE_DOUBLE_WIDTH);
    //         $this->printer->text($total . "\n");
    //         $this->printer->feed();
    //         $this->printer->selectPrintMode();
    //         // Print receipt footer
    //         $this->printer->feed();
    //         $this->printer->setJustification(Printer::JUSTIFY_CENTER);
    //         $this->printer->text($footer);
    //         $this->printer->feed();
    //         // Print receipt date
    //         $this->printer->text(date('j F Y H:i:s'));
    //         $this->printer->feed(2);
    //         // Cut the receipt
    //         $this->printer->cut();
    //         $this->printer->close();
    //     } else {
    //         throw new Exception('Printer has not been initialized.');
    //     }
    // }
}
