<?php
//mianly here we use the function date()
/*
d - Represent day of the month; two digits with leading zeros (01 or 31)
D - Represent day of the week in text as an abbreviation (Mon to Sun)
m - Represent month in numbers with leading zeros (01 or 12)
M - Represent month in text, abbreviated (Jan to Dec)
y - Represent year in two digits (08 or 14)
Y - Represent year in four digits (2008 or 2014)
 */
/*
h - Represent hour in 12-hour format with leading zeros (01 to 12)
H - Represent hour in in 24-hour format with leading zeros (00 to 23)
i - Represent minutes with leading zeros (00 to 59)
s - Represent seconds with leading zeros (00 to 59)
a - Represent lowercase ante meridiem and post meridiem (am or pm)
A - Represent uppercase Ante meridiem and Post meridiem (AM or PM)
 */
$today=date("d/m/y");
echo $today;
echo "<br>";
$day=date("D");
echo $day;
$mon=date("M");
echo "<br>".$mon;
$year=date("Y");
echo "<br>".$year;
$today2=date("d-M-Y");
echo "<br>".$today2;
echo "<br>".date(" h:i:s");
//now we see the function about time();
echo "<br>".time();//otput be a number
//useing time stamp in date function we able to conver the number to the perticular date
$timestamp=45787575424;
echo "<br>".date("M d, Y h:i:s:A",$timestamp);
//mktime() function
//formart of this function is mktime(hour, minute, second, month, day, year)
echo "<br>".mktime(12,4,53,4,5,21);
$settime=mktime(0,0,0,0,0,0);
echo "<br>".date("d/m/Y --- h:i:s A",$settime);
?>