<?php
include "koneksi.php";
?>
<html>  
<head><title>Index Film</title> 
<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<body background="stars.jpg">
<div id="navigation">
 <ul id="nav">
<li><a href="index.php">Halaman Utama</a></li> 
<li><a href="daftar_film.php">Jadwal Tayang</a></li>
<li><a href="daftar_bioskop.php">Theatre</a></li>
<li><a href="#">Options</a>
<ul>
<li><a href="arsip_film.php">Arsip Film</a></font></li>
<li><a href="input_film.php">Input Film</a></font></li>
<li><a href="input_tayang.php">Input Tayang</a></font></li>
</ul></li></div> 

<div id="header">
</div>

<div id="border">

<h2><center><font size="6"><b>Now Playing</font></b></h2></center>
&nbsp
&nbsp
&nbsp
   
    
<?php
$query = "select film.id_film, film.gambar, film.judul_film, film.produser, film.sutradara, film.penulis, film.produksi, kategori.nm_kategori from film natural join kategori";

$sql = mysql_query ($query);
while($hasil = mysql_fetch_array ($sql)){
$id_film = $hasil['id_film'];

$gambar= stripslashes($hasil['gambar']);
$judul_film= stripslashes($hasil['judul_film']);
$produser = stripslashes ($hasil['produser']);
$sutradara = stripslashes($hasil['sutradara']);
$penulis = stripslashes($hasil['penulis']);
$produksi = stripslashes($hasil['produksi']);
$nm_kategori = stripslashes($hasil['nm_kategori']);


//tampilkan film
echo "<center><img src='gambar/".$hasil['gambar']."' width='100px' height='100px'/><br>";
echo "<font size=4><a href='film_lengkap.php?id=$id_film'>$judul_film</a></font><br>";
echo "<small><font size=3>film diproduksi oleh <b> $produksi </b> dalam kategori <b> $nm_kategori </b> </font> </small></center>";
echo "<hr>";

}
?>

</div>


<div id="footer">
Design by Ilyas
</div>

</body>
</html>
