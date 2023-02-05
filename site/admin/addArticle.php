<?php
$pageTitle = "Admin - Add article";
require '../includes/header.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    echo 'Please Login first.';
} else {
    require '../includes/sideBar.php';
    $heading = "Add Article";
    require '../templates/articleDetails-Template.php';

    if (isset($_POST['submit'])) {
        // getting all user input
        $title = $_POST['title'];
        $category = $_POST['categoryId'];
        $content = $_POST['content'];
        $date = $_POST['date'];
        $userId = $_SESSION['user_id'];

            // posting it to database
            $arguements = [
                'title' => $title,
                'content' => $content,
                'publishDate' => $date,
                'category_id' => $category,
                'user_id' => $userId
            ];
            insert($pdo,'article',$arguements);
            echo 'News Posted';
        }
    }

?>