<?php
require_once 'header.php';
?> 
<link rel="stylesheet" type="text/css" href="style.css">
<div class="eldora">

<p><b>Already have an account?</b><a  href='login.php'><b> Login here!</b></a></p>
<html>
    <head>
        <title>REGISTER</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background-image: url(https://www.theindiaforum.in/sites/default/files/field/image/2019/10/01/Ramkumar%20Radhakrishnan%2C%20Wikimedia-1569929663.jpeg);
                background-size: cover;
            }
            .ss{
                width:400px;
                height: 500px;
                background-color: rgba(0,0,0,0.5);
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
                width: 300px;
                height: 45px;
                border:0;
                border-radius: 10px;
                -web-border-radius:10px;
                -o-border-radius:10px;
                -moz-border-radius: 10px
            }
            .ss input[type="text"]{
                width: 300px;
                height: 45px;
                border:0;
                border-radius: 5px;
                -web-border-radius:5px;
                -o-border-radius:5px;
                -moz-border-radius: 5px
            }
            .ss input[type="text"]{
                width: 300px;
                height: 45px;
                border:0;
                border-radius: 5px;
                -web-border-radius:5px;
                -o-border-radius:5px;
                -moz-border-radius: 5px
            }
            .ss input[type="text"]{
                width: 350px;
                height: 45px;
                border:0;
                border-radius: 5px;
                -web-border-radius:5px;
                -o-border-radius:5px;
                -moz-border-radius: 5px
            }
            .ss input[type="submit"]
            {
                width: 100px;
                height: 45px;
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
          <form action="register_action.php" method="post">
              <h2><b>REGISTER</b></h2>
              <input type="text" placeholder="Enter your Name" name="name"><br><br>
              <input type="text" placeholder="Enter your Email-id" name="mailid"><br><br>
              
              <input type="text" placeholder="Enter your Phone number" name="phone"><br><br>
              <input type="text" placeholder="Enter the Username" name="username" required><br><br>
               <input type="text" placeholder="Enter the Password" name="password" required><br><br>
                <input type="submit" name="submit" value="Register">
          
          </form>
      </div>
 
    </body>
</html>                                     
