<!-- konten --> 
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h2 class="fw-bold text-center">Data Populasi Perwilayah</h2>
        </div>
    </div>
    <div class="col mt-4">
        <table class="table table-bordered table-hover text-center align-middle">
            <thead class="table-success text-white">
                <tr style="color: black">
                    <th>No</th>
                    <th>Wilayah/Jorong</th>
                    <th>KK</th>
                    <th>L</th>
                    <th>P</th>
                    <th>L+P</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "config/koneksi.php";
                $sql = $conn->query("SELECT * FROM data_wilayah ORDER BY id_jorong DESC");
                $i = 1;
                foreach($sql as $d):
                ?>
                <tr>
                    <td><?= $i++; ?></td>

                    <td><?= $d['wilayah_jorong']; ?></td>
                    <td><?= $d['kk']; ?></td>
                    <td><?= $d['l']; ?></td>
                    <td><?= $d['p']; ?></td>
                    <td><?= $d['l_p']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- konten -->
