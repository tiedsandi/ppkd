<?php 
  include "koneksi.php";
  // require_once "koneksi.php";

  session_start();
  session_regenerate_id();
  

  if(isset($_POST['masuk'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $q_login = mysqli_query($connection,"SELECT * FROM users WHERE email = '$email'");

    // untuk cek
    // $row = mysqli_fetch_assoc($q_login);
    // var_dump($row);
    $user = mysqli_fetch_assoc($q_login);

    if (mysqli_num_rows($q_login) > 0) {

      if($email == $user['email'] && $password == $user['password']){
        $_SESSION['Emaill'] = $email;
        $_SESSION['USERNAME'] = $user['username'];
        header('Location: dashboard.php');
      } else {
        header('Location: index.php?error=password salah');
      }
    } else {
      header('Location: index.php?error=email tidak ada');
    
    }

  }

  $users = [
    'test@test.com' => 'AAGYMIN',
    'coba@coba.com' => 'BBHZNKO'
  ]; 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./css/style-profile.css">
</head>

<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="" method="POST">
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit" name="masuk">Login</button>
    </form>
    <?php if (isset($_GET['error'])): ?>
    <p class="error-message"><?= htmlspecialchars($_GET['error']) ?></p>
    <script>
      alert('error')
    </script>
    <?php endif; ?>
  </div>
</body>

</html>