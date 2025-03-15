<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar HTML</title>

  <style>
    nav {
      color: white;
      padding: 10px;
      display: flex;
      gap: 30px;
    }

    nav a {
      text-decoration: none;
      color: black;
    }

    nav a:hover {
      color: bisque;
    }
  </style>
</head>

<body>
  <?php require_once 'inc/navbar.php'; ?>

  <h1>Selamat belajar!</h1>
  <h2>Selamat belajar!</h2>
  <h3>Selamat belajar!</h3>
  <h4>Selamat belajar!</h4>
  <h5>Selamat belajar!</h5>
  <h6>Selamat belajar!</h6>

  <hr>

  <p>Halo ini paragraf pertama!</p>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam sit non dolor, labore vel doloribus placeat
    repellendus inventore illum similique unde voluptatibus est facere, in laboriosam aliquam libero quod hic!</p>


  <div class="content">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, optio quos dolor repellat accusamus voluptatum.
      Eius, unde! Quod illum ad dolore consequatur aliquam iste soluta? Velit vitae nobis doloremque repellat.</p>
  </div>

  
  <?php require_once 'inc/footer.php'; ?>
</body>

</html>