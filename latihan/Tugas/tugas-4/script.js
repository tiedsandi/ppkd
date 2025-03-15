function hitungBunga() {
  let saldo = parseFloat(document.fform.saldo.value);
  const bunga = parseFloat(document.fform.bunga.value);
  const waktu = parseFloat(document.fform.waktu.value);

  const idOutput = document.getElementById('output');

  for (let i = 0; i < waktu; i++) {
    saldo = saldo + saldo * (bunga / 100);
    idOutput.innerHTML += `Saldo Bulan ${i + 1} = Rp. ${saldo} </br>`;
  }
}

function resetOutput() {
  document.getElementById('output').innerHTML = '';
}
