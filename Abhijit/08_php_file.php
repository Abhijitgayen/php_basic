<?php
/*=====================how to read file============================ */
//use of  function fopen(filename,mode); and close(filename);
/*
all types of modes
r -> open file for reading only
r+ ->open file for reading and writting
w ->open the file if exist and clear all data that have befor on this file and read on this file . 
if there are bno search file then it also creat a file and satrt to write on this file.
w+ ->Open the file for reading and writing and clears the contents of file. If the file does not exist, PHP will attempt to create it.
a ->Append. Opens the file for writing only. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.
a+	-> Read/Append. Opens the file for reading and writing. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.
x ->	Open the file for writing only. Return FALSE and generates an error if the file already exists. If the file does not exist, PHP will attempt to create it.
x+	-> Open the file for reading and writing; otherwise it has the same behavior as 'x'.
 */

$file="data.txt";
if(file_exists($file)){
    //open this file if there this file exist
    $handel=fopen($file,"r") or die("Error: Can not opeb this files.");
    $const=fread($handel,"10");//using fread() finction we able to read all text in this file
    //fread(file pointer, length in bytes);
$constall=fread($handel,filesize($file));
echo $const;
echo "<br>".$constall;
fclose($handel); //her we close the file pointer not the file
//readfile() reads and outputs of the entire file not necessary to open and clso this file pointer
echo ">>>using readfile() function :<br>";
readfile($file);
}else{
    echo "error to open this file";
}
// use of file_get_contents() function
$file1="data.txt";
//cheak this file exist or not
if(file_exists($file1)){
    //reading full file in a string
    $content=file_get_contents($file1) or die("ERROR: can not open this file");
    echo "<br>>>>>>using file_get_contents() function . it read entire file as a string <br>".$content;
    //use of file() function it read the entire file in array
    $content1=file($file1) or die("ERROR : cannot open the file.");
    echo "<br> >>>>>using  function file() print full file as array<br>";
    foreach ($content1 as $val){
        echo $val;
    }
}else{
    echo "error to open this file";
}
/*============how to write on a file============= */
$file2="dataw.txt";
//for write we need  notto cheack this file exist
// the data that i want to read on this file
$data="<br>Data is working . we able to rite on this file<br>it is working properly. <br>this is Abhijit Gayen, a student of IIT G ";
//open file to read file
$handle=fopen($file2,"w+") or die("ERROR: to open this file");
//write data on the file
fwrite($handle,$data) or die("Error: acn not write on the file...");
//close the file pointer
fclose($handle);
echo "data written on the file succesfully";
//use of the function file_put_contents();
/*using this function we donot need to open this file or clse this file */
//if you use file_put_contents(file name, data); it will clear all data then add this data that you want to write.
// if you write file_put_contents(filename,data,FILE_APPEND); then this data will be added in the end of this file.

$add="he is very good boy.he aim to do good for socity";
file_put_contents($file2,$add,FILE_APPEND) or die("i am not able to write on this file..");
echo "<br>data is written successfully..";

/*======rename the file name =======*/
//using the function rename();
$file3="dataw.txt";
if(file_exists($file3)){
    if(rename($file3,"newdataw.txt")){
        echo "<br>file rename is succesfully<br>";
    }
    else {
        echo "i am not able to rename this file..";
    }
}else{
        echo "error .file is not exist ....";
    }
/*=========remove from the list====== */
//using function unlink();
$file3="newdataw.txt";
if(file_exists($file3)){
    if(unlink($file3)){
        echo "<br>file is  removed succesfully<br>";
    }
    else {
        echo "i am not able to remove  this file..";
    }
}else{
        echo "error .file is not exist ....";
    }


/*===some special function to handel all files===*/
/*fgetc()	Reads a single character at a time.
fgets()	Reads a single line at a time.
fgetcsv()	Reads a line of comma-separated values. use for csv file
filetype()	Returns the type of the file.
feof()	Checks whether the end of the file has been reached.
is_file()	Checks whether the file is a regular file.
is_dir()	Checks whether the file is a directory.
is_executable()	Checks whether the file is executable.
realpath()	Returns canonicalized absolute pathname.
rmdir()	Removes an empty directory. */
$file1="time.CSV";
if(file_exists($file1)){
    $handel=fopen($file1,"r");
    while(!feof($handel)){
    $line=fgetcsv($handel);
    echo"<br>";
    foreach($line as $lines){
        echo $lines."  ";
    }
    }
    

}else{
    echo "<br>ERROR: this file is not exist";
}

?>