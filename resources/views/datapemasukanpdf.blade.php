<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid rgb(0 ,0, 0);
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: rgb(255,255, 255);
        }

        #customers tr:hover {
            background-color: rgb(11, 11, 11);
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: rgb(255,255, 255);
            color: rgb(11, 11, 11);
        }
    </style>
</head>

<body>

    <h1>Data Pemasukan</h1>

    <table id="customers">
        <tr>
            <th class="wd-20p">No</th>
            <th class="wd-20p">Tanggal</th>
            <th class="wd-25p">Bulan</th>
            <th class="wd-20p">Tahun</th>
            <th class="wd-20p">Pemasukan Dari</th>
            <th class="wd-15p">Total</th>


        </tr>

        @php
            $no = 1;
        @endphp
        @foreach ($array as $row)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $row['tanggal'] }}</td>
                <td>{{ $row['bulan'] }}</td>
                <td>{{ $row['tahun'] }}</td>
                <td>{{ $row['type'] }}</td>
                <td>Rp.{{ number_format($row['total'], 2, '.', '.') }}</td>


            </tr>
        @endforeach


    </table>

</body>

</html>
