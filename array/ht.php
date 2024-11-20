<html>
    <table>
        <tr>
            <td><?php foreach($list as $novel) {?></td>
        </tr>
        <tr>
            <td>No</td>
            <td>:</td>
            <td><?php echo "{$novel->no}";?></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td><?php echo "{$novel->judul}";?></td>
        </tr>
        <tr>
            <td>Genre</td>
            <td>:</td>
            <td><?php echo "{$novel->genre}";?></td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><?php echo "{$novel->penulis}";?></td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td>:</td>
            <td><?php echo "{$novel->penerbit}";?></td>
        </tr>
        <tr>
            <td>Tahun Rilis</td>
            <td>:</td>
            <td><?php echo "{$novel->tahun_rilis}";?></td>
        </tr>
        <tr>
            <td colspan=3>----------------------------------------------------</td>
        </tr>
        <tr>
            <td><?php } ?></td>
        </tr>
    </table>
</html>