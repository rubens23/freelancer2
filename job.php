<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jobs</title>
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
    <?php 
    $host ="localhost";
for ($i=0; $i < 70; $i++) { 


        $connect = mysql_connect($host,"root","")or die("Couldn't connect to the database!");
    $select_db = mysql_select_db("spin it") or die("Couldn't find database");
    $name = mysql_query("SELECT * FROM company WHERE id = '3'");
    $query = mysql_query("SELECT * FROM jobpost WHERE id = '$i'");
    $numrows = mysql_num_rows($query);
    while ($row = mysql_fetch_assoc($name) ) {
                $dbname = $row['companyName'];
                echo "$dbname";
            }
    if($numrows!==0){
        while($row = mysql_fetch_assoc($query)){
            $dbid = $row['id'];
            $dbtitle = $row['title'];
            $dbjob = $row['job'];
            $dbdes = $row['des'];
            $dbdate = $row['date'];
            $dbcompany = $row['company'];
            echo "<table border='1'>
    <tr>
        <td>".$dbtitle.'</br>'.$dbdate."</td>
        
    </tr>
    <tr>
        <td>".$dbcompany."</td>
    </tr>
    <tr>
        <td>".$dbjob."</td>
    </tr>
    <tr>
        <td>".$dbdes."</td>
    </tr>
</table></br></br>";

        }
    }
}
echo "<form action='post.php' method='post'>
    <p>Company Name</p> 
    <input type='text' name='company'>
    <p>Title</p>
    <input type='text' name='title'>
    <p>Job Skills Needed</p>
    <input type='text' name='job'>
    <p>Desciption</p> 
    <input type='text' name='des'>
    <p>Location</p>    
    <input type='text' name='location'>
    <input type='submit'>
</form>";
// close connection
// mysqli_close($connect);

?>

<footer id="footer" class="footer3">
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