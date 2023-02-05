<?php
$pageTitle = "Admin - Delete Category";
require '../includes/header.php';

$category_id = $_GET['catId'];
$whereClause = "category_id = $category_id";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    echo 'Please Login first.';
} else {
    require '../includes/sideBar.php';
?>

    <article>
        <h2>Are you sure you want to delete the category?</h2>
        <form action="#" method="POST">
        <span>
            <input type="submit" name="yes" value="yes">
           <a href="adminCategory.php"><input type="button" name="no" value="no"></a> 
        </span>
        </form>
    </article>

<?php
    // if yes button is clicked 
    if(isset($_POST['yes'])){
        delete($pdo,'category',$whereClause);
        header('location: adminCategory.php');
        echo 'Deleted Successfully, Please go back.';
    }
}
?>