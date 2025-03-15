<?php
  class Penduduk {
    public $namaP;
    protected $umurP;
    private $alamatP;

    public function setUmur($umur){
      $this->umurP = $umur;
    }
    public function getUmur(){
      return $this->umurP;
    }

    public function setAlamat($alamat){
      $this->alamatP = $alamat;
    }
    public function getAlamat(){
      return $this->alamatP;
    }
  }

  $pddk1 = new Penduduk();
  echo $pddk1->namaP = 'Fachran';
  // echo $pddk1->umurP = 20; // error
  // echo $pddk1->alamat = 'asdasd'; // error

  $pddk1->setUmur(20);
  echo $pddk1->getUmur() . '<br>';

  $pddk1->setAlamat('Jakarta');
  echo $pddk1->getAlamat();

  
?>