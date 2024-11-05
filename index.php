<?php
$a=5;
$b=6;
$c=$a+$b;
echo "Hasil:".$c;
?>

<?php
$angka1= 6;
$angka2= 3;
$operasi = "+"; //bisa diganti
switch ($operasi) {
    case "+" :
      echo $angka2+$angka1;
      break;
    case "-" :
      echo $angka2-$angka1;
      break;
    default;
      echo "pilih salah satu operator";
  }
  ?> 


       