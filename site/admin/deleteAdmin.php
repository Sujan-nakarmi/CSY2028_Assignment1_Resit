<?php
$pageTitle = "Admin - Delete Admin";
require '../includes/header.php';

$admin_id = $_GET['userId'];
$whereClause = "user_id = $admin_id";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    echo 'Please Login first.';
} else {
    require '../includes/sideBar.php';
?>

    <article>
        <h2>Are you sure you want to delete the admin?</h2>
        <form action="#" method="POST">
        <span>
            <input type="submit" name="yes" value="yes">
           <a href="manageAdmin.php"><input type="button" name="no" value="no"></a> 
        </span>
        </form>
    </article>

<?php
    // if yes button is clicked 
    if(isset($_POST['yes'])){
        delete($pdo,'users',$whereClause);
        header('location: manageAdmin.php');
        echo 'Deleted Successfully, Please go back.';
    }
}
?>