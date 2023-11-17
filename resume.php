<?php

// Penulisan Dasar PHP
echo "Hello World";
echo "<br \>";
echo "Hello World"; echo "<br \>";
echo "Hello World"; echo "<br \>";

$andi="Andi";

echo $andi; echo "<br \>";

// Nilai Variabel
$a= 'Saya sedang belajar PHP';
$b= 5;

print $a; echo "<br \>";
echo $b; echo "<br \>";

$c= 10;
$d= "Sedang belajar PHP $c";

echo $d; echo "<br \>";

// Integer
$umur=21;
$harga=15000;
$rugi=-500000;

echo $umur; 
echo "<br\>";
echo $harga; 
echo "<br\>"; 
echo $rugi; 

$e=14;
$f=16;
$g= $e+ $f;
echo $g;

$h=$e * $f;
echo $h; 
echo "<br \>";

// Float
$angka_float1= 0.78;
$angka_float2= 14.99;
$angka_scientific1= 0.314E1;
$angka_scientific2= 0.3365E-3;

echo $angka_float1;
echo "<br \>";
echo $angka_float2;
echo "<br \>";
echo $angka_scientific1;
echo "<br \>";
echo $angka_scientific2;
echo "<br \>";

$i= 10.66;
$j= 12.4;
$k= $i + $j;
echo $k;

$l=$i / $j;
echo $l;
echo "<br \>";

// String
$string1='Ini adalah string sederhana';
$string2="Ini adalah string yang bisa memiliki bebeapa baris";
$string3='Dia berkata: "I\'ll be back"';

echo $string1; echo "<br \>";
echo $string2; echo "<br \>";
echo $string3; echo "<br \>";
// Boolean
$benar=true;
$salah=false;

echo "benar = $benar, salah + $salah"; echo "<br \>";
// Operatoe Matematika
$hasil1= -3;
$hasil2= 3+5;
$hasil3= 8-4.5;
$hasil4= 2*5;
$hasil5= 3+8/5-3;
$hasil6= 10 % 4;

echo "$hasil1:"; var_dump($hasil1); echo "<br \>";
echo "$hasil2:"; var_dump($hasil2); echo "<br \>";
echo "$hasil3:"; var_dump($hasil3); echo "<br \>";
echo "$hasil4:"; var_dump($hasil4); echo "<br \>";
echo "$hasil5:"; var_dump($hasil5); echo "<br \>";
echo "$hasil6:"; var_dump($hasil6); echo "<br \>";


?>