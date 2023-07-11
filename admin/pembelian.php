<h1>selamat datang</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM pembelian JOIN users ON pembelian.id_user = users.id_user"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['username']; ?></td>
            <td><?php echo $pecah['tanggal']; ?></td>
            <td><?php echo $pecah['status']; ?></td>
            <td><?php echo $pecah['total']; ?></td>
            <td>
                <?php if ($pecah['status'] == "sudah kirim pembayaran") : ?>
                <a href="index.php?halaman=pembayaran&id=<?php echo $pecah['id_pembelian']; ?>"
                    class="btn btn-success">Lihat Pembayaran</a>
                <?php elseif ($pecah['status'] == "lunas") : ?>
                <p>Lunas</p>
                <?php endif; ?>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>

    </tbody>
</table>