<?php
$pageTitle = "Northampton News - Article";
require 'includes/header.php';

// getting article id
$article_id = $_GET['articleId'];

// getting article info
$whereClause = "WHERE article_id = $article_id";
$getArticleQuery = selectSpecific($pdo,'*','article',$whereClause);

// setting info
$articleTitle = $getArticleQuery[0]['title'];
$articleContent = $getArticleQuery[0]['content'];
$publishDate = $getArticleQuery[0]['publishDate'];
// echo $articleTitle;

require 'templates/fullarticle-Template.php';

// if clicked comment button 
if (isset($_POST['submit'])){
    // getting user input
    $commentText = $_POST['commentText'];

    $parameter = [
        'comment'=>$commentText,
        'user_id' => $_SESSION['user_id'],
        'article_id' => $article_id
    ];

    insert($pdo,'comment',$parameter);
    echo 'Comment added';
    header("Refresh:1");
}

require 'includes/footer.php';
?>