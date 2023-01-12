<?php

$tableMonth = [
    "janvier",
    "fevrier",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "décembre",
];

echo $tableMonth[2];

echo "<br><br>";

echo $tableMonth[4];

$tableMonth[7] = "août";

$table2 = [59 => "Nord", 62 => "Nord pas de calais", 02 => "Aisne", 60 => "Oise", 80 => "Somme"];

echo "<br><br>";

echo $table2[59];

echo "<br><br>";

$table2[51] = "Marne";

echo "<br><br>";

foreach($tableMonth as $value) {
    echo $value . "<br>";
}

echo "<br><br>";

foreach($table2 as $values) {
    echo $values . "<br>";
}

echo "<br><br>";

foreach ($table2 as $key => $value) {
   echo "Le département $value a le numéro $key <br>";
}