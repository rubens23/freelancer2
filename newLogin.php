<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/skel.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/style-xlarge.css" />
</head>
<body>
  <header id="header">
        <h1><a href="home.html">Spinit</a></h1>
        <nav id="nav">
            <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="registerCompany.php">Register for Companies</a></li>
            <li><a href="register.php">Register for Freelancers</a></li>
            <li><a href="job.php">Jobs</a></li>
            <li><a href="account.php" class="button special">Accounts</a></li>
            </ul>
        </nav>
    </header>

  <section class="wrapper">
    <div class="container">
      <header class="major">
        <h2>Login</h2>
  <form>
  <?php  
  if(!isset($_SESSION['uid'])){
  echo"<form action='login.php' method='post'>
        Email:<input type='text' name ='email'>
        Password:<input type='password' name ='password'>   
        <input type='submit' id='btn'></button>
    </form>";}
 else{
      echo "<p>You are logged in as ".$_SESSION['email']."<a href='logout.php'>Log Out</a>";
         if ($_SESSION['type'] == 0){
      echo"<a href='accountCompany.php'><button type='button'>Account</button></a>";
    }else{
      echo"<a href='account.php'><button type='button'>Account</button></a>";
    }
    }




  ?>
  </form>
  </div>
</section>
  
  <footer id="footer">
    <ul class="icons">
      <li>
        <a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
      </li>
      <li>
        <a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
      </li>
      <li>
        <a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
      </li>
      <li>
        <a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
      </li>
      </ul>
      <p align="middle">Spinit Connect | Copyright 2015</p>
    </div>
      </div>
  </footer>
</body>
</html>