<?php
// ############################################
// tugas mencari bil. Prima
// ############################################
function Prima($n) {
  for ($n1 = 2; $n1 < $n; $n1++) {
    if ($n % $n1 == 0) {
      return false;
    }
  }
  return true;
}

$n = 1000;

for ($n1 = 2; $n1 <= $n; $n1++) {
  if (Prima($n1)) {
    echo $n1 . " ";
  }
}


// ############################################
// tugas melakukan sorting dari kecil ke besar 
// dengan : 5, 15, 3, 30, 23, 1, 7
// ############################################

$array = [5, 15, 3, 30, 23, 1, 7];

function Sorting($array) {
  for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = 0; $j < count($array) - $i - 1; $j++) {
      if ($array[$j] > $array[$j + 1]) {
        $temp = $array[$j];
        $array[$j] = $array[$j + 1];
        $array[$j + 1] = $temp;
      }
    }
  }
  return $array;
}

// calling function
$sortedArray = Sorting($array);

// output
foreach ($sortedArray as $array) {
  echo "$array, ";
}

?>