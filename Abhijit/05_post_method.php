<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post method</title>
</head>
<body>
<?php
//here i change $_POST to $_REQUEST
     if(isset($_REQUEST["password"])){
         echo "<p> your password is , ".$_REQUEST["password"]."</p>";
     }
     ?>
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" >
     <label for="password"> password: </label>
     <input type="password" name="password" placeholder="Enter password">
     <input type="submit" value="submit">     
     </form>
</body>
</html>