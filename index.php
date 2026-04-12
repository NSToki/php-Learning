<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Tutorial</title>
</head>
<body>
    <div class="container">
        <h1>This is my PHP Learning</h1>
        <h1>This is my PHP Learning</h1>
        <h1>This is my PHP Learning</h1>
    </div>

<?php 
// This is single line comment by php way

/**
 * this
 * is multiple
 * line comment
 */


$variable1 = 50;
$variable2 = 100;

echo"variable1 is ", $variable1;
echo "<br>";
echo"variable2 is", $variable2;
echo "<br>";


//Operatiors in php

//1.Arethmetic Operator
echo"Arethmetic Operator:";
echo"<br>";
echo "Addition ", $variable1 + $variable2;
echo"<br>";
echo "Substraction ", $variable1 - $variable2;
echo "<br>";
echo "Multiplication ", $variable1 * $variable2;
echo "<br>";
echo "Dividation ", $variable1 / $variable2;
echo "<br>";


//2.Assignment Operator
echo"Assignment Operator";
echo "<br>";
$newVar = $variable1;
echo $newVar+=1;
echo "<br>";
echo $newVar-=1;
echo "<br>";
echo $newVar*-1;
echo "<br>";
echo $newVar/=2;
echo "<br>";
//3.Comparison Operator

echo "<h4>Comparison Operator</h4>";
echo "The value of 1==4 is" ;
echo var_dump(1==4);
echo "<br>";


echo "The value of 1!=4 is" ;
echo var_dump(1!=4);
echo "<br>";

echo "The value of 1<=4 is" ;
echo var_dump(1<=4);
echo "<br>";

echo "The value of 1>=4 is" ;
echo var_dump(1>=4);
echo "<br>";

//4. Increment Or Decrement

echo $variable1++;
echo "<br>";
echo $variable2--;
echo "<br>";
echo ++$variable1;
echo "<br>";
echo --$variable2;


//5. Logical Operator
/*
and(&&)
or (||)
xor
*/ 

$myVar = true and true;
echo var_dump($myVar)

?>

    
</body>
</html>