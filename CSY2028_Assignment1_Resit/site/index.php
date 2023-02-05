<?php
$pageTitle = "Northampton News - Home";
require 'includes/header.php';
?>

<article>
    <h2>Latest Articles:</h2>
    <br>

    <ul>
        <?php
        //   getting the title and date of article and sorting by date
        $whereClause = "ORDER BY publishDate DESC LIMIT 10";
        $getArticleQuery = selectSpecific($pdo, '*', 'article',$whereClause);
        foreach ($getArticleQuery as $article) {       
            echo '<li><a class = "articleLink" href=fullArticle.php?articleId='.$article['article_id'].'>' . $article['title'] . '</a></li>';
            echo '<em>Published on: ' . $article['publishDate'].'</em>';
            echo '<hr>';
            echo '<br>';
        }
        ?>
    </ul>
</article>
<?php
require 'includes/footer.php';
?>