<?php 

$randomNumbers = [];

while (count($randomNumbers) < 15) {
    $randoms = rand(1, 20);
    if (!in_array($randoms, $randomNumbers)) {
       array_push($randomNumbers, $randoms);
    }
}
var_dump($randomNumbers);

?>