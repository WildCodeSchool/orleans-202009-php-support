<?php

$animals = ['chien', 'chat', 'requin', 'serpent', 'truite'];

for ($i = count($animals) - 3; $i < count($animals); $i++) {
    echo $animals[$i];
}

for ($i = count($animals) - 1; $i >= 3; $i--) {
    echo $animals[$i];
} ?>
    <br/>
<?php

foreach ($animals as $animal) {
    echo $animal;
}

$animals = [
    'mammiferes' => ['chien', 'chat'],
    'poissons'   => ['requin', 'truite'],
    'reptiles'   => ['serpent'],
];
var_dump($animals);
$animals['oiseaux'][] = 'aigle';
$animals['oiseaux'][] = 'pigeon';
$animals['mammiferes'][] = 'lapin';
var_dump($animals);

echo $animals['poissons'][1];

foreach ($animals as $family => $familyAnimals) {
    if (count($familyAnimals) > 1) {
        ?><h2><?php echo $family; ?></h2>
        <ul>
        <?php foreach($familyAnimals as $familyAnimal) {
        ?><li><?php echo $familyAnimal ?></li> <?php
        } ?>
        </ul>
        <?php
    }
}
?>
