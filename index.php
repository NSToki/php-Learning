<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Tutorial</title>

    <style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

        .container{
            max-width: 100%;
            background-color: rosybrown;
            margin: auto;
        }
    </style>
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
echo var_dump($myVar);



echo"<h4>Data Types</h4>";
echo"1.string";
echo "<br>";
echo "2.Integer";
echo "<br>";
echo"3.Float";
echo "<br>";
echo"4.Boolean";
echo "<br>";
echo"5.Array";
echo "<br>";
echo"6.Object";
echo "<br>";


//Conditional Statement
echo"<h4>Conditional Statement</h4>";
$age = 18;
if($age>=18){
    echo "You can Vote";
}
else{
    echo "You Cant Vote";
}


//Arrays
echo"<h4>Arrays</h4>";

$learningLang = array("html",'css','js','php');
echo $learningLang[0];

echo'<br>';

//Loops
echo"<h4>Loops</h4>";

//while
$a = 0;

while ($a < count($learningLang)) {
    echo "The value of a is ", $a , " and language is " , $learningLang[$a] , "<br>";
    $a++;
}

//do-while

do {
    if ($a < count($learningLang)) {
        echo "The value of a is " . $a . " and language is " . $learningLang[$a] . "<br><br>";
    }
    $a++;

} while ($a < count($learningLang));
 
?>

    
</body>
</html>