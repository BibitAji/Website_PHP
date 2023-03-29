<?php
include("../template/header.php");
?>
<!-- content -->
    <div class="container mt-3">
    <h2 class="d-flex justify-content-center">
        Daftar Event
        <a href="tambah_mahasiswa.php">
            <button type="button" class="btn ml-3 btn-success">tambah</button>
        </a>
    </h2>
    <div class="card mt-2">
        <form class="m-3" method="post" action="prosesTambahEvent.php">
            <div class="form-group">
                <label for="">Nama Event:</label>
                <input type="name" name="nama_event"  class="form-control">
            </div>
            <div class="form-group">
                <label for="">Tanggal Event :</label>
                <input type="date" name="tanggal_event" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Informasi:</label>
                <input type="text" name="informasi"  class="form-control">
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
