<html>
<body>
<form action="" method="post">
  Jenis Barang: <select name="JenisBarang">
    <option selected> - Pilih - </option>
    <option value="1"> Hoodie </option>
    <option value="2"> Sweater </option>
  </select>
  <br>
  Jumlah : <input type="text" name="JumlahBarang"><br>
  <input type="submit">
</form>
</body>
</html>

<?php
$JenisBarang = $_POST["JenisBarang"];
$JumlahBarang = $_POST["JumlahBarang"];
$HargaSatu = NULL;
$Diskon = NULL;
if ($JenisBarang == 1) {
  $JenisBarang = "Hoodie";
  $HargaSatu = 250000;
} elseif ($JenisBarang == 2) { 
  $JenisBarang = "Sweater";
  $HargaSatu = 200000;
} else {
  $HargaSatu = 0;
}
$Total = $HargaSatu * $JumlahBarang;

if ($Total >= 500000) {
  $Diskon = 5/100;
}

$SubTotal = $Total - ($Total * $Diskon);

echo "Nota Pembelian
<br>------------------------
<br>
<br> Jenis Barang : $JenisBarang
<br> Jumlah Barang : $JumlahBarang
<br> Harga Satu : $HargaSatu
<br> Diskon : $Diskon
<br> Total : $Total
<br> Total Pembayaran : $SubTotal
";
?>