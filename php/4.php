<!-- rate:
 1: 4,91%
 3: 6,37%
 6: 6,77%
 12: 7,83% 

 (nilaideposito*rate)/12*jangkawaktu
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deposito</title>
</head>
<body>
  <a href="4.php?deposito">Perhitungan Deposito</a>
  <a href="4.php?pembiayaan">Perhitungan Pembiayaan</a>

  <?php if(empty($_GET)): ?>
    <h1>Pilih Salah Satu</h1>
  <?php endif ?>
  
  <?php if(isset($_GET['deposito'])): ?>
    <h1>Perhitungan Deposito</h1>
    <form action="" method="post">

      <label for="nominal">Nominal Deposito</label>
      <input type="number" name="nominal">
      <br><br>

      <label for="jangka_waktu">Jangka Waktu</label>
      <select name="jangka_waktu" id="">
        <option value="1">1 Bulan</option>
        <option value="3">3 Bulan</option>
        <option value="6">6 Bulan</option>
        <option value="12">12 Bulan</option>
      </select>
      <br><br>

      <button name="proses"type="submit">Proses</button>
    </form>

    <?php 
      $hasil_Tahun = 0;
      if(isset($_POST['proses'])){
        $nominal = $_POST['nominal'];
        $jangka_waktu = $_POST['jangka_waktu'];
        $rate = [1=> 4.91, 3=>6.37, 6=>6.77, 12=>7.83 ];

        $rate = $rate[$jangka_waktu];
        echo "Rp. ". number_format($nominal);
        
        $hasil_Tahun = ($nominal*($rate/100))/12*$jangka_waktu;
        $hasil_Bulan = $hasil_Tahun/$jangka_waktu;
      }
    ?>

    <p><strong>Nilai estimasi bagi hasil / tahun : <?php echo "Rp. ". number_format($hasil_Tahun) ?></strong></p>
    <p><strong>Nilai estimasi bagi hasil / bulan : <?php echo isset($hasil_Bulan) ? "Rp. ". number_format($hasil_Bulan) :  "Rp. 0" ?></strong></p>

  <?php elseif(isset($_GET['pembiayaan'])): ?>
    <h1>Simulasi Angsuran Pembayaran</h1>
    <form action="" method="post">

      <label for="permohonan">Nominal Deposito</label>
      <input type="number" name="permohonan">
      <br><br>

      <label for="waktu">Jangka Waktu</label>
      <select name="waktu" id="">
        <option value="12">1 Tahun</option>
        <option value="24">2 Tahun</option>
        <option value="36">3 Tahun</option>
        <option value="48">4 Tahun</option>
        <option value="60">5 Tahun</option>
      </select>
      <br><br>

      <button name="proses2"type="submit">Proses</button>
    </form>

    <?php 
      $hasil = 0;
      if(isset($_POST['proses2'])){
        $nominal = $_POST['permohonan'];
        $jangka_waktu = $_POST['waktu'];

        $rate = 18/100;
        
        $hasil = ($nominal*$rate/$jangka_waktu)+$nominal/$jangka_waktu;
      }
    ?>

    <p><strong>Estimasi angsuran / bulan : <?php echo "Rp. ". number_format($hasil) ?></strong></p>
  <?php else: ?>
      <h1>Ini dari else</h1>
  <?php endif ?>


</body>
</html>