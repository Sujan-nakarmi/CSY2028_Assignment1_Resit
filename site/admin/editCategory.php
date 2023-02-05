<?php
$pageTitle = "Admin - Edit Category";
require '../includes/header.php';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    echo 'Please Login first.';
} else {
    require '../includes/sideBar.php';
    $category_id = $_GET['catId'];
    $heading = "Edit Category";
    $whereClause = "WHERE category_id = $category_id";
    $getCategoryInfo = selectSpecific($pdo, '*', 'category', $whereClause);
    // getting the row of array index 0
    $categoryDetail = $getCategoryInfo[0];
    require '../templates/categoryDetail-Template.php';

    // on press submit button
    if (isset($_POST['submit'])) {
        // getting all user input
        $name = $_POST['name'];

        $arguements = [
            'name' => $name,

        ];

        $whereConditon = [
            'category_id' => $category_id
        ];
        // data insertion
        updateData($pdo, 'category', $arguements, $whereConditon);
        echo 'Category updated';
    }
}
