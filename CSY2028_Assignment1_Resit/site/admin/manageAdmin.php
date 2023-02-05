<?php
$pageTitle = "Admin - Manage Admin";
require '../includes/header.php';
// if user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    echo 'Please Login first.';
} else {
require '../includes/sideBar.php';

// getting only admin users
$whereClause = 'WHERE user_type = 1';
$fetchAdminInfo = selectSpecific($pdo,'*','users',$whereClause);

require '../templates/adminTable-Template.php';
}
require '../includes/footer.php';
?>
