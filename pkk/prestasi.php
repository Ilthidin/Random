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

$sql = "SELECT * FROM sertifikat_prestasi_mahasiswa_tif_ver_30012023_rec";
$result = $conn->query($sql);
?>

<?php include "header.html" ?>

<div id="judul" style="padding-top: 1rem; padding-bottom: 1rem;">
  <h2>Sertifikat Prestasi Mahasiswa</h2>
</div>

<table>
  <tr>
    <th>NO</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Angkatan</th>
    <th>Sertifikat Kompetensi Lulusan</th>
    <th>Penyelenggara</th>
    <th>Tanggal</th>
    <th>Program</th>
    <th>Kategori</th>
    <th>Link</th>
    <th>Surat Tugas</th>
  </tr>
  <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["NO"] . "</td><td>" . $row["NAMA"] .
        "</td><td>" . $row["NIM"] . "</td><td>" . $row["ANGKATAN"] . "</td><td>" .
        $row["SERTIFIKAT_KOMPETENSI_LULUSAN"] . "</td><td>" . $row["PENYELENGGARA"] .
        "</td><td>" . $row["TANGGAL"] . "</td><td>" . $row["PROGRAM"] . "</td><td>" .
        $row["KATEGORI"] . "</td><td>" . "<a href=" . $row["LINK"] .
        " target='_blank'><img src='link.png'</a>" . "</td><td>" . $row["SURAT_TUGAS"] . "</td></tr>";
    }
  } else {
    echo "Data tidak tersedia :(";
  }
  $conn->close();
  ?>
</table>
<?php include "footer.html" ?>