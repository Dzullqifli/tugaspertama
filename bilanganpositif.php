<?php
$bilangan = readline("Masukkan bilangan bulat: ");
if ($bilangan > 0) {
  echo "Bilangan $bilangan adalah bilangan positif.";
} elseif ($bilangan == 0) {
  echo "Bilangan $bilangan adalah nol.";
} else {
  echo "Bilangan $bilangan adalah bilangan negatif.";
}
?>