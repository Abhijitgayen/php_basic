 <?php
 echo "hello it is ok see it";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Eample ofr Get and Post method</title>
 </head>
 <body>
     <?php
     if(isset($_GET["name"])){
         echo "<p> Hi , ".$_GET["name"]."</p>";
     }
     ?>
     <form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>" >
     <label for="inputname"> Name: </label>
     <input type="text" name="name" placeholder="Enter your name:">
     <input type="submit" value="submit">     
     </form>
 </body>
 </html>