<?php
require_once 'header.php';
?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="eldora">

<p><b>No account?</b><a  href='register.php'><b> Register here!</b></a></p>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>LOGIN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background-image: url(https://www.theindiaforum.in/sites/default/files/field/image/2019/10/01/Ramkumar%20Radhakrishnan%2C%20Wikimedia-1569929663.jpeg);
                background-size: cover;
            }
            .ss{
                width:300px;
                height: 250px;
                background-color: rgba(0,0,0,0.5);
                margin-top: 10px;
                padding-top: 20px;
                padding-left: 40px;
                border-radius: 15px;
                -webkit-border-radius: 15px;
                -o-border-radius: 15px;
                -moz-border-radius: 15px;
                color: white;
                font-weight: bolder;
                
            }
            .ss input[type="text"]{
                width: 200px;
                height: 35px;
                border:0;
                border-radius: 5px;
                -web-border-radius:5px;
                -o-border-radius:5px;
                -moz-border-radius: 5px
            }
            .ss input[type="password"]{
                width: 200px;
                height: 35px;
                border:0;
                border-radius: 5px;
                -web-border-radius:5px;
                -o-border-radius:5px;
                -moz-border-radius: 5px
            }
            .ss input[type="submit"]
            {
                width: 100px;
                height: 35px;
                border:0;
                border-radius: 5px;
                -web-border-radius:5px;
                -o-border-radius:5px;
                -moz-border-radius: 5px;
                background: skyblue;
                font-weight: bolder;
            }
        </style>
    
    </head>
    <body>
        
      <div class="ss">
          <form action="login_action.php" method="post" >
              <h2><b>LOGIN</b></h2>
              <input type="text" placeholder="Enter your Username" name="username"><br><br>
              <a href="homepage.html"></a>
              <input type="password" placeholder="Enter your Password" name="password"><br><br>
              <a href="homepage.html"></a>
                <input type="submit" name="submit" value="Login">
                
          
          </form>
      </div>
 
    </body>
</html>                                     

