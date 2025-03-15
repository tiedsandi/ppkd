function soal4() {
  const umur = prompt('Masukan umur!');
  const hargaTiket = 100000;

  if (umur < 10) {
    console.log('Bayar tiketnya Rp. ' + (hargaTiket - hargaTiket * (50 / 100)));
  } else if (umur >= 10 && umur <= 17) {
    console.log('Bayar tiketnya Rp. ' + (hargaTiket - hargaTiket * (25 / 100)));
  } else {
    console.log('Bayar tiketnya Rp. ' + hargaTiket);
  }
}
