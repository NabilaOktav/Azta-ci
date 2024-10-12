<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Login page</h1>
    <div class="login">
    <!-- // < ?= $this->session->flashdata('message') ; ?> // -->
    <form action="<?= base_url() ?>login/verifikasi" method="post">
        <input type="text" name="username" placeholder="username"> <br> <br>
        <input type="password" name="password" placeholder="password"> <br> <br>

        <input type="submit" value="Login">
    </form>
    </div>
    <br>
    <p class="paragraf">Belum Punya Account?<a href="<?= base_url() ?>Daftar">Daftar</a> </p>
</body>
</html>