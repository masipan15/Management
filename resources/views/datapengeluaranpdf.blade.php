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
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1>A Fancy Table</h1>

    <table id="customers">
        <tr>
            <th class="wd-20p">No</th>
            <th class="wd-20p">Tanggal</th>
            <th class="wd-25p">Bulan</th>
            <th class="wd-20p">Tahun</th>
            <th class="wd-15p">Pengeluaran</th>


        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $row)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $row->tanggal }}</td>
                <td>{{ $row->bulan }}</td>
                <td>{{ $row->tahun }}</td>

                <td>Rp.{{ number_format($row['total'], 2, '.', '.') }}</td>


            </tr>
        @endforeach

    </table>

</body>

</html>
