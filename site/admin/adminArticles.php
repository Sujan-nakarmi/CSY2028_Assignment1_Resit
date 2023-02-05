<?php
$pageTitle = "Admin - Articles";
require '../includes/header.php';
// if user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    echo 'Please Login first.';
} else {
require '../includes/sideBar.php';

$fetchArticleInfo = selectAll($pdo,'*','article');

require '../templates/articleTable-Template.php';
}
require '../includes/footer.php';
?>
