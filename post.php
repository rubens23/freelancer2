<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no company) */
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_POST['title']);
$job = mysqli_real_escape_string($link, $_POST['job']);
$des = mysqli_real_escape_string($link, $_POST['des']);
$location = mysqli_real_escape_string($link, $_POST['location']);
$company = mysqli_real_escape_string($link, $_POST['company']);


 
// attempt insert query execution

$sql = "INSERT INTO `spin it`.`jobpost` (`id`, `title`, `job`, `des`, `location`, `date`, `company`) VALUES (NULL, '$title','$job','$des','$location', NULL,'$company');";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>