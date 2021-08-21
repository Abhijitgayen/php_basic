<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>LAB_3</title>
     <style>
          * {
               padding: 0;
               margin: 0;
          }
          body {
               min-width: 1200px;
               background-color: rgba(250, 235, 215, 0.048);
          }
          h1 {
               text-align: center;
               background-color: rgba(230, 86, 19, 0.904);
               padding: 15px;
               color: white;
          }
          .About_us {
               text-align: justify;
               padding:15% 5% 0% 5%;
               color:white;
               line-height: 25px;
               justify-items: center;
               /* display: none; */
          }
          .reg_data{
               display: flex;
               /* background-color: red; */
          }
          .login__img img{
               width: 300px;
          }
          .Register {
               /* display: flex; */
               color: black;
               margin: 10% 12%;
               padding: 2% 3% ;
               background-color: aliceblue;
               border-radius: 15px;
               box-shadow: 2px 4px 25px white;
               border: 3px solid rgb(137, 136, 238);
               /* display: none; */
          } 
          .Register div{
               text-align: right;
               font-size: 21px;
               /* background-color: red; */
               padding: 10px;
          }
          div input {
               margin-left:10px ;
               box-shadow: none;
               border: none;
               border-bottom: 2px solid blue;
               height: 25px;
               outline: none;
               background-color: aliceblue;
               
          }
          input:focus{
               border: none;
               border-bottom: 2px solid red;
          }
          input[type=submit]{
               width: 83px;
               height: auto;
               background-color:blue;
               padding:8px 10px;
               color:white;
               border:none;
               border-radius:5px;
          }
          input[type=submit]:hover{
               box-shadow: 0px 2px 25px rgb(76, 41, 235);
          }
          .mian_all {
               display: flex;
               align-items: stretch;
               background-color: rgb(139, 138, 221);
          }
          .main_section{
               overflow: hidden;
               height: 89vh;
               min-width: 1000px;
          }
          
          .left_section {
               background-color:rgb(81, 63, 247) ;
              
               color:white;
               font-weight: bolder;
               padding-top:15% ;
               min-width: 200px;
               font-size: 19px;
               text-align: center;
               /* background-color: rgb(42, 42, 207); */
          }
          .left_section ul li{
               padding: 5px;
               list-style:none ;
               border: 2px solid white;
               margin: 20px;
          }
          .left_section ul li:active{
               background-color:red;
          }
     </style>
</head>

<body>
     <div>
          <h1>Welcome to IITG Student Codding Club</h1>
     </div>
     <div class="mian_all">
          <div class="left_section">
               <ul>
                    <li id='aboutUs_btn' >About Us</li>
                    <li id='register_btn' class="<?php if($error!==" "){echo "active";}else {echo "noactive";}?>" >Register</li>
               </ul>
          </div>
          <div class="main_section">
               <section class="About_us" id="AboutUs_block" >
                    <h2>
                         welcome to the student codding club. in this club. We will learn about latest languages whice
                         are used in
                         academia and industy.
                    </h2>
                    <br>
                    <h3>
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quidem magni maxime nulla
                         voluptas
                         fugiat. Incidunt optio, reprehenderit iure totam reiciendis nihil, ipsam laboriosam
                         consequuntur rem
                         deserunt voluptatum accusantium illo. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Numquam
                         harum itaque cumque expedita, id quis beatae nobis, magnam soluta a aliquid non ab. Voluptate
                         ullam
                         minima eaque exercitationem, quod autem incidunt, odio id consequuntur, doloribus libero fuga
                         ipsam
                         repudiandae magnam corporis numquam velit eius rem eos. Esse exercitationem quam sed!
                    </h3>
               </section>
               <section class="Register" id="Register_block" class="active" hidden>
                    <div class="reg_data">
                    <div class="login__img">
                         <img src="img-login.svg" alt="">
                       </div>
                       <div class="from">
                    <form action="index.php" method="post">
                         <div class="first_data">
                              First Name <input type="text" name="frist_name"  required>
                         </div>
                         <div class="last_data">
                              Last Name <input type="text" name="last_name" required>
                         </div>
                         <div class="email_data">
                              Email Id
                              <input type="email" name="email_id" required>
                         </div>
                         <div class="gender_data">
                              Gender
                              <input type="radio"  name="gender"
                              <?php if(isset($gender) && $gender=="male") echo"cheacked" ?> value="male" required>Male
                              <input type="radio"name="gender"
                              <?php if(isset($gender) && $gender=="male") echo"cheacked" ?> value="female" required >Female
                         </div>
                         <div class="submit_btn">
                              <input type="submit">
                         </div>
                         <?php
                         if(isset($_POST["email_id"])){
                         $fp1=fopen('member.txt','r');
                         if(!$fp1 ){
                              die("<h3>error .... not able to read file...</h3>");
                         }
                         else{
                         $flg=TRUE;
                         while(!feof($fp1)){
                               fscanf($fp1,"%s ,  %s , %s  , %s \n",$a,$b,$email,$c);
                               if(isset($_POST["email_id"])&&$email===$_POST["email_id"]){
                                    $error="Your email is there in our DataBase";
                                    $flg=FALSE;
                               }
                         }
                         fclose($fp1);
                      }
                      if($flg){
                         $fp=fopen('member.txt','a+');
                         if(!$fp){
                            die("<h3> error ....not able to open file....</h3>");
                         }
                         else{ if(isset($_POST["frist_name"])&&isset($_POST["last_name"])&&isset($_POST["frist_name"])&&isset($_POST["email_id"]))
                                   fwrite($fp,$_POST["gender"]." , ".$_POST["last_name"]." , ".$_POST["email_id"]."  , ".$_POST["gender"]."\n");
                              // echo "<h3>Successful</h3>";
                              $error="Successful to Register";
                         }
                         fclose($fp);
                    }
               }
                         ?> 
                    </form>
                    <div style="color:red;background-color: rgba(253, 245, 230, 0.637); width:30%; font-size:23px;position:absolute; top:14%;right:0%; border-radius: 12px;  text-align: center; height:auto;padding: 20px 0px;"><?php if(isset($error)){
                         echo $error;
                         unset($error);
                                }?></div>
                   </div>
               </div>
          </div>
               </section>
     </div>

</body>
<script>
     var blockBtnList = ['aboutUs_btn','register_btn'];
     var blockList = ['AboutUs_block','Register_block'];
     document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('aboutUs_btn').addEventListener('click', function () {
        setBlockEvent('aboutUs_btn', 'AboutUs_block');
    });
    document.getElementById('register_btn').addEventListener('click', function () {
        setBlockEvent('register_btn', 'Register_block');
    });
     });

     function setBlockEvent(btnName, blockName) {
    blockBtnList.forEach(element => {
        if (element === btnName) {
            document.getElementById(btnName).classList.add('active');
        }
        else document.getElementById(element).classList.remove('active');
    });
    blockList.forEach(element => {
        if (element === blockName) {
            document.getElementById(blockName).hidden = false;
        } else document.getElementById(element).hidden = true;
    });
}
</script>

</html>