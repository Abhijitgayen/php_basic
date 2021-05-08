<?php
  $str="this is abhijit";
    echo $str."<br>";
    $len=strlen($str);
    echo "length of this string is : ".$len .  ". thank you<br>";
    echo "no of word is : ". str_word_count($str)." .thank you <br>";// here we use string concatation of two string by using '.'
    echo "reverse of this string is :".strrev($str)." <br>";
    echo "position of any word is : ".strpos($str,"is")."<br>";
    echo "Repalce in the string : (this to that ) ".str_replace('this','that',$str)."<br>";
    // string operation
    /* 
    "."--> concatenation of two srting
    ".="--> $str1.=$str2;(appends the str2 in str1)
    */
    $str1="hello this is Abhijit Gayen";
    $str2="<br>i strat to  do coding php programming";
    echo "<br>concatenation of the str1 and str2 is : <br>";
    echo $str1.$str2;
    //use '.=' oparetor
    $str1 .= $str2;
    echo'<br>After using ".=" operator  :  <br>';
    echo $str1;
?>