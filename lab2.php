<!DOCTYPE html>
<html>
<head>
  <title>2</title>
</head>
<body>
<?php
// 1.
$age = 19;

if($age >= 18 && $age <= 22)
{
  echo "Привіт студент";
}
else
{
  echo "Привіт магістр";
}

// 2.
$i = 0;

while($i <= 50)
{

  if($i % 2 != 0)
  {
      echo $i."</br>";
  }

  $i++;
}

// 3.
function table($row1, $row2, $row3, $row4)
{
  echo "<table><tr><td>".$row1."</td></tr><tr><td>".$row2."</td></tr><tr><td>".$row3."</td></tr><tr><td>".$row4."</td></tr></table>";
}
?>
</body>
</html>
