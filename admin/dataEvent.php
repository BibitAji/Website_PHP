<?php
include("../template/header.php");
include("../config/config.php");
$query = "SELECT * FROM kegiatan";
$hasil = mysqli_query($koneksi,$query);

?>
<!-- content -->
<div class="container mt-3">
    <h2 class="d-flex justify-content-center">
        Data Event Lomba Hackhaton
        <a href="tambahEvent.php">
            <button type="button" class="btn ml-3 btn-success">tambah</button>
        </a>
    </h2>
    <div class="card">
        <table class="table m-2">
            <thead>
                <th>No</th>
                <th>Nama Kegiatan</th>
                <th>Tanggal</th>
                <th>Informasi</th>
            </thead>
            <tbody>
            <?php while ($tkt = mysqli_fetch_array($hasil)) { ?>
                    <tr>
                        <td><?= $tkt["id_kegiatan"] ?></td>
                        <td><?= $tkt["nama_event"] ?></td>
                        <td><?= $tkt["tanggal_event"] ?></td>
                        <td><?= $tkt["informasi"] ?></td>
                        
                        <td>
                            <a href="editEvent.php?id=<?= $tkt["id_kegiatan"] ?>">
                                <button class="btn btn-sm btn-outline-primary">
                                    edit
                                </button>
                            </a>
                            <a onclick="return confirm('Yakin ingin menghapus?')" 
                                href="hapusEvent.php?id_kegiatan=<?= $tkt["id_kegiatan"] ?>">
                                <button class="btn btn-sm btn-outline-danger">
                                    hapus
                                </button>
                            </a>
                            <a 
                                href="dataEvent.php?id=<?= $tkt["id_kegiatan"] ?>">
                                <button class="btn btn-sm btn-outline-danger">
                                    pendaftar
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
include("../template/footer.php");
?>
