<?php 
  session_start();
?>

<nav>
<?= empty($_SESSION['Emaill']) ? "<a href='login.php'> Login</a>" : "<a href='profiles.php'>&#8592; Profiles</a>" ?>
  |
  <a href="index.php">Home</a> |
  <a href="#">Download CV</a> |
  <a href="contact.php">Contact</a> |
  <a href="about.php  ">About Me</a>
</nav>