
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h2 class="fw-bold text-center">Keuangan masjid</h2>
        </div>
    </div>
    <div class="col mt-4">
        <table class="table">
            <thead class="table-light">
                <th>No</th>
                <th>keterangan</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
            </thead>

            <?php
include "config/koneksi.php";
     $sql = $conn->query("SELECT * FROM kas_masuk ORDER BY tanggal DESC");
     foreach($sql as $d):
    ?>

            <tbody>
                <td><?= ++$i; ?></td>
                <td><?= date("d/M/Y", strtotime($d['tanggal'])); ?></td>
                <td><?= $d['masuk']; ?></td>
                <td><?= $d['tanggal']; ?></td>
                <td><?= $d['keterangan']; ?></td>
            </tbody>
    <?php endforeach; ?>

        </table>
     
    </div>
</div>