function soal5() {
  let roda = prompt('Jumlah Roda :');

  switch (roda) {
    case 2:
      console.log('Motor');
      break;
    case 4:
      console.log('Mobil');
      break;
    case 6:
      console.log('Truk');
      break;
    default:
      console.log('Ga tau apa');
  }
}
