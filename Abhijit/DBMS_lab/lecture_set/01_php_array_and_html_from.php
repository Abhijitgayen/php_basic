<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- <title>html from</title> -->
     <style>
          
          body{
               background-color:rgba(19, 171, 218, 0.534);
               padding-left:10%;
               padding-right:10%;
               padding-top:2%;
          }
          input {
               background-color:rgba(19, 171, 218, 0.534);
           box-sizing: border-box;
          border: none;
          border-bottom:1px solid red;
          outline: none;
          }

          input:focus {
           border: none;
           border-bottom:1px solid green;
          }
          input[type=submit]{
               margin:5px;
               width:86px;
               background-color:blue;
               padding:8px;
               color:white;
               border:none;
               border-radius:5px;
          }
          input[type=submit]:hover{
               box-shadow: 0px 2px 25px rgb(76, 41, 235);
          }
          Select{
               background-color:rgba(19, 171, 218, 0.534);
               outline:none;
               box-sizing: border-box;
               border: none;
               border-bottom:1px solid red;
          }
          option:focus,
          Select:focus{
               background-color:rgba(19, 171, 218, 0.534);
               border:none;
               border-bottom:1px solid green;
          }
     </style>
</head>
<body>
     <p>Noted that for each from there are exactly on submit bottom.keep it mind there will be one submit bottom for one page</p>
     <h2>GET Method</h2>
     <form action="" method="get">
          <h3>
               userame : <input type="text" name="my_name"  required="required" id="my_name" value="<?php  echo $_GET['my_name'] ;?>">
          </h3>
          <h3 class="password">
               password :<input type="password" name="my_password" id="" required>
          </h3>
          <h3 class="education">
               Enter Education :
          <Select  name="education">
               <option value="NULL">---Select---</option>
               <option value="Secondary">Secondary</option>
               <option value="Higher Secondary">Higher secondary</option>
               <option value="Graduate">Graduate</option>
               <option value="Post Garduate">Post Graduate</option>
          </Select>
          </h3>
           <input type="submit" value="Submit">
     </form>
     <?php
     print_r($_GET);
     echo"<br>";
     var_dump($_GET);
     ?>
     <hr>
     <h2>POST Method</h2>
     <form action="" method="post">
          <h3>
               userame : <input type="text" name="my_name"  required="required" id="my_name" value="<?php  echo $_POST['my_name'] ;?>">
          </h3>
          <h3 class="password">
               password :<input type="password" name="my_password" id="" required>
          </h3>
          <h3 class="education">
               Enter Education :
          <Select  name="education">
               <option value="NULL">---Select---</option>
               <option value="Secondary">Secondary</option>
               <option value="Higher Secondary">Higher secondary</option>
               <option value="Graduate">Graduate</option>
               <option value="Post Garduate">Post Graduate</option>
          </Select>
          </h3>
           <input type="submit" value="Submit">
     </form>
     <?php
     print_r($_POST);
     echo"<br>";
     var_dump($_POST);
     ?>
</body>
</html>