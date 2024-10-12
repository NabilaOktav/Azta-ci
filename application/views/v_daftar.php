<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
<h1>Registrasi Page</h1>
<form action="<?= base_url() ?>Daftar/save" method="post">
        <input type="text" name="nama" placeholder="nama lengkap"><br><br>
        <input type="text" name="username" placeholder="username"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>

        <input type="submit" value="Save">
</form>
</div>
</body>
</html>