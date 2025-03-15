<?php 
  include "koneksi.php";

  // if(empty($_GET["id"])){
  //   header('Location: profiles.php');
  // }

  // $idPfl = $_GET['id'];
  $user = mysqli_query($connection,"SELECT more_profiles.id_profile, 
    GROUP_CONCAT(more_profiles.skill SEPARATOR '<br>') AS SKL, 
    GROUP_CONCAT(more_profiles.pengalaman SEPARATOR '<br>') AS PGL, 
    profiles.nama, profiles.deskripsi, profiles.photo, profiles.jabatan 
    FROM profiles  
    LEFT JOIN more_profiles ON more_profiles.id_profile = profiles.id
    WHERE profiles.status = 1");
  $row = mysqli_fetch_assoc($user);


  if(!$row['photo']){
    header('Location: profiles.php');
  }
  // var_dump($row['photo']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>

  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <?php require_once 'components/header.php'; ?>

    <main class='home-container'>
      <div class="profile">
        <img src="assets/uploads/<?= $row['photo']; ?>" alt="image"> 
        <h2 class='title'><?= $row['nama']; ?></h2>
        <p class='para' style="text-transform: uppercase;"><?= $row['jabatan']; ?></p>
      </div>
      <div class="detail">
        <h2 class='title'>Overview</h2>
        <p class='para'><?= $row['deskripsi']; ?></p >
      </div>

      <div class="kemampuan" style="font-size: 18px;">
        <div class="skills" >
          <h2>Skills</h2>
          <div class="pengalaman-item">
            <ul>
              <li style="list-style-type: none;">
                <?= $row['SKL'] ? $row['SKL'] : 'Tidak ada keahlian ('?>
              </li>
            </ul>
          </div>
        </div>
        <div class="pengalaman">
          <h2>Pengalaman</h2>
          <div class="pengalaman-item">
            <ul>
              <li style="list-style-type: none;">
                <?= $row['PGL'] ? $row['PGL'] : 'Tidak ada pengalaman \'('?>
              </li>
            </ul>
          </div>
        </div>
        </div>
    </main>

  <?php require_once 'components/footer.php'; ?>
</body>
</html>