<h1>selamat datang</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>aksi</th>

        </tr>
    </thead>
    <tbody>
        <?php $nomor=1;?>
        <?php $ambil= $koneksi->query("SELECT * FROM feedback"); ?>
        <?php while($pecah = $ambil->fetch_assoc()){ ?>
    <tr>    
            <td><?php echo $nomor ;?></td>
            <td><?php echo $pecah['Nama'];?></td>
            <td><?php echo $pecah['Email'];?></td>
            <td><?php echo $pecah['Pesan'];?></td>
            <td>
            <a href="index.php?halaman=hapusfeedback&id=<?php echo $pecah['Nama']?>" class="btn-danger btn">hapus</a>
            </td>
        </tr>
        <?php $nomor++;?>
        <?php }?>
    </tbody>
</table>