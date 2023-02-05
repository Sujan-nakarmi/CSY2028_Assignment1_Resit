<?php
$pageTitle = "Admin - Delete Article";
require '../includes/header.php';

$article_id = $_GET['articleId'];
$whereClause = "article_id = $article_id";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    echo 'Please Login first.';
} else {
    require '../includes/sideBar.php';
?>

    <article>
        <h2>Are you sure you want to delete the article?</h2>
        <form action="#" method="POST">
        <span>
            <input type="submit" name="yes" value="yes">
           <a href="adminArticles.php"><input type="button" name="no" value="no"></a> 
        </span>
        </form>
    </article>

<?php
// if yes button is clicked
    if(isset($_POST['yes'])){
        delete($pdo,'article',$whereClause);
        header('location: adminArticles.php');
        echo 'Deleted Successfully, Please go back.';
    }
}
?>