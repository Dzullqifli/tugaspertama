<?php
$kata = strtolower(readline("Masukkan kata atau kalimat: "));
$kata_balik = strrev($kata);
if ($kata == $kata_balik) {
  echo "$kata adalah palindrom.";
} else {
  echo "$kata bukan palindrom.";
}
?>