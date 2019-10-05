<?php

  require_once ("../partials/funciones.php");
  require_once ("../partials/db.php");


  $name = "";
  $user = "";
  $email = "";
  $pass = "";
  $repass = "";
  $lastname = "";
  $avatarFile = isset($_FILES['avatarFile']) ? $_FILES['avatarFile'] : "";
  $sexRadioButton = "";
  $terms = "";



if (isLogged()) {
  header("location: index.php");exit;
}



  if ($_POST) {
    $errors = validateRegistration($_POST);

     if (count($errors) == 0) {
       $user = createUser($_POST);

       $user["avatarFile"] = $newName;

       saveUser($user);



       login($user["email"]);


       header("location:login.php");exit;
     }


  $name = $_POST["name"];
  $user = $_POST["username"];
  $email = $_POST["email"];
  $lastname = $_POST ["last-name"];




}



?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>REGISTRATION |</title>
  </head>



  <div class="container">

  <body style="background-color:rgb(26,26,26);">
    <?php

      //include ("../partials/sidebar.php")

     ?>

<section>


  <div class="photoContainer logo">
    <img style="border-radius: 125px;" src="../resources/logo1.jpg" alt="logo">

  </div>

<div class="title">
  <h2>Registration</h2>
</div>

<form id="loginform" action="register.php" method="POST" enctype="multipart/form-data">

  <label class="label" for="">
<input type="text" class="input" name="name" placeholder="Name" value="<?=$name?>">
</label>
<?php if (isset($errors['name'])) : ?>
  <p class="errors"><?php echo $errors['name'] ?></p>
<?php endif; ?>

<label class="label" for="">
<input type="text" class="input" name="last-name" placeholder="Last Name" value="<?=$lastname?>">

</label>
<?php if (isset($errors['last-name'])) : ?>
<p class="errors"><?php echo $errors['last-name'] ?></p>
<?php endif; ?>




<label class="label" for="">
<input type="text" class="input" name="username" placeholder="User" value="<?=$user?>">
</label>
<?php if (isset($errors['username'])) : ?>
  <p class="errors"><?php echo $errors['username'] ?></p>
<?php endif; ?>



<label class="label" for="">
<input type="text" class="input" name="email" placeholder="E-mail" value="<?=$email?>">
</label>
<?php if (isset($errors['email'])) : ?>
  <p class="errors"><?php echo $errors['email'] ?></p>
<?php endif; ?>



<label class="label" for="">
<input type="password" class="input" name="password" placeholder="Password">
</label>
<?php if (isset($errors['password'])) : ?>
  <p class="errors"><?php echo $errors['password'] ?></p>
<?php endif; ?>



<label class="label" for="">
<input type="password" class="input" name="confirm_password" placeholder="Verify password">
</label>
<?php if (isset($errors['confirm_password'])) : ?>
  <p class="errors"><?php echo $errors['confirm_password'] ?></p>
<?php endif; ?>


<label class="label" for="">
<input type="file" class="input" name="avatarFile" value="<?=$avatarFile?>" required accept="image/png, image/jpeg, image/jpg">
</label>
<?php if (isset($errors['avatarFile'])) : ?>
  <p class="errors"><?php echo $errors['avatarFile'] ?></p>
<?php endif; ?>



<div class="genreBox">

<label class="label" for="">Male
<input type="radio" class="sex-radioButton" name="genreSex" value="male">
<label for="label">Female</label>
<input type="radio" class="sex-radioButton" name="genreSex" value="female">
</label>
<?php if (isset($errors['genreSex'])) : ?>
  <p class="errors"><?php echo $errors['genreSex'] ?></p>
<?php endif; ?>
</div>

<div  class="termsBox">
<label style="color:white;" class="label" for=""> I agree to <u>terms</u> and <u>conditions</u>
<input type="checkbox" class="termItem" name="terms">
</label>
</div>
<?php if (isset($errors['terms'])) : ?>
  <p class="errors"><?php echo $errors['terms'] ?></p>
<?php endif; ?>



  <button type="submit" class="buttonPages">Registrer!</button>
</form>
</section>
<?php

  //include_once ("../partials/footer.php")

 ?>
  </body>
  </div>
</html>
