<?php
include_once("config/config.php");
include("template/header.php");
$query = "SELECT * FROM kegiatan";
$hasil = mysqli_query($koneksi,$query);
?>
    <div class="container mt-3">
    <h2 class="d-flex justify-content-center">
        Data Tiket
       
    </h2>
    <div class="card">
        <table class="table m-2">
            <thead>
                <th>No</th>
                <th>Nama Event</th>
                <th>Tanggal Event</th>
                <th>Informasi</th>
                
                <th>Opsi</th>
            </thead>
            <tbody>
            <?php while ($tkt = mysqli_fetch_array($hasil)) { ?>
                    <tr>
                        <td><?= $tkt["id_kegiatan"] ?></td>
                        <td><?= $tkt["nama_event"] ?></td>
                        <td><?= $tkt["tanggal_event"] ?></td>
                        <td><?= $tkt["informasi"] ?></td>
                        
                        <td>
                            <a href="user/registrasi_tiket.php?id=<?= $tkt["id_kegiatan"] ?>">
                                <button class="btn btn-sm btn-outline-primary">
                                    daftar
                                </button>
                            </a>
                           
                            
                        </td>
                    </tr>
                <?php
                }
                ?>
            
                
            </tbody>
        </table>
    </div>
    </div>
<?php
include("template/footer.php");
?>
