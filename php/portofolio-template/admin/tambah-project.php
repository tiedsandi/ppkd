<?php
require_once "../koneksi.php";
session_start();

// middleware
if (empty($_SESSION['EMAIL'])) {
    header("location:../login.php");
}

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    
    $foto = $_FILES['foto'];

    if ($foto['error'] == 0) {
        $fileName = uniqid() . '_' . basename($foto['name']);
        $filePath = "../assets/uploads/" . $fileName;
        move_uploaded_file($foto['tmp_name'], $filePath);

        $insert = mysqli_query($conn, "INSERT INTO project (nama, kategori, foto) 
                                    VALUES ('$nama','$kategori','$fileName')");

        if ($insert) {
            header("Location: project.php?kirim=sukses");
        } else {
            header("Location: tambah-project.php?tambah=error");
        }
    }
}

if (isset($_GET['idEdit'])) {
    $id = $_GET['idEdit'];
    $query = mysqli_query($conn, "SELECT * FROM project WHERE id = $id");
    $row = mysqli_fetch_assoc($query);
}

if(isset($_POST['edit'])){
    $id = $_GET['idEdit'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];

    $foto = $_FILES['foto'];

    if($foto['error'] == 0){
      $fillName = uniqid() . "_" . basename($foto['name']);
      $fillPath = '../assets/uploads/' . $fillName;

      $fieldPhoto = "";
      if(move_uploaded_file($foto['tmp_name'], $fillPath)) {
        $cekFoto = mysqli_query($conn, "SELECT foto FROM project WHERE id = $id");
        $rowPhoto = mysqli_fetch_assoc($cekFoto);

        if($rowPhoto && file_exists('../assets/uploads/'. $rowPhoto['foto'])){
          unlink('../assets/uploads/'. $rowPhoto['foto']);
        }

        $fieldPhoto = "foto='$fillName', ";
      } else{
        echo "GAGAL UPDATE FOTO";
      }
    }

    $q_Update = mysqli_query($conn, "UPDATE project SET  $fieldPhoto  nama='$nama', kategori='$kategori' WHERE id = $id");

    if ($q_Update) {
        header("Location: project.php");
    } else {
      header("location: tambah-project.php?ubah=error");
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include '../inc/navbar.php'; ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include '../inc/sidebar.php'; ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Blank Page</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Blank</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo isset($_GET['edit']) ? 'EDIT' : 'ADD' ?> Project</h5>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-sm-2">
                                        <label for="">Nama</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                            name="nama" value="<?php echo isset($_GET['idEdit']) ? $row['nama'] :"" ?>"
                                            required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-2">
                                        <label for="">Kategori</label>
                                    </div>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                            name="kategori" value="<?php echo isset($_GET['idEdit']) ? $row['kategori'] : "" ?>"
                                            required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-2">
                                        <label for="">Foto</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="foto" >
                                    </div>
                                    <?php if (isset($_GET['idEdit'])) {
                                    ?>
                                        <div class="mt-2">
                                            <img width="190" src="../assets/uploads/<?= $row['foto'] ?>" alt="">
                                        </div>
                                    <?php
                                    } ?>
                                </div>
                               
                                <div class="row mb-3">
                                    <div class="col-md-2 offset-md-2">
                                        <?php if (isset($_GET['idEdit'])) {
                                        ?>
                                            <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                                        <?php
                                        } else {
                                        ?>
                                            <button type="submit"class="btn btn-primary"  name="simpan" >Simpan</button>
                                        <?php
                                        } ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>