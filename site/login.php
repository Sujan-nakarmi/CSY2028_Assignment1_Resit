<?php
$pageTitle = "Northampton News - Login";
require 'includes/header.php';

// login form
require 'templates/loginForm-Template.php';


if(isset($_POST['submit'])){
//getting inputs
$email = $_POST['email'];
$password = $_POST['password'];
// hashing password for comparision
$hashedPassword = sha1($password);

$loginData = login($pdo,$email,$hashedPassword);
$userInfo = $loginData->fetchAll();
// counting rows 
$rowCount = $loginData->rowCount();

// if the logindata has more than 0 rows then
if($rowCount>0){
    $_SESSION['loggedin'] = true;
    
    // getting all user data and storing in session
    foreach($userInfo as $info){
        $_SESSION['firstname'] = $info['firstname'];
        $_SESSION['lastname'] = $info['lastname'];
        $_SESSION['user_id']= $info['user_id'];
        $_SESSION['user_type'] = $info['user_type'];
    }
    header('location: index.php');
}else{
    echo "Incorrect username or password. Please try again.";
}

}
?>
