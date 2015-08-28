<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$firstName = mysqli_real_escape_string($link, $_POST['firstName']);
$lastName = mysqli_real_escape_string($link, $_POST['lastName']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$website = mysqli_real_escape_string($link, $_POST['website']);
$password = mysqli_real_escape_string($link, $_POST['password']);


 
// attempt insert query execution

$sql = "INSERT INTO `spin it`.`freelancers` (`id`, `firstName`, `lastName`, `websites`, `email`, `password`, `type`) VALUES (NULL,'$firstName','$lastName','$website','$email','$password', '1')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header('location: account.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>