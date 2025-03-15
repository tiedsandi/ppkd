<?php 
  // "$" dollar untuk membuat variable
  $nama = "PPKD Jakarta Pusat"; // varchart : kumpulan angka dan karakter lainnya
  $angkatan = 2025; //int: kumpulan angka
  $tinggi = 168.3; //float: kumpulan koma
  $true = true;
  $true1 = 1;
  $false = false;
  $false1 = 0;

  $nama_depan = "Fachran";
  $nama_belakang = "Sandi";

  // array
  $keranjang = ['salak', 'mangga','pepaya'];

  var_dump($angkatan);
  echo "<p>$nama</p>";
  print "$tinggi". "<br>";
  print_r($keranjang);//untuk array

  var_dump($true);
  var_dump($true1);

echo "<br>" . $nama_depan . " " . $nama_belakang;

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h1>Constanta Variable di php</h1>";

define('mobil', 'mini cooper');
echo mobil;
echo "<br>";
var_dump(mobil);

echo "<br><br>";

const motor = "Supra Parang";
echo motor;

