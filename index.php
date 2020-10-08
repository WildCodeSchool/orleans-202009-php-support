<?php

function isGroupDangerous(array $animals): bool
{
    foreach($animals as $animal) {
        if(isDangerous($animal)) {
            return true;
        }
    }

    return false;
}

function isDangerous(array $animal): bool
{
    return $animal['weight'] > 50 && $animal['isCarnivorous'] === true;
}

$animals = [
    ['species'=>'chien', 'weight'=>30, 'isCarnivorous'=> true],
    ['species'=>'vache', 'weight'=>60, 'isCarnivorous'=> false],
    ['species'=>'tigre', 'weight'=>100, 'isCarnivorous'=> true],
];

foreach($animals as $animal) {
    var_dump(isDangerous($animal));
}

var_dump(isGroupDangerous($animals));

?>
