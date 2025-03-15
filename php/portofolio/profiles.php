<?php 
  require_once 'koneksi.php';
  session_start();
  session_regenerate_id();

  if(empty($_SESSION['Emaill'])){
    header('Location: index.php');
  }

  $selectProfile = mysqli_query($connection, "SELECT * FROM profiles");
  $rows = mysqli_fetch_all($selectProfile, MYSQLI_ASSOC);


  if(isset($_GET['idDel'])){
    $id = $_GET['idDel'];
    $checkFoto = mysqli_query($connection, "SELECT photo FROM profiles WHERE id = $id");
    $rowPhoto = mysqli_fetch_assoc($checkFoto);
    
    if($rowPhoto){
      unlink('assets/uploads/'. $rowPhoto['photo']);
      $delete = mysqli_query($connection, "DELETE FROM profiles WHERE id = $id");
    // } else {
    //   header('location: add_edit_profile.php?error="ada yang salah"');
    }

    if($delete){
      header('location: profiles.php');
    } else {
      header('location: add_edit_profile.php?error="ada yang salah"');
    }
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['idST'];
    $status = $_POST['status']; 
  
    $update_0 = mysqli_query($connection, "UPDATE profiles SET status = 0");
  
    if ($status == 1) {
      $update_1 = mysqli_query($connection, "UPDATE profiles SET status = 1 WHERE id = $id");
    }
  
    if ($update_1) {
      header('location: profiles.php');
    } else {
      header('location: profiles.php?error="Ada yang salah"');
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
    <div class="row">
      <div class="col-1"></div>

      <div class="col-10">
        <div class="card mt-4">
          <div class="card-header text-center fw-bold">Managae Profile</div>

          <div class="card-body">
            <div class="mt-1 mb-2">
              <a href="add_edit_profile.php" class="btn btn-primary">Create</a>
            </div>

            <div class="table table-responsive">
              <table class='table table-bordered text-center'>
                <tr>
                  <th>No</th>
                  <th>Photo</th>
                  <th>Nama Lengkap</th>
                  <th>Jabatan</th>
                  <th>Deskripsi</th>
                  <th>Settings</th>
                  <th>Active</th>
                </tr>
                <?php 
                $no = 1;
                foreach ($rows as $row ) : ?>
                <tr style="text-align: center; vertical-align: middle;">
                  <td><?php echo $no++; ?></td>
                  <td>
                    <img src="assets/uploads/<?= $row['photo']?>" alt="<?= $row['nama']?>" width="125">
                  </td>
                  <td><?php echo $row['nama']?></td>
                  <td style="text-transform: capitalize;"><?= $row['jabatan']?></td>
                  <td style="max-width: 250px;"><?= $row['deskripsi']?></td>
                  <td >
                    <a href="add_edit_profile.php?id=<?= base64_encode($row['id'])?>" class="btn btn-success btn-sm">Edit</a>
                    <a onclick="return confirm('Yakin ingin menghapus?')" href="profile.php?idDel=<?= $row['id'] ?>" class=" btn btn-danger btn-sm">Delete</a>
                  </td>
                  <td style="max-width: 250px;">
                    <form action="?idST=<?= $row['id'] ?>" method="post">
                      <input type="radio" name="status" <?= $row['status'] == 1 ? 'checked' : '' ?> value="1" onchange="this.form.submit();">
                    </form>
                  </td>
                </tr>
                <?php endforeach?>
              </table>
            </div>

          </div>
        </div>
      </div>

      <div class="col-1"></div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>