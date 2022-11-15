<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style>
        .container {
            width: 300px;
            margin: 0 auto;

            padding: 10px;
        }

        .header {
            margin: 0;
            text-align: center;
        }

        h1,
        p {
            margin: 0;
            margin-bottom: 1px;
        }

        .flex-container-1 {
            display: flex;
            margin-top: 10px;
        }

        .flex-container-1>div {
            text-align: left;
        }

        .flex-container-1 .right {
            text-align: right;
            width: 200px;
        }

        .flex-container-1 .left {
            width: 100px;
        }

        .flex-container {
            width: 300px;
            display: flex;
        }

        .flex-container>div {
            -ms-flex: 1;
            /* IE 10 */
            flex: 1;
        }

        ul {
            display: contents;
        }

        ul li {
            display: block;
        }

        hr {
            border-style: dashed;
        }

        /* .harga,
        .total {
            padding-left: 70px;
        } */

        a {
            text-decoration: none;
            text-align: center;
            padding: 10px;
            background: #00e676;
            border-radius: 5px;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
{{-- onload="window.print();" --}}

<body>
    <div class="container">
        <div class="header" style="margin-bottom: 3px;">
            <h1>ACS MultiTechnology</h1>
            <small>Jl,SoekarnoHatta,RT03/RW01,Jambewangi,Kec.Sempu,
                Kab.Banyuwangi
            </small>
            <br>
            <b><small>
                    082141736147
                </small></b>
        </div>
        <hr>
        <div class="flex-container-1">
            <div class="left">
                <ul>

                    <li>Kode</li>
                    <li>Nama Kasir</li>
                    <li>Pelanggan</li>
                    <li>Tanggal</li>
                </ul>
            </div>
            <div class="right">

                <ul>

                    <li>{{ $transaksi->notransaksi }}</li>
                    <li>{{ $transaksi->namakasir }} </li>
                    <li>{{ $transaksi->namapelangganss ?: 'Pelanggan Umum' }}</li>
                    <li>{{ date('Y-m-d : H:i:s', strtotime($transaksi->created_at)) }}</li>
                </ul>


            </div>
        </div>
        <hr>
        <table>
            <tbody>
                @foreach ($transaksi->notransaksis as $item)
                    <tr>
                        <td>{{ $item->jumlah }}x {{ $item->barangtransaksi->namabarang }}</td>
                        <td style="padding-left:5px;">Rp.{{ number_format($item->harga) }}</td>
                        <td style="padding-left:20px;">Rp.{{ number_format($item->total) }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div class="flex-container" style="margin-bottom: 10px; text-align:right;">
            <div style="text-align: left;">Nama Product</div>
            <div>Harga</div>
            <div>Total</div>
        </div>

        <div class="flex-container" style="text-align: right;">

            @foreach ($transaksi->notransaksis as $item)
                <div style=" text-align: left;">
                    {{ $item->jumlah }}x{{ $item->barangtransaksi->namabarang }}</div>
                <div>Rp{{ number_format($item->harga) }}</div>
                <div>Rp {{ number_format($item->total) }} </div>
            @endforeach
        </div> --}}


        <hr>
        <div class="flex-container left" style="text-align: left; margin-top: 10px;">
            <div>
                <ul>
                    <li>Subtotal</li>
                    <li class="mt-1">Pembayaran</li>
                    <li class="mt-1">Kembalian</li>
                </ul>
            </div>
            <div>

            </div>
            <div style="text-align: right;">
                <ul>
                    <li>Rp.{{ number_format($transaksi->subtotal) }}</li>
                    <li class="mt-1">Rp.{{ number_format($transaksi->pembayaran) }}</li>
                    <li class="mt-1">Rp.{{ number_format($transaksi->kembalian) }}</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="header" style="margin-top: 12px;">
            <b>
                <p>Terimakasih</p>
            </b>
            <p>Silahkan berkunjung kembali</p>
        </div>
    </div>
</body>

</html>
