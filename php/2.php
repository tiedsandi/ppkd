<!-- function -->
<?php
  $nama = 'sandi';
  $kota = 'jakarta';

  echo ucfirst($nama);
  echo "<br>";
  echo strtoupper($kota);

  echo "<br><br>";
  // casting (mengubah tipe data)
  echo "<h1>Casting di php</h1>";

  $a = 1;
  $b = "12 nama";
  $c = 0.10;
  $d = true;

  $a1 = (string)$a;
  $b1 = (int)$b;
  $c1 = (string)$c;
  $d1 = (string)$d;

  var_dump($a); echo "<br>";
  var_dump($b); echo "<br>";
  var_dump($c); echo "<br>";
  var_dump($d); echo "<br><br>";

  var_dump($a1); echo "<br>";
  var_dump($b1); echo "<br>";
  var_dump($c1); echo "<br>";
  var_dump($d1); echo "<br>";
