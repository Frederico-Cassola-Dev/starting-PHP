<?php
$movies = ['Les Aventuriers de l\'arche perdue' => ['john',  'marie',  'anthony'],
'Indiana Jones et le Temple maudit' => ['dieasel',  'arnold','stalone'],
'Indiana Jones et la Dernière Croisade' => ['casimiro',  'anacleto', 'tibursion']
];

foreach($movies as $title => $actors){
  echo "Dans le filme $title, les principaux acteurs sont:<br>";

  for ($i = 0; $i < count($actors); $i = $i + 1){
    echo "- $actors[$i] <br>";
  }
}
?>
