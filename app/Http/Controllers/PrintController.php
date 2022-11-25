<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use App\Models\transaksi;
use Mike42\Escpos\Printer;
use Illuminate\Http\Request;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use charlieuki\ReceiptPrinter\ReceiptPrinter as ReceiptPrinter;

class PrintController extends Controller
{
    public function printermal($notransaksi)
    {
        $pelanggan = pelanggan::all();
        $transaksi = transaksi::with('notransaksis')->where('notransaksi', $notransaksi)->first();
        return view('keluar.print', compact('transaksi'));
    }
}
