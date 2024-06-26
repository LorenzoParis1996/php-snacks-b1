<?php 

$partite = [
   [
        "casa" => "team1",
        "ospite" => "team2",
        "punteggioCasa" => "10",
        "punteggioOspite" =>"5",
   ],

   [
    "casa" => "team5",
    "ospite" => "team9",
    "punteggioCasa" => "4",
    "punteggioOspite" =>"12",
   ],

   [
    "casa" => "team6",
    "ospite" => "team4",
    "punteggioCasa" => "14",
    "punteggioOspite" =>"13",
   ],
];

foreach ($partite as $partita) {
    echo $partita["casa"] . " - " . $partita["ospite"] . " | " . $partita["punteggioCasa"] . "-" . $partita["punteggioOspite"];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1></h1>
</body>
</html>

