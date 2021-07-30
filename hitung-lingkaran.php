//emiisulistyaningsih
<h3>Hitung Keliling dan Luas Lingkaran</h3>
 
<p>Masukkan Jari-Jari Lingkaran</p>
<form action="hitung-lingkaran.php" method="post">
	Jari-jari :<input type="text" name="jari2"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
if(isset($_POST['submit'])){
	$jari2 = $_POST['jari2'];
	$phi = 22/7;
	$luas_lingkaran = $phi * $jari2 * $jari2;
	$keliling_lingkraran = $phi*($jari2 + $jari2);
	
	echo "Lingkaranan dengan jari-jari $jari2 maka memiliki <br>";
	echo "Luas : $luas_lingkaran <br>";
	echo "Keliling : $keliling_lingkraran";
}
?>