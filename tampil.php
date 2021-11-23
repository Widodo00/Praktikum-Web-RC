<table border='1'>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Email</th>
        <th>No. Handphone</th>
    </tr>
    <?php
        include "koneksi.php";
        $hasil=mysqli_query($kon,"select * from mahasiswa order by nim asc");
        $no=0;
        while($data=mysqli_fetch_array($hasil)):
            $no++;
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['nomor']; ?></td>
    </tr>
        <?php endwhile;?>
</table>