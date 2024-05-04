
  <?php

$weapons = ['pistola', 'canhao','faca'];

$weapons[] = 'bazucadasakjh';
echo count($weapons);
echo'<br>';
echo strlen($weapons[0]);
echo'<br>';
$sortedWeapons = sort($weapons);
echo $sortedWeapons;
echo'<br>';
echo'<br>';
var_dump($weapons);
echo'<br>';
var_dump(in_array('faca', $weapons));
?>
