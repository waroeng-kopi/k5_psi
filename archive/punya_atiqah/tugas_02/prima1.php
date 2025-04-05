<?php
function is_prime($n) {
    if($n <= 1) {
      return false;
    }
    for($i = 2; $i <= sqrt($n); $i++) {
      if($n % $i == 0) {
        return false;
      }
    }
    return true;
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
      } else if (is_prime($angka)) {
        echo "$angka adalah bilangan prima.";
      } else {
        echo "$angka bukan bilangan prima.";
      }
    }
  }
?>  

