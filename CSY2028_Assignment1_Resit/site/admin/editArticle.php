<?php
$pageTitle = "Admin - Edit article";
require '../includes/header.php';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    echo 'Please Login first.';
} else {
    require '../includes/sideBar.php';
    $article_id = $_GET['articleId'];
    $heading = "Edit Article";
    $whereClause = "WHERE article_id = $article_id";
    $getArticleInfo = selectSpecific($pdo,'*','article',$whereClause);
    // getting the row of array index 0
    $articleDetail = $getArticleInfo[0];
    require '../templates/articleDetails-Template.php';

    // on press submit button
    if(isset($_POST['submit'])){
        // getting all user input
        $title = $_POST['title'];
        $category = $_POST['categoryId'];
        $content = $_POST['content'];
        $date = $_POST['date'];

        $arguements = [
            'title'=> $title,
            'content'=> $content,
            'publishDate'=> $date,
            'category_id'=> $category,
            'user_id'=> $_SESSION['user_id']
        ];

        $whereConditon = [
            'article_id'=> $article_id
        ];
        // data insertion
        updateData($pdo,'article',$arguements,$whereConditon);
        echo 'Post updated';
    }
}
