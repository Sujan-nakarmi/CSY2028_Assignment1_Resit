<?php
$pageTitle = "Admin - Index";
// header file 
require '../includes/header.php';
require '../includes/sideBar.php';
?>
<article>
    <h2>Welcome, <?php
    echo $_SESSION['firstname'];
    ?></h2>
    <p>Please select any option on the side menu to manage site</p>
</article>

<?php
require '../includes/footer.php';
?>
