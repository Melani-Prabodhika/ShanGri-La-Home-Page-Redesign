<?php
$error = array(); 
$uname = "Virtualpensar";
$psword = "adminVP999*";

//if user click login button
if(isset($_POST['login'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

   $_SESSION['LOGIN']=false;

   if($username == $uname && $password == $psword){
      $_SESSION['user_name']=$username;
      $_SESSION['LOGIN']=true;
?>
   <script>
      window.location.href='index.php';
   </script>
<?php
   }else{
      $error[''] = "Incorrect username or password!";
   }
}
?>