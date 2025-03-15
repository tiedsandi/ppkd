function hitung() {
  const nama = document.ffrom.nama.value;
  const tujuan = document.ffrom.tujuan.value;
  const kelas = document.ffrom.kelas.value;
  const jumlah_tiket = document.ffrom.jumlah.value;
  const isMember = document.ffrom.member.checked;

  let harga = 0;
  if (tujuan === 'Jakarta') {
    if (kelas === 'Eksekutif') {
      harga = 70000;
    } else if (kelas === 'Bisnis') {
      harga = 40000;
    } else {
      harga = 10000;
    }
  } else if (tujuan === 'Solo') {
    if (kelas === 'Eksekutif') {
      harga = 80000;
    } else if (kelas === 'Bisnis') {
      harga = 50000;
    } else {
      harga = 20000;
    }
  } else {
    if (kelas === 'Eksekutif') {
      harga = 90000;
    } else if (kelas === 'Bisnis') {
      harga = 60000;
    } else {
      harga = 30000;
    }
  }

  document.ffrom.harga.value = harga;
  document.ffrom.sub.value = harga * jumlah_tiket;
  document.ffrom.diskon.value = isMember ? 0.1 * document.ffrom.sub.value : 0;
  document.ffrom.total.value =
    document.ffrom.sub.value - document.ffrom.diskon.value;
}
