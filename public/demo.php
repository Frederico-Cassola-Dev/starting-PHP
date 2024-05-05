<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.


// TODO

$indiWeapon = match($opponentWeapon){
  'fists' => 'gun',
  'gun' =>  'whip',
  default => 'fists'
};

echo "The opponent weapon is a: $opponentWeapon and Indiana Jones weapon is: $indiWeapon"
?>
