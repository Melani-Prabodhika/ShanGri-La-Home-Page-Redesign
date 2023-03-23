<?php
session_start();

if(isset($_SESSION['LOGIN'])!=true){
?>

<script>
  window.location.href='login.php';
</script>

<?php
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Practical</title>

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

<!-- Responsive -->
<link rel="stylesheet" type="text/css"  href="css/responsive.css">

</head>

<body>

<!-- Nav Bar -->
<header>
   <div class="header">
     <div class="header-top-area" id="header-top">
       <div class="header-top">
        <div class="container"> 
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <ul>
                <li class="fa fa-user"><a href="#"><?php echo $_SESSION['user_name'] ?></a></li>
                <li><a href="#">Find Reservations</a></li>
                <li><a href="logout.php" type="submit" name="logout">Log Out</a></li>
              </ul>
            </div>
          </div>
       </div>
       <div class="nav-bar">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="logo-area"> <a href="#"><img class="img-responsive" src="img/sla.png" alt="logo"></a></div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-9 col-xs-12">
              <div class="main-menu">
                <nav>
                  <ul>
                    <li class="active"><a href="#"></a>
                      <li><a href="#">Home</a></li>
                    </li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Rooms & Suits</a></li>
                    <li><a href="#">Experience</a></li>
                    <li><a href="#">Offers</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">More</a>
                      <ul class="menu-dropdown">
                          <li><a href="#">Gallery</a></li>
                          <li><a href="#">Blog</a></li>
                      </ul>
                    </li> 
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
              <div class="header-top-right">
                <ul>
                  <li>
                    <div class="header-top-search search-box">
                      <form>
                        <a href="#"><i class="fa fa-search" style="width:10px; height:16px;">
                        <input class="search-text" type="text" placeholder="Find a hotel"></i> </a>
                      </form>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- <div class="side-menu-area" id="side-menu-area">
                <div id="mySidenav" class="sidenav"><a href="#" class="closebtn">×</a>
                  <span class="side-menu-open side-menu-trigger"><i class="fa fa-bars" aria-hidden="true"></i></span>
                </div>
              </div> -->
            </div>
          </div>
        </div>
       </div>
     </div>
   </div>

  <!-- Mobile-menu Start -->
  <div class="mobile-menu-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mobile-menu">
            <nav id="dropdown">
              <ul>
                <li class="active"><a href="#"></a>
                  <li><a href="#">Home</a></li>
                </li>
                <li><a href="#">About</a></li>
                <li><a href="#">Rooms & Suits</a></li>
                <li><a href="#">Experience</a></li>
                <li><a href="#">Offers</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">More</a>
                  <ul class="menu-dropdown">
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Blog</a></li>
                  </ul>
                </li> 
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Mobile-menu --> 


</header>

<script>
  let nav = document.querySelector('nav');

  window.addEventListener('scroll',function(){
    if(window.pageXOffset > 100){
      nav.classList.add('','');
    }
  })
</script>

<!-- End Nav Bar -->