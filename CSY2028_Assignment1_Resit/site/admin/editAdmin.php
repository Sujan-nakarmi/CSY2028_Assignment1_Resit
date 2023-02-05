<?php
$pageTitle = "Admin - Edit Admin";
require '../includes/header.php';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    echo 'Please Login first.';
} else {
    require '../includes/sideBar.php';
    $admin_id = $_GET['userId'];
    $heading = "Edit Admin";
    $whereClause = "WHERE user_id = $admin_id";
    $getAdminInfo = selectSpecific($pdo, '*', 'users', $whereClause);
    // getting the row of array index 0
    $adminDetail = $getAdminInfo[0];
    $action = 'edit';
    require '../templates/adminDetails-Template.php';

    // on press submit button
    if (isset($_POST['submit'])) {

        // getting all user input
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];


        $arguements = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,  
            'contact_number' => $contact,
            'address' => $address,
        ];

        $whereConditon = [
            'user_id' => $admin_id
        ];
        // data insertion
        updateData($pdo, 'users', $arguements, $whereConditon);
        echo 'Admin updated';
    }
}
