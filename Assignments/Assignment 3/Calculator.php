<?php
class Calculator
{

public function calc(){

if(func_num_args()<3) {

return "You must enter a string and two numbers</br>";
}

$operator = func_get_arg(0);

$num1 = func_get_arg(1);
$num2 = func_get_arg(2);

if($operator == "+"){
  return "The sum of the numbers is ".($num1 + $num2)."</br>";
}
if($operator == "-"){
  return "The difference of the numbers is ".($num1 - $num2)."</br>";
}
if($operator == "*"){
  return "The product of the numbers is ".($num1 * $num2)."</br>";
}
if($operator == "/"){
if($num2 != 0)
  return "The product of the numbers is ".($num1 * $num2)."</br>";
  else return "Cannot divide by zero<br>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset = "UTF-8">
   <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
   <meta name = "viewport" content = "width=device-width, initial-scale=1.0">

<title>Calculator</title>

</head>
<body>
<!doctype html>
<html lang="en">
<body class="container">
<body>   
<main>  

  <?php

require_once "Calculator.php";
$Calculator = new Calculator();
echo $Calculator->calc("/", 10, 0); //will output Cannot divide by zero
echo $Calculator->calc("*", 10, 2); //will output The product of the numbers is 20
echo $Calculator->calc("/", 10, 2); //will output The division of the numbers is 5
echo $Calculator->calc("-", 10, 2); //will output The difference of the numbers is 8
echo $Calculator->calc("+", 10, 2); //will output The sum of the numbers is 12
echo $Calculator->calc("*", 10); //will output You must enter a string and two numbers
echo $Calculator->calc(10); //will output You must enter a string and two numbers


  ?>
</main>
</body>
</html>
</body>
</html>