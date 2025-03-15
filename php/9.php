<?php
  class Penduduk {
    public $namaP;
    protected $umurP;
    // private $alamatP = 'Jakarta'; //karena private tidak bisa di turunkan ke childnya
    public $alamatP = 'Jakarta';
  }
  class Bansos extends Penduduk {
    public $namaP = 'Anton';
    protected $umurP = 24;
    public $status = 'Miskin';

    public function showPenduduk(){
      echo $this->namaP."<br>";
      echo $this->status."<br>";
      echo $this->umurP."<br>";
      echo $this->alamatP."<br>";
      echo "<br><br>";
    }
  }

  $penduduk0 = new Bansos();
  $penduduk0->showPenduduk();

  echo $penduduk0->namaP."<br>";
  echo $penduduk0->status."<br>";
  // echo $penduduk0->umurP."<br>"; // eror karena protected
  echo $penduduk0->alamatP."<br>";
  echo "<br><br>";



  class Penduduk1 {
    public $namaP;
    protected $umurP;
    private $alamatP = 'Jakarta'; //karena private tidak bisa di turunkan ke childnya

    public function setAlamat($alamat){
      $this->alamatP = $alamat;
    }

    public function getAlamat(){
      return $this->alamatP;
    }
  }

  class Bansos2 extends Penduduk1 {
    public $namaP = 'Antoni';
    protected $umurP = 22;
    public $status = 'Kaya';

    public function showPenduduk(){
      echo $this->namaP."<br>";
      echo $this->status."<br>";
      echo $this->umurP."<br>";
      echo $this->alamatP."<br>";
    }
  }



  $penduduk2 = new Bansos2();
  $penduduk2->showPenduduk();
  $penduduk2->setAlamat('Surabaya');
  echo $penduduk2->getAlamat();



  