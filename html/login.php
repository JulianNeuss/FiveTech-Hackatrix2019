<?php

require_once("../partials/funciones.php");


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="../style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>Memento</title>
   </head>
   <body style="background-color:rgb(26,26,26);">
   <div class="container">



 <section>

   <div class="photoContainer">
     <img style="border-radius: 125px;" src="../resources/logo1.jpg" alt="logo">
   </div>


 <div class="title">
   <h2>Login</h2>
 </div>


 <form id="loginform" action="login.php" method="post">

   <label class="label" for="">
 <input type="text" class="input" name="email" placeholder="E-mail">
 </label>


 <br>

 <label class="label" for="">
 <input type="password" class="input" name="password" placeholder="Password">
 </label>

 <br>

 <button type="submit" class="buttonPages" name="button">Login</button>

 </form>

 <a style="color: white; " class="link" href="registration.php">Click here for registration</a>


 </section>




   </body>

   </div>
 </html>
