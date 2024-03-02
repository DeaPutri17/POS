<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-sccale=1">
        <title>PENJUALAN</title>
    </head>
    <body>
        <h1>Sales Transactions</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $penjualan)
                <tr>
                    <td>{{ $penjualan['kode'] }}</td>
                    <td>{{ $penjualan['nama'] }}</td>
                    <td>{{ $penjualan['jumlah'] }}</td>
                    <td>{{ $penjualan['total'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>