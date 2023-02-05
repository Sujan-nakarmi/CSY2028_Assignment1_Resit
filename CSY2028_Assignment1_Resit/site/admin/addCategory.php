<?php
$pageTitle = "Admin - Add Category";
require '../includes/header.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    echo 'Please Login first.';
} else {
    require '../includes/sideBar.php';
    $heading = "Add Category";
    require '../templates/categoryDetail-Template.php';

    if (isset($_POST['submit'])) {
        // getting all user input
        $name = $_POST['name'];

            // posting it to database
            $arguements = [
                'name' => $name
            ];
            insert($pdo,'category',$arguements);
            echo 'Category Posted';
        }
    }

?>