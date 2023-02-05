<?php
$pageTitle = "Admin - Add Admin";
require '../includes/header.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    echo 'Please Login first.';
} else {
    require '../includes/sideBar.php';
    $heading = "Add Admin";
    $action = "add";
    require '../templates/adminDetails-Template.php';

    if (isset($_POST['submit'])) {
        // getting all user input
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $hashedPassword = sha1($password);

            // posting it to database
            $arguements = [
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,  
                'password' => $hashedPassword,
                'contact_number' => $contact,
                'address' => $address,
                'user_type' => '1'
            ];
            insert($pdo,'users',$arguements);
            echo 'Admin Created';
        }
    }

?>