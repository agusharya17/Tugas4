<?php
function luas_lingkaran($diameter){
  $r = $diameter / 2;
  $luas_lingkaran = (1/2) * pi() * pow($r, 2);
  return $luas_lingkaran;
}

echo "Luas 1/2 lingkaran dengan diameter 10 cm adalah ".luas_lingkaran(10)." cm<sup>2</sup>";
?>