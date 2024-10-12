<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Siswa</title>
</head>
<body>
    <h1>Halaman Admin</h1>
    <h2>Tabel Data Siswa</h2>
    <a href="<?= base_url('') ?>" class="tombol">Tambah Data</a>

    <table border="1" class="siswa">
        <tr>
            <th>NO</th>
            <th>NAMA EVENT</th>
            <th>NAMA PENDAFTAR</th>
            <th>KELAS</th>
            <th>NO.TELP</th>
            <th>TANGGAL DAFTAR</th>
            <th colspan=2>Aksi</th>
        </tr>
        <?php foreach ($pendaftaran as $pdf) : ?>
        <tr>
            <td><?= $pdf['id']?></td>
            <td><?= $pdf['nama_pendaftar']?></td>
            <td><?= $pdf['kelas']?></td>
            <td><?= $pdf['no_hp']?></td>
            <td><?= $pdf['tgl_daftar']?></td>
            <td><a class="edit" href="<?= base_url(''); ?>admin/edit/<?= $pdf['id'] ?>">Edit</a></td>
            <td><a class="delete" onclick="return confirm('Yakin akan di hapus?')" href="<?= base_url(''); ?>admin/hapus/<?= $pdf['id'] ?>">Delete</a></td>

        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>