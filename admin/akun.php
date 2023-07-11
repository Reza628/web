<h1>selamat datang</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>no</th>
            <th>username</th>
            <th>password</th>
            <th>aksi</th>

        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM users"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['username']; ?></td>
                <td><?php echo $pecah['password']; ?></td>
                <td>
                    <a href="index.php?halaman=hapusakun&id=<?php echo $pecah['username'] ?>" class="btn-danger btn">hapus</a>
                </td>
            </tr>
            <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>