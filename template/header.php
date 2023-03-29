<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="mr-2">
            <img src="https://www.its.ac.id/international/wp-content/uploads/sites/66/2021/01/Oxford-University-square-logo.png" width="50px">
        </div>
        <a class="navbar-brand" href="../user/dashboard.php">Oxford</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- <?php
                if ($_SESSION['data_user']['jabatan'] == 'admin') {

                ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="../user/user.php">User <span class="sr-only">(current)</span></a>
                    </li>
                <?php
                }
                ?> -->
                <li class="nav-item">
                    <a class="nav-link" href="../admin/dataEvent.php">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link disabled" href="#"><?= $_SESSION['data_user']['email'] ?></a> -->
                    <a class="nav-link disabled" href="#"></a>
                </li>
                <?php 
                if(empty($_SESSION["data_user"])){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="../auth/logout.php">Logout</a>
                </li>
                
                <?php
                }else {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="../auth/proses_logout.php">Logout</a>
                </li>
                <?php
                }
                ?>

                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>