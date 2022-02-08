<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $var = "Hello World!";
  $x = 15;
  $y = 20.5;

  echo $var;
  echo "<hr/>";
  echo $x;
  echo "<hr/>";
  echo $y;
  echo "<hr/>";
  echo $x + $y;

  function test1()
  {
    $x = 17;
    echo "<p>x= $x</p>";
  }
  test1();

  $a = 1;
  $b = 2;

  function scope()
  {
    global $a, $b;
    $c = $a + $b;
    echo $c;
  }
  scope();

  echo $c;
  echo $a + $b;

  echo "<br/>";
  function increment()
  {
    static $i = 10;
    echo $i;
    $i++;
  }

  increment();
  echo "<br/>";
  increment();
  echo "<hr/>";
  increment();
  echo "<hr/>";


  //Video 10
  ?>
</body>

</html>