<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$companyName = mysqli_real_escape_string($link, $_POST['companyName']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$description = mysqli_real_escape_string($link, $_POST['description']);
$location = mysqli_real_escape_string($link, $_POST['location']);

 
// attempt insert query execution

$sql = "INSERT INTO `spin it`.`company` (`id`, `companyName`, `email`, `password`, `description`, `type`, `location`) VALUES (NULL,'$companyName','$email','$password','$description','0', '$location')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header('location: accountCompany.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
