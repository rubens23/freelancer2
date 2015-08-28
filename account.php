<?php
session_start();
$host = "localhost";


$uid = $_SESSION['uid'];

// Create connection
if ($_SESSION['type'] == 1){
$connect = mysql_connect($host,"root","")or die("Couldn't connect to the database!");
    $select_db = mysql_select_db("spin it") or die("Couldn't find database");
$query = mysql_query("SELECT * FROM `freelancers` WHERE id = '' + $uid + ''");
    $numrows = mysql_num_rows($query);
    if($numrows!==0){
        while($row = mysql_fetch_assoc($query)){
            $dbid = $row['id'];
            $dbcompanyName = $row['companyName'];
            $dblastName = $row['lastName'];
            $dbemail = $row['email'];

            
            echo "$dbcompanyName"," ";
            echo "$dblastName"," ";
            echo "@" ," ";
            echo "$dbemail";
            echo "</br>";
            echo "<a href='logout.php'><button type ='button' class='button special'>Log Out</button></a>";

   
       }
   }
}
else{
   $connect = mysql_connect($host,"root","")or die("Couldn't connect to the database!");
    $select_db = mysql_select_db("spin it") or die("Couldn't find database");
$query = mysql_query("SELECT * FROM `company` WHERE id = '' + $uid + ''");
    $numrows = mysql_num_rows($query);
    if($numrows!==0){
        while($row = mysql_fetch_assoc($query)){
            $dbid = $row['id'];
            $dbcompanyName = $row['companyName'];
            $dbemail = $row['email'];

            
            echo "$dbcompanyName"," ";
            echo "</br>";
            echo "$dbemail";
            echo "</br>";
            echo "<a href='logout.php'><button type ='button' class='button special'>Log Out</button></a>";

   
       }
   }
}

?>
