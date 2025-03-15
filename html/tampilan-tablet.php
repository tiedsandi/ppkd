<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <style>
    body{
      background: linear-gradient(to right, orange, white) !important;
      font-family: Arial, sans-serif;
    }

    .container{
      max-width: 1000px;
      margin: auto;
      padding: 20px;
    }
    .header{
      display: flex;
    }

    .header img{
      max-width: 190px;
      align-self: flex-start;
    }

    .kata{
      margin-top: 30px ;
      padding-left: 90px;
      flex-grow: 1;
    }

    .kata p {
      margin-top: 80px;
    }

    .options{
      display: flex;
      justify-content: center;
      gap: 25px;
      margin-top: 60px;
      margin-left: 85px;
    }

    .btn-option{
      background-color: blue;
      color: white;
      text-decoration: none;
      padding: 15px;
      border-radius: 10px;
      display: flex;
      justify-content: center;
      width: 250px;
      height: 120px;
      font-size: 18px;
      font-weight: bold;
      align-items: center;
    }
    .btn-option:hover{
      background-color: lightBlue;
    }

    footer{
      position: fixed;
      bottom: 5px;
      background-color: blue;
      width: 100%;
      color: white;
      padding: 10px;
      font-size: 18px;
      font-weight: bold;
    }

  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <div class="kata">
        <h4>Assalamualaikum</h4>
  
        <h5>Selamat Datang di PT. Sejahtera</h5>
        <p>silahkan pilih jenis transaksi anda</p>
      </div>

      <img src="https://banksyariahriyal.com/wp-content/uploads/2021/04/cropped-LOGO-RIYAL-IRYADI-NEW-1.png"
      alt="log BSR" width="200">
    </div>
    <div class="options">
      <a href="" class='btn-option'>Customer Service</a>
      <a href=""  class='btn-option'>Teller Officer</a>
      <a href=""  class='btn-option'>Pengaduan Nasabah</a>
    </div>
  </div>

  <footer>
    <marquee >Selamat datang di PT. BPRS Riyal Irsyadi</marquee>
  </footer>

</body>
</html>