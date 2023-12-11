<?php
function gcd($a, $b) {
    while ($b != 0) {
      $t = $b;
      $b = $a % $b;
      $a = $t;
    }
    return $a;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["angka"])) {
      echo "Angka is required";
    } else {
      $angka = $_POST["angka"];
      if (!is_numeric($angka)) {
        echo "Input must be a number.";
      } else if (!is_int((int)$angka)) {
        echo "Input must be an integer.";
      } else if ($angka <= 0) {
        echo "Input must be a positive integer.";
      } else {
        $fpb = gcd($angka, rand(1,100));
        echo "Faktor Persekutuan Terbesar dari $angka dan bilangan acak antara 1-100 adalah: $fpb";
      }
    }
  }
?>  