<?php
$makanan[1]	= “Lumpia”;
$makanan[4]	= “Bakpia”;
$makanan[7]	= “Dodol Garut”;
$makanan[8]	= “Siomay”;
$makanan[9]	= “Soto Makassar”;

$i = 1;
while ($i <= 9) {
  echo "Makanan ke-$i: ".$makanan[$i]."<br>";
  $i++;
}
?>