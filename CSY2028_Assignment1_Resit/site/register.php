<?php
$pageTitle = "Northamton News - Signup";
require 'includes/header.php';
require 'templates/regiserForm.php';

if(isset($_POST['register'])){

// getting all user input in the field and assigning to variable
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
// hashing the password
$hashedPassword = sha1($password);
// echo $hashedPassword;
$repassword = $_POST['repassword'];
$contact = $_POST['contact'];
$address = $_POST['address'];
// this gets email from database to check the entered email is unique
$whereClause = "WHERE email = '$email'";
// echo $whereClause;
$emailCheck = selectSpecific($pdo,'*','users',$whereClause);

// all error cases
if($password!==$repassword){
    echo 'Password do not match<br>';
}

// check if email already exists
if(!empty($emailCheck[0]['email'])){
    echo 'Email already exists <br>';
}else{
    $values = [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'password' => $hashedPassword,
        'contact_number' => $contact,
        'address' => $address
    ];
     insert($pdo,'users',$values);
    echo 'Registered Successfully';
   
}
}

require 'includes/footer.php';
?>