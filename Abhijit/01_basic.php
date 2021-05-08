<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="contener">this is my first php tutorial it ok</div>
    <?php
    echo "hello php i am abhijit Gayen";
    // secrate algarithm
    /*this is a multiline comment */
    echo "<br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint adipisci debitis aspernatur eum excepturi qui velit fugiat? Tempore a id, nulla, consequatur voluptatum facilis iste enim nobis, odit possimus ve ";
    // veriables
    $var1=12;
    $var2=13;
    echo "value of var1 is:";
    echo $var1;
    echo "<br>sum of those two veriable is :";
    echo $var1+$var2;
    //operator in php
    // Arthmaitic operator
    echo"<br>";
    echo "Value of var1+var2 : ";
    echo $var1+$var2;
    echo "<br>Value of var1- var2 : ";
    echo $var1-$var2;
    echo "<br>Value of var1/ var2 : ";
    echo $var1/$var2;
    echo "<br>Value of var1* var2 : ";
    echo $var1*$var2;
    // Assigment operator
    $newvar=$var1;
    $newvar+=2;
    echo "<br>value of newVar+1 is";
    echo $newvar;
    // Comparison Operator
    echo "<h1>Comparison operator</h1>";/*using html tag in echo we also able to write anythin like  html */
    echo "the value of 1==12 is : ";
    echo var_dump(1==12);
    echo "<br>the value of 1<=12 is : ";
    echo var_dump(1<=12);
    echo "<br>the value of 1>=12 is : ";
    echo var_dump(1>=12);
    echo "<br>the value of 1!=12 is : ";
    echo var_dump(1!=12);
    // increment/decrement operator
    $var=12;
    --$var;
    $var++;
    $var--;
    ++$var;// same cocept like c
    // logical operator(and(&&),or(||),xor)
    // $myvar=(TRUE and FALSE);
    // $myvar=(TRUE or FALSE);
    // $myvar=(TRUE or true);
    $myvar=(TRUE || true);
    echo "<br> myvar in logical op :";
    echo var_dump($myvar);
 /*--------
 data type
 --------*/
//  1.string 
//  2.integer 
//  3.float 
//  4.boolan 
//  5.array 
//  6.object
echo"<br>";
$str="this is Abhijit Gayen is a string";
echo $str;
echo "<br>under var_dump() str1 is :<br>";
echo var_dump($str);
$varint=12;
echo "<br>";
echo var_dump($varint);
$varfloat=123.3;
echo "<br>";
echo var_dump($varfloat);
$varbool=TRUE;
echo "<br>";
echo var_dump($varbool);
echo "<br>";
/*define constant (any data they may be string )in php */
define("pi",3.12);
echo "Value of pi that is define as a constant in php  : ";
echo pi;




    ?>
</body>
</html>