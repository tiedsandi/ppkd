<?php
// class
class Mahasiswa {
  public $nama = 'joko'; // atribute
  private $umur;

  public function setUmur($umur){
    $this->umur = $umur;
  }

  public function getUmur(){
    return $this->umur;
  }

  public function setNama($nama){
    $this->nama = $nama;
  }
  public function getNama(){
    return $this->nama;
  }

}


$mhs = new Mahasiswa(); // object
$mhs2 = new Mahasiswa(); // object

echo $mhs->nama ='sandi' . '<br>';
// echo $mhs->umur = 22; // error karena private

// untuk mengubah atribute private dibutuhkan gette and setter
$mhs->setUmur(40);
echo $mhs->getUmur() . '<br>';


echo $mhs2->nama .'<br>';
echo $mhs2->getNama() .'<br>'; 
echo $mhs2->getUmur() .'<br>';

echo $mhs2->setNama('anwar') .'<br>';
echo $mhs2->getNama();

?>