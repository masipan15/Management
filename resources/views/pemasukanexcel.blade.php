<table>
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Pemasukan Dari</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr>
                <td>{{ $row['tanggal'] }}</td>
                <td>{{ $row['bulan'] }}</td>
                <td>{{ $row['tahun'] }}</td>
                <td>{{ $row['type'] }}</td>
                <td>Rp.{{ number_format($row['total'], 2, '.', '.') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>