<?php
if (isset($_POST["proses1"])) {
  if (empty($_POST["password"])) {
    echo"Password di butuhkan";
  } else {
    $password = $_POST["password"];
    if (!validate_password($password)) {
      echo "Password must contain at least one uppercase letter, one lowercase letter, one number, one special character, and be at least 8 characters long.";
} else {
  echo  "Password is valid";}
}
}

function validate_password($password) {
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
  
    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
      return false;
    } else {
      return true;
    }
  }
?>  