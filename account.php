<?php
session_start();
$host = "localhost";


$i = session_id();
// Create connection
$connect = mysql_connect($host,"root","")or die("Couldn't connect to the database!");
    $select_db = mysql_select_db("spin it") or die("Couldn't find database");
$query = mysql_query("SELECT * FROM `freelancers` WHERE id = '1'");
    $numrows = mysql_num_rows($query);
    if($numrows!==0){
        while($row = mysql_fetch_assoc($query)){
            $dbid = $row['id'];
            $dbfirstName = $row['firstName'];
            $dblastName = $row['lastName'];
            $dbemail = $row['email'];

            
            echo "$dbfirstName"," ";
            echo "$dblastName"," ";
            echo "@" ," ";
            echo "$dbemail";

   
       }
   }
   $connect = mysql_connect($host,"root","")or die("Couldn't connect to the database!");
    $select_db = mysql_select_db("spin it") or die("Couldn't find database");
$query = mysql_query("SELECT * FROM `company` WHERE id = ''");
    $numrows = mysql_num_rows($query);
    if($numrows!==0){
        while($row = mysql_fetch_assoc($query)){
            $dbid = $row['id'];
            $dbfirstName = $row['firstName'];
            $dblastName = $row['lastName'];
            $dbemail = $row['email'];

            
            echo "$dbfirstName"," ";
            echo "$dblastName"," ";
            echo "@" ," ";
            echo "$dbemail";

   
       }
   }

?>
