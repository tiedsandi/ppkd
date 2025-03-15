<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Page</title>

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php require_once 'inc/header.php'; ?>

    <main class='contact-container'>
  <h2 class='title'>Contact Me</h2>

    <div class="contact-form">
        <form action="" >
          <div class="form-group">
            <label class='para' for="email">Email</label>
            <input class='para' type="email" id="email" name="email" placeholder='alamat email' required>
          </div>
          
          <div class="form-group">
            <label class='para' for="message">Pesan</label>
            <textarea class='para' id="message" name="message" required placeholder='Tulis pesan anda...'></textarea>
          </div>

          <button class='para' type="submit">Kirim</button>
        </form>
      </div>
      
    </main>
  <?php require_once 'inc/footer.php'; ?>
</body>
</html>