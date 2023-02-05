<?php
$pageTitle = "Admin - Categories";
require '../includes/header.php';
// if user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    echo 'Please Login first.';
} else {
require '../includes/sideBar.php';

$fetchCategoryInfo = selectAll($pdo,'*','category');

require '../templates/categoryTable-Template.php';
}
require '../includes/footer.php';
?>
