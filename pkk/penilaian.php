<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Penilaian</title>
</head>

<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "pkk";

$conn = new mysqli($server, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed:" . $conn->connect_error);
} else {
}

$sql = "SELECT * FROM matriks_penilaian_kinerja_lam_infokom";
$result = $conn->query($sql);
?>

<?php include "header.html" ?>

<h2 style="text-align: center; padding-left: 25%; padding-right: 25%; padding-top: 1rem; padding-bottom: 1rem;">
  AKREDITASI PROGRAM STUDI MATRIKS PENILAIAN KINERJA PROGRAM STUDI LEMBAGA AKREDITASI MANDIRI INFORMATIKA
</h2>

<table>
  <tr>
    <th><a href="#pesan" data-toggle="modal">Kriteria</a></th>
    <th>Jenis</th>
    <th>No. Urut</th>
    <th>No. Butir</th>
    <th>Bobot dari 400</th>
    <th>Elemen Penilaian LAM</th>
    <th>Deskriptor</th>
    <th>Sangat Baik = 4</th>
    <th>Baik = 3</th>
    <th>Cukup = 2</th>
    <th>Kurang = 1</th>
  </tr>
  <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["Kriteria"] . "</td><td>" . $row["Jenis"] .
        "</td><td>" . $row["No_Urut"] . "</td><td>" . $row["No_Butir"] . "</td><td>" .
        $row["Bobot_Dari_400"] . "</td><td>" . $row["Elemen_Penilaian_LAM"] .
        "</td><td>" . $row["Deskriptor"] . "</td><td>" . $row["Ket1"] . "</td><td>" .
        $row["Ket2"] . "</td><td>"  . $row["Ket3"] . "</td><td>" . $row["Ket4"] . "</td></tr>";
    }
  } else {
    echo "Data tidak tersedia :(";
  }
  $conn->close();
  ?>
</table>

<div class="modal fade" id="pesan" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1>Keterangan Kriteria</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <p>Kriteria 1 Visi. Misi. Tujuan dan Strategi<br>
          Kriteria 2 Tata Pamong. Tata Kelola. Kerjasama<br>
          Kriteria 3 Mahasiswa<br>
          Kriteria 4 Sumber Daya Manusia<br>
          Kriteria 5 Keuangan dan Sarana Prasarana<br>
          Kriteria 6 Pendidikan<br>
          Kriteria 7 Penelitian<br>
          Kriteria 8 Pengabdian kepada Masyarakat<br>
          Kriteria 9 Luaran dan Capaian<br>
          Kriteria D1. Suplemen Program Studi Bidang Sistem Informasi<br>
          Kriteria D2. Suplemen Program Studi Bidang Teknologi Informasi<br>
          Kriteria D3. Suplemen Program Studi Bidang Teknik Informatika<br>
          Kriteria D5. Suplemen Program Studi Bidang Rekayasa Perangkat Lunak<br>
          Kriteria E Rencana Pengembangan</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" id="mod">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  <?php include "footer.html" ?>