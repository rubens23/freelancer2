<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register for Companies</title>
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
    <section id="main" class="wrapper">
      <div class="container">
        <header class="major">
          <h2>Register for Companies</h2>
        <form action="compReg.php" method="post">
          <p>Company Name</p>
          <input type="text" name="companyName">
          <p>Email</p>
          <input type="text" name="email">
          <p>Location</p>
          <input type="text" name="location">
          <p>Description</p>
          <textarea name="description"></textarea>
          <p>Password</p>
          <input type="password" name="password">
          <p>Re-Enter Password</p>
          <input type="password" maxlength="15" name="d">
          <input type="submit">
          <button type="button" class="button big" id="back"><a href="home.html">Back</a></button>
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
  </footer>

</body>
</html>
