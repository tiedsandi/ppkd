<?php 
require_once 'koneksi.php';
  session_start();
  session_regenerate_id();

  if(empty($_SESSION['Emaill'])){
    header('Location: index.php');
  }
  
  if(isset($_POST['add-profile'])){
    $photo = $_FILES['photo'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $deskripsi = $_POST['deskripsi'];

    if($photo['error'] == 0){
      $fillName = uniqid() . "_" . basename($photo['name']);
      $fillPath = 'assets/uploads/' . $fillName;
      move_uploaded_file($photo['tmp_name'], $fillPath);

      echo($fillPath);
      
      $q_insert = mysqli_query($connection,"INSERT INTO profiles (photo,nama,jabatan,deskripsi) VALUES('$fillName','$nama','$jabatan','$deskripsi')");

      if($q_insert){
        header('location: profiles.php');
      } else {
        header('location: add_edit_profile.php?error="ada yang salah"');
      }
    } 
  }

  if(isset($_GET['id'])) {
    $id = intval(base64_decode($_GET['id']));

    $edit = mysqli_query($connection, "SELECT * FROM profiles WHERE id = $id");
    $row = mysqli_fetch_assoc($edit);
    
  }

  if(isset($_POST['edit-profile'])){
    $id = intval(base64_decode($_GET['id']));

    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $deskripsi = $_POST['deskripsi'];

    $photo = $_FILES['photo'];
    if($photo['error'] == 0){
      $fillName = uniqid() . "_" . basename($photo['name']);
      $fillPath = 'assets/uploads/' . $fillName;

      $fieldPhoto = "";
      if(move_uploaded_file($photo['tmp_name'], $fillPath)) {
        $cekFoto = mysqli_query($connection, "SELECT photo FROM profiles WHERE id = $id");
        $rowPhoto = mysqli_fetch_assoc($cekFoto);

        if($rowPhoto &&  file_exists('assets/uploads/'. $rowPhoto['photo'])){
          unlink('assets/uploads/'. $rowPhoto['photo']);
        }

        $fieldPhoto = "photo='$fillName',";
      } else{
        echo "GAGAL UPDATE FOTO";
      }
    }

    $update = mysqli_query($connection,"UPDATE profiles SET $fieldPhoto nama = '$nama', jabatan = '$jabatan', deskripsi = '$deskripsi' WHERE id = $id");
    
    if($update){
      header('location: profiles.php');
    } else {
      header("location: add_edit_profile.php?edit=$id");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

  <?php include "./components/navbar.php" ?>

  <div class="container">
    <div class="row ">
      <div class="col-2"></div>
      <div class="col-8">
        <div class="card mt-4">
          <div class="card-header text-center fw-bold">ADD Profile</div>
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="mt-1">
                <label for="" class="form-label">Photo</label>
                <input type="file" name="photo" class="form-control" >
              </div>
              <?php if(isset($_GET['id'])) { ?>
                <div class="mt-1">
                  <img src="assets/uploads/<?= $row['photo']?>" alt="<?= $row['nama']?>" width="125">
                </div>
              <?php } ?>
              <div class="mt-1">
                <label for="" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= isset($_GET['id']) ? $row['nama'] : '' ?>" >
              </div>
              <div class="mt-1">
                <label for="" class="form-label">Jabatan</label>
                <!-- <input type="text" name="jabatan" class="form-control" > -->
                <select class="form-select" name="jabatan">
                  <option value="" disabled selected>Pilih Jabatan</option>
                  <option value="admin" <?= isset($_GET['id']) && $row['jabatan'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                  <option value="anggota" <?= isset($_GET['id']) && $row['jabatan'] == 'anggota' ? 'selected' : '' ?>>Anggota</option>
                  <option value="budak" <?= isset($_GET['id']) && $row['jabatan'] == 'budak' ? 'selected' : '' ?>>Budak</option>
                </select>           

              </div>
              <div class="mt-1">
                <label for="" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" cols="30" rows="5"><?= isset($_GET['id']) ? $row['deskripsi'] : '' ?></textarea>

              </div>
              <div class="mt-3">
                <a href="profiles.php" class="btn btn-secondary">Back</a>

                <button class="btn btn-success" name="<?= isset($_GET['id']) ? 'edit-profile' : 'add-profile' ?>" type="submit"> 
                  <?= isset($_GET['id']) ? 'UPDATE' : 'ADD' ?>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-2"></div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>