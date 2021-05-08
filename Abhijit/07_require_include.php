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
include "../index1.html";
// include "index.html";
echo "<br>"
?>

<?php
//same as require()
/* The only difference is — the include() statement will only generate a PHP warning but allow script execution to continue if the file to be included can't be found, whereas the require() statement will generate a fatal error and stops the script execution.*/
include "02_moreBasic.php";
// require ("index.html");
require ("../footer.php");
//if we use require more than one then there will some error to ignor this type of error we use require_once()
?> 
</body>
</html>
