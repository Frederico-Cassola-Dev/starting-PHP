
  <?php
$message1 = '0@sn9sirppa@#?ia\'jgtvryko1';
$message2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$message3 = 'aopi?sgnirts@#?sedhtg+p9l!';


$subArray = substr($message1, 5 , strlen($message1)/2);
$cleanSubArray = str_replace( '@#?', ' ', $subArray);
$invertedCleanSubArray = strrev($cleanSubArray);
echo $invertedCleanSubArray . PHP_EOL;

$subArray = substr($message2, 5 , strlen($message2)/2);
$cleanSubArray = str_replace( '@#?', ' ', $subArray);
$invertedCleanSubArray = strrev($cleanSubArray);
echo $invertedCleanSubArray . PHP_EOL;

$subArray = substr($message3, 5 , strlen($message3)/2);
$cleanSubArray = str_replace( '@#?', ' ', $subArray);
$invertedCleanSubArray = strrev($cleanSubArray);
echo $invertedCleanSubArray;




$message1 = "0@sn9sirppa@#?ia'jgtvryko1";
$keyFigure = mb_strlen($message1) / 2;
$message1 = substr($message1, 5, $keyFigure);
$message1 = str_replace('@#?', ' ', $message1);
echo strrev($message1) . PHP_EOL;

$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$keyFigure = mb_strlen($message2) / 2;
$message2 = substr($message2, 5, $keyFigure);
$message2 = str_replace('@#?', ' ', $message2);
echo strrev($message2) . PHP_EOL;

$message3 = "aopi?sgnirts@#?sedhtg+p9l!";
$keyFigure = mb_strlen($message3) / 2;
$message3 = substr($message3, 5, $keyFigure);
$message3 = str_replace('@#?', ' ', $message3);
echo strrev($message3) . PHP_EOL;

?>
