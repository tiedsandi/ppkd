<?php

class Mahasiswa_1{
  public $nama;
  public $umur;

  public function __construct($nama, $umur){
    $this->nama = $nama;
    $this->umur = $umur;
  }

  public function getNama(){
    return $this->nama . '<br>';
  }
  public function getUmur(){
    return $this->umur;
  }
}

$mhs1 = new Mahasiswa_1('sandi',25);
echo $mhs1->getNama();
echo $mhs1->getUmur();
?>