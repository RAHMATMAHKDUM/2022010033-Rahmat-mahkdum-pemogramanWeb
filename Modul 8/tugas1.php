<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Olah Nama Dosen</title>


</head>
<body>
  <h1>Olah Nama Dosen</h1>
  <form method="post" action="">
    <label for="nama">Masukkan Nama Dosen:</label>
    <select name="nama" id="nama">
      <option value="">pilih nama dosen</option>
      <?php
      // Array untuk menyimpan nama-nama dosen
      $daftarDosen = [
        "Indra Kurniawan, M.Kom.",
        "Ahamad Faiq Abror, M.Pd.",
        "Shofia Ulfah, M.Kom.",
        "Ahlis Noor Kholili, M.Kom."
      ];

      // Menampilkan pilihan nama dosen dari array
      foreach ($daftarDosen as $dosen) {
        echo "<option value=\"$dosen\">$dosen</option>";
      }
      ?>
    </select>
    <input type="submit" name="submit" value="Proses">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nama'])) {
      $nama = $_POST['nama'];
      $jumlahKata = str_word_count($nama);
      $jumlahHuruf = strlen(preg_replace('/\s+/', '', $nama));
      $kebalikanNama = strrev($nama);

      echo "<h2>Hasil:</h2>";
      echo "<p>Jumlah Kata: $jumlahKata</p>";
      echo "<p>Jumlah Huruf: $jumlahHuruf</p>";
      echo "<p>Kebalikan Nama: $kebalikanNama</p>";
    }
  }
  ?>

</body>
</html>