<?php 

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="teacher">
         <?php foreach ($db['teachers'] as $teacher) {
            echo $teacher['name'] . "  " . $teacher['lastname'] . "  ";
         } ?>
    </div>
    <div class="pm">
    <?php  foreach ($db['pm'] as $pm) {
            echo $pm['name'] . "  " . $pm['lastname'] . "  ";
         }  ?>
    </div>
</body>
</html>