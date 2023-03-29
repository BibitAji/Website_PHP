
<?php
include_once("../config/config.php");
include("../template/header.php");

// Get data by id 
$id = $_GET["id"];
$query = "SELECT * FROM kegiatan WHERE id_kegiatan = '$id'";
$hasil = mysqli_query($koneksi,$query);

$tkt = mysqli_fetch_array($hasil, MYSQLI_ASSOC);

?>
<!-- content -->
    <div class="container mt-3">
    <h2 class="d-flex justify-content-center">
        Edit Tiket
    </h2>
    <div class="card mt-2">
        <form class="m-3" method="post" action="prosesEditEvent.php">
            <input type="hidden" name="id" value="<?= $tkt["id_kegiatan"] ?>"  class="form-control">
            <div class="form-group">
                <label for="">Nama Kegiatan :</label>
                <input type="text" name="nama_event" value="<?= $tkt["nama_event"] ?>"  class="form-control">
            </div>
            <div class="form-group">
                <label for="">Tanggal Kegiatan :</label>
                <input type="text" name="ntanggal_event" value="<?= $tkt["tanggal_event"] ?>"  class="form-control">
            </div>
            <div class="form-group">
                <label for="">Informasi :</label>
                <input type="text" name="informasi" value="<?= $tkt["informasi"] ?>" class="form-control">
            </div>
            
            <div class="form-group">
                <button class="float-right btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    </div>

<?php
include("../template/footer.php");
?>