<h1>selamat datang</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>no</th>
            <th>id</th>
            <th>nama</th>
            <th>harga</th>
            <th>foto</th>
            <th>deskripsi</th>
            <th>aksi</th>

        </tr>
    </thead>
    <tbody>
        <?php $nomor=1;?>
        <?php $ambil= $koneksi->query("SELECT * FROM acara"); ?>
        <?php while($pecah = $ambil->fetch_assoc()){ ?>
    <tr>    
            <td><?php echo $nomor ;?></td>
            <td><?php echo $pecah['id'];?></td>
            <td><?php echo $pecah['nama'];?></td>
            <td><?php echo $pecah['harga'];?></td>
            <td>
                <img src="img/<?php echo $pecah['foto'];?>" width="100">
            </td>
            <td><?php echo $pecah['deskripsi'];?></td>
            <td>
                <a href="index.php?halaman=hapusacara&id=<?php echo $pecah['id']?>" class="btn-danger btn">hapus</a>
            </td>
        </tr>
        <?php $nomor++;?>
        <?php }?>
    </tbody>
</table>
<a href="index.php?halaman=tambahacara" class="btn btn-primary">Tambah Acara</a>