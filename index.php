<!DOCTYPE html>
<html>
<head>
  <title>Практична робота №1</title>
</head>
<body>
<?php
// 1.
$a = 10;
$b = 2;
echo $a." + ".$b." = ", $a + $b, "</br>";
echo $a." - ".$b." = ", $a - $b, "</br>";
echo $a." * ".$b." = ", $a * $b, "</br>";
echo $a." / ".$b." = ", $a / $b, "</p>";

// 2.
$c = 15;
$d = 2;
$result = $c + $d;
echo '$result = '.$result."</p>";

// 3.
$arr = array('html', 'css', 'php');
echo $arr[0].", ".$arr[1].", ".$arr[2]."</p>";

// 4.
$arr2 = array('html', 'css', 'php', 'js', 'jq');
foreach ($arr2 as $value) {
  echo $value."</br>";
}
?>
</body>
</html>
