<?php
require '../../controllers/kaprodi/make_jadwal_controller.php';

$jadwal = new makeJadwal();

$id = $_GET["id"];


$mahasiswa = $jadwal->find($id);


if (isset($_POST['submit'])) {
    // var_dump($_POST);
    // die();
    if ($jadwal->createData($_POST) > 0) {
        echo " <script>
            alert('Kaprodi Berhasil Menambahakan Data Jadwal');
            document.location.href = '';
            </script> ";
    } else {
        echo " <script>
            alert('Kaprodi gagal Menambahkan Data Jadwal');
            Document.location.href = '';
        </script> ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN MEMBUAT JADWAL</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../dist/assets/css/bootstrap.css">

    <link rel="stylesheet" href="../../dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../../dist/assets/css/app.css">
    <link rel="shortcut icon" href="../../dist/assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
    <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="../../dist/assets/images/logo/logo.jpg" style="width: 100px; height: 100px;" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  ">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Extra Components</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="extra-component-avatar.html">Avatar</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Layouts</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="layout-default.html">Default Layout</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-title">Forms &amp; Tables Mahasiswa</li>

                        <li class="sidebar-item active has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Halaman Form </span>
                            </a>
                            <ul class="submenu active">
                                <li class="submenu-item active">
                                    <a href="tabel_judul_mahasiswa.php">Tabel Judul Mahasiswa</a>
                                </li>
                                <li class="submenu-item active">
                                    <a href="tabel_nilai_sidang.php">Tabel Jadwal Mahasiswa</a>
                                </li>
                                <li class="submenu-item active">
                                    <a href="show_nilai_sidang.php">Lihat Jadwal Sidang</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last mb-10">
                            <h3 class="">Buat Jadwal Mahasiswa</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kaprodi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">

                    <form method="post" action="">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Data Mahasiswa</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="id_proposal" value="<?= $mahasiswa['id_proposal'] ?>">
                                        <div class="form-group" style="font-size: 1.2rem;">
                                            <label for="basicInput">Nama Mahasiswa : <?= $mahasiswa['nama_mahasiswa'] ?> </label>
                                        </div>
                                        <div class="form-group" style="font-size: 1.2rem;">
                                            <label for="basicInput">Npm : <?= $mahasiswa['npm'] ?> </label>
                                        </div>
                                        <div class="form-group" style="font-size: 1.2rem;">
                                            <label for="basicInput">Jurusan : <?= $mahasiswa['jurusan'] ?> </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Buat Jadwal Untuk " <?= $mahasiswa['nama_mahasiswa'] ?> ". </h4>
                            </div>


                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="basicInput"> Hari/Tanggal :</label>
                                            <input type="text" class="form-control" id="basicInput" name="hari_tanggal">
                                        </div>
                                        <div class="form-group">
                                            <label for="basicInput">Jam :</label>
                                            <input type="text" class="form-control" id="basicInput" name="jam">
                                        </div>
                                        <div class="form-group">
                                            <label for="basicInput">Tempat Sidang :</label>
                                            <input type="text" class="form-control" id="basicInput" name="tempat_sidang">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="basicInput">Dosen Pembimbing 1 :</label>
                                            <input type="text" class="form-control" id="basicInput" name="dosen_pembimbing1">
                                        </div>
                                        <div class="form-group">
                                            <label for="basicInput">Dosen Pembimbing 2 :</label>
                                            <input type="text" class="form-control" id="basicInput" name="dosen_pembimbing2">
                                        </div>
                                        <div class="form-group">
                                            <label for="basicInput">Naskah :</label>
                                            <input type="text" class="form-control" id="basicInput" name="naskah">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; Uniba Madura</p>
                    </div>
                    <!-- <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div> -->
                </div>
            </footer>
        </div>
    </div>
    <script src="../../dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../dist/assets/js/bootstrap.bundle.min.js"></script>

    <script src="../../dist/assets/js/main.js"></script>
</body>

</html>