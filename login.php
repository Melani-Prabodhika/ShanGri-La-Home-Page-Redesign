<?php
session_start();
require "controller.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<!-- Fonts -->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="css/et-line-font/et-line-font.css">
   
<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

<!-- Style CSS -->
<link rel="stylesheet" href="css/style.css">

</head>

<body>

<!-- Login  -->
<div class="login_page">
   <div class="container">
       <div class="logo text-center">
         <img src="img/sla.png" alt="">
       </div>
       <div class="log_in_box">
         <!-- Form Section -->
         <div class="forms">
           <div class="login_title text-center">
             <h2>LOGIN</h2>
           </div>
           <form action="login.php" method="POST" class="sign-in">
              <?php
                if(count($error) > 0){
              ?>
                <div class="alert alert-danger text-center">
              <?php
                foreach($error as $showerror){
                  echo $showerror;
                }
              ?>
                </div>
              <?php
              }
              ?>
             <div class="user-input">
                <input name="username" type="username" class="form-control" id="username" placeholder="Enter Username" required>
             </div><br>
             <div class="user-input">
                <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password" required>
             </div>
             <div class="text-center">
                <label for="" class="forgot">
                    <span><a href="#">forgot username or password?</a></span>
                </label>
             </div>
             <button type="submit" href="#" name="login" class="btn">LOGIN</button>
           </form>
         </div>
         <!-- End Form Section -->
       </div>
   </div>
</div>
<!-- End Login  --> 

<!-- Bootstrap JS  --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>