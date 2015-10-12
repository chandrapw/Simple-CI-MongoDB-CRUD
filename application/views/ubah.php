<form action="<?= base_url();?>posts/prosesUbah" method="POST">
    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"/>
    <table>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" value="<?php echo $cari['judul'] ?>"/></td>
        </tr>
        <tr>
            <td>Isi Artikel</td>
            <td><textarea name="isi" cols='20' rows='10'><?php echo $cari['isi'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' value='Post'/></td>
        </tr>
    </table>
</form>