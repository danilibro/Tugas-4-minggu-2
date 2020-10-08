<?php
	require('animal.php');
	require('ape.php');
	require('frog.php');

	$sheep = new animal("shaun");

	echo 'Nama Hewan : '.$sheep->name . "<br>"; // "shaun"
	echo 'Jumlah Kaki : '.$sheep->legs . "<br>"; // 2
	echo 'Tipe Darah Dingin : ';
	echo var_dump($sheep->cold_blooded)."<br><br>"; // false

	$sungokong = new sungokong("kera sakti");
	echo 'Nama Hewan : '.$sungokong->name ."<br>";
	echo 'Jumlah Kaki : '.$sungokong->legs ."<br>";
	echo 'Tipe Darah Dingin : ';
	echo var_dump($sungokong->cold_blooded)."<br>"; // "Auooo"
	echo 'Ciri Khas : ';
	echo $sungokong->yell()."<br><br>";

	$kodok = new kodok("buduk");
	echo 'Nama Hewan : '.$kodok->name ."<br>";
	echo 'Jumlah Kaki : '.$kodok->legs ."<br>";
	echo 'Tipe Darah Dingin : ';
	echo var_dump($kodok->cold_blooded)."<br>"; // "Auooo"
	echo 'Ciri Khas : ';
	echo $kodok->jump()."<br><br>";
?>