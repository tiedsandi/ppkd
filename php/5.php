<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
</head>
<body>
  <?php
    if(isset($_POST['login'])){
      $email = $_REQUEST['email']; //bisa pakai request 
      $password = $_POST['password'];
      
      $email_table = "admin@gmail.com";
      $password_table = "123456";

      if($email == $email_table and $password == $password_table){
        echo "<p>Berhasil Login</p>";
      } else {
        header('location:5.php?error');
      }
    }
  ?>
  
  <div class="login">
    <?php if(isset($_GET['error'])): ?>
        <p class="alert">Upss, mohon periksa kembali email dan password anda!!</p>
    <?php endif?>

    <form action="" method="post">
      <label for="">Email</label>
      <input type="email" name="email" placeholder="Masukan Email Anda">
      <br><br>
      <label for="">Password</label>
      <input type="password" name="password">
      <br><br>
      <button name="login" type="submit">Login</button>
    </form>
    
  </div>
</body>
</html>