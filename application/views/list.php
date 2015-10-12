<html>
<!--<meta http-equiv="refresh" content="5; URL=--><?//= base_url(); ?><!--">-->
<head>
    <?php
    ?>
</head>
<body>
<h1>Daftar Artikel</h1>
<br/>
<a href='<?php base_url() ?>posts/tambah'>Tambah Artikel</a>

<br/>
<table border="1">
    <tr>
        <td>Judul</td>
        <td>Isi</td>
        <td>Tanggal</td>
        <td>Action</td>
    </tr>
    <?php
    foreach ($posts as $id => $b) {
        echo "<tr>";
        echo "<td>" . $b['judul'] . "</td>";
        echo "<td>" . $b['isi'] . "</td>";
        echo "<td>" . $b['tanggal'] . "</td>";
        echo "<td><a href='" . base_url() . "posts/ubah?id=" . $id . "'>Ubah</a> / <a href='" . base_url() . "posts/hapus?id=" . $id . "'>Hapus</a></td>";
    }
    ?>
</table>
</body>
</html>