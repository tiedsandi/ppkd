function soal3() {
  const nilai = prompt('Masukan nilai', '');

  if (nilai >= 85) {
    console.log('A');
  } else if (nilai >= 70 && nilai <= 84) {
    console.log('B');
  } else if (nilai >= 50 && nilai <= 69) {
    console.log('C');
  } else {
    console.log('D');
  }
}
