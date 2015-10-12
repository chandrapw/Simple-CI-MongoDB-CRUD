<form action="<?= base_url();?>posts/prosesTambah" method="POST">
    <table>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul""/></td>
        </tr>
        <tr>
            <td>Isi Artikel</td>
            <td><textarea name="isi" cols='20' rows='10'></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' value='Tambah'/></td>
        </tr>
    </table>
</form>