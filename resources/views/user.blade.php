<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-sccale=1">
        <title>POS</title>
    </head>
    <body>
        <h1>Halo!!</h1>
        <h2>User Profile</h2>
        <p>ID       : {{ $user['id'] }}</p>
        <p>Nama     : {{ $user['nama'] }}</p>
        <h4>Selamat Berbelanja</h4>
    </body>
</html>