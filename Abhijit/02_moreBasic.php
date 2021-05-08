<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;

}
.containe{
    max-width:90%;
    background-color:red;
    text-align: center;
    font-family:cursive;
    /* font-size:20px; */
    padding:50px;
    margin:auto;
}
</style>
<body>
<div class="containe">
<h1>Lets Learn About Php</h1>
<?php
echo "hello THis is Abhijit Gayen";
$age=18;
echo "<br>";
/*If  else statement in php */
if($age>18){
    echo "You can go to the party...";
}
else if($age==18) echo"you are 18 year old";
else {
    echo "You can not go to the party";
}
/*  loop in php */
// create array
echo "<br>";
$language=array("python","php","css","html");
echo $language[0];
echo "<br>no of iteam in this array is : ";
echo count($language);
echo "loop for php";
//while loop in php
$a=0;
while($a<=10){
    echo "<br>the value of a from while loop : ";
    echo "$a";
    $a++;
}
$ip=0;
while($ip<count($language)){
    echo "<br>You know the language : ";
    echo $language[$ip];
    $ip++;
}
//do whlie loop same as c 
//for loop
for ($i=0; $i <10 ; $i++) { 
    echo "<br>the value of i from for loop: ";
    echo "$i";
}
//for each loop
foreach($language as $value ){
    echo"<br>language you know in for each loop : ";
    echo $value;
}
//function in php
function print5(){
    echo "<br> print 5 in funcrtion : Five";
}
print5();
function number($num){
    echo "<br> Your enter number is(using function) : ";
    echo $num;
}
number(45);
//php switch case same as c programming
$dateName=date("D");
echo "<br>";
echo $dateName;
echo "<br>";
switch($dateName){
    case "mon":
        echo "today is monday. you have a test today.";
        break;
    case "tue":
        echo "Today is tuesday.You have no test but you have a assigment to solve for it.";
        break;
    case "wed":
        echo "today is wednesday. you have a lap in DsA.";
        break;
    case "thu":
        echo"Today is Thursday. You have aanother test about Dsa";
        break;
    case "Fri":
        echo "today is friday .You have a special class about compelx analysis";
        break;
    default:
        echo "today i s holi day . Enjoy this beautiful day";
        break;
}
//php array
/*types of array
1. Indexed Array 
2. Associative Array
3.Multidimensional Array */
$set=array("red","black","blue","white");
echo "<br> SIze of the array :".count($set);
echo "<br>";
for($i=0;$i<count($set);$i++){
    echo "color is :".$set[$i]."<br>";
}
//associative array
$Ages=array("Ram"=>12,"Sham"=>15,"Rahul"=>78);
echo "<br> no of elements in this array is :". count($Ages);
echo "<br>";
//use foreach we able to rwead all array easily
foreach($Ages as $name=>$no){
    echo "name  : ".$name."  and age is :".$no."<br>";
}

//dynamic array in php
$details= array(
    array(
        "name"=>"Abhijit Gayen",
        "email"=>"abhijitgayen428@gmail.com"
    ),
    array(
        "name"=>"Rahul Halder",
        "email"=>"rahulhalde12@gmail.com"
    ),
    array(
        "name"=>"Rahul  Sengupta",
        "email"=>"rahulsengupta236@gamil.com"
    )
    );
     print_r($details);
     echo "<br>size of this mutidimentional array is : ".count($details);
     echo "<br>";
     for($i=0;$i<count($details);$i++){
         foreach ($details[$i] as $user => $id) {
             echo $user." : ".$id." <br>";
         }
     }
//Array sorting in php
/*sort() and rsort() -->sorting  indexed array
    asort() and arsort() -->for sorting associative array by value
    ksort() and krsort()--> for sorting assocaitive array by keys

    sort() => sorting in incerasing order
    rsort()=>sorting in decreasing order
    */
    //keep it mind that this array is a associative array
    asort($Ages);
    echo var_dump($Ages);
    echo "<br>";
    foreach($Ages as $name=>$no){
        echo "name  : ".$name."  and age is :".$no."<br>";
    }
    krsort($Ages);
    echo var_dump($Ages);
    echo "<br>";
    foreach($Ages as $name=>$no){
        echo "name  : ".$name."  and age is :".$no."<br>";
    }
    //php array operation
    /*
    "+": Union of two array
    "==":equality of two array
    "!=" : not eauality of two arary
    "===": indentoical of two array
    "!==" : not identaicl of two array
     */
    echo ">>>>>UNION OF THOSE TWO ARARY IS : <br>";
    echo var_dump($Ages+$details);
    echo "<br> cheak equality of those two array :";
    echo var_dump($details==$Ages);
    // i observer thatr if we put var_damp() in echo using string conctation it will porint var_damp() frist 
    echo "<br>value in print_r is :".print_r($details==$Ages);
//use of functiopn in php
function castomarFont($font,$size,$str2){
    echo" <p style=\" font-family:$font;font-size:{$size}em\" > $str2 </p>";
}
$hi="Hi this is Abhijit Gayen";
$helo="hello world !";
//calling this function
castomarFont("Arail",2,$hi);
castomarFont("times",3,$helo);
    ?>
    </div>
    
</body>
</html>