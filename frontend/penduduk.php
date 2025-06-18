<!-- konten --> 
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h2 class="fw-bold text-center">Data Demografi Berdasar Pendidikan Dalam KK</h2>
        </div>
    </div>
    <div class="col mt-4">
        <table class="table table-bordered table-hover text-center align-middle">
            <thead class="table-success text-white">
                <tr style="color: black">
                    <th>No</th>
                    <th>Kelompok</th>
                    <th>Laki-Laki</th>
                    <th>Perempuan</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "config/koneksi.php";
                $sql = $conn->query("SELECT * FROM data_pendidikan ORDER BY id_golongan DESC");
                $i = 1;
                foreach($sql as $d):
                ?>
                <tr>
                    <td><?= $i++; ?></td>

                    <td><?= $d['kelompok']; ?></td>
                    <td><?= $d['laki_laki']; ?></td>
                    <td><?= $d['perempuan']; ?></td>
                    <td><?= $d['jumlah']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- konten -->
