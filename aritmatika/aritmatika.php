<html>
<head>
<title>Belajar PHP </title>
</head>
<body>
<h2>Mengenal Operator Aritmatik PHP</h2>
<?php
/**
*gatewan.com
*Wawan Beneran
*Mengenal Operator Aritmatik PHP
*/
	$nilai_a=$_REQUEST["nilai_a"];
	$nilai_b=$_REQUEST["nilai_b"];
	$nilai_and=$nilai_a & $nilai_b;
	$nilai_or=$nilai_a | $nilai_b;
	$nilai_xor=$nilai_a ^ $nilai_b;
	$nilai_nota=~$nilai_a;
	$nilai_notb=~$nilai_b;
	$nilai_left=$nilai_a << $nilai_b;
	$nilai_right=$nilai_a >> $nilai_b;
	printf("Nilai A:  <b>$nilai_a</b><br>");
	printf("Nilai B:  <b>$nilai_b</b><br><br>");
	printf("Hasil A & B: <br><b>$nilai_and</b><br>");
	printf("Hasil B | A: <br><b>$nilai_or</b><br>");
	echo "Hasil A" ^ "B";
	printf("Hasil ~A: <br><b>$nilai_nota</b><br>");
	printf("Hasil ~B: <br><b>$nilai_notb</b><br>");
	printf("Hasil A << B: <br><b>$nilai_left</b><br>");
	printf("Hasil A >> B: <br><b>$nilai_right</b><br>");
?>
</body>
</html>
