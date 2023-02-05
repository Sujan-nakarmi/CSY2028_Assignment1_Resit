<?php
$pageTitle = "Northampton News - Category";
require 'includes/header.php';

// getting category Id from url
$categoryID = $_GET['id'];

// parameter for sql query
$select = "category.name, article.*";
$whereclause = "JOIN category
ON article.category_id = category.category_id
WHERE category.category_id = $categoryID";
$getPosts = selectSpecific($pdo, $select, 'article', $whereclause);

?>
<article>
<!-- heading of page -->
<h2><?php
    // var_dump($getPosts);
    echo $getPosts[0]["name"];
    ?></h2>

<?php
foreach ($getPosts as $postDetail) {
    echo '<li><a class = "articleLink" href=fullArticle.php?articleId='.$postDetail['article_id'].'>' . $postDetail['title'] . '</a></li>';
    echo '<em>Published on: ' . $postDetail['publishDate'].'</em>';
    echo '<hr>';
    echo '<br>';
}
?>
</article>