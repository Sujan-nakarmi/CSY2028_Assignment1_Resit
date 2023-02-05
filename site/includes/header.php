<?php
// start session
require 'startSessions.php';
// error_reporting(0);

require $_SERVER['DOCUMENT_ROOT'].'/admin/dbconnect.php';
require $_SERVER['DOCUMENT_ROOT'].'/includes/functions.php';

$path = 'categoryPage.php';
// setting path for category page
if($_SESSION['user_type']==1){
	$path = '/as1s/categoryPage.php';
}
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="/site/styles.css" />
	<title><?php
			// creating dynamic title for each page
			echo $pageTitle;
			?></title>
</head>

<body>
	<header>
		<section>
			<h1>Northampton News</h1>
		</section>
	</header>
	<nav>
		<ul>
			<li><a href="/site/index.php">Latest Articles</a></li>
			<li><a href="#">Select Category</a>
				<ul>
					<?php
					// getting the category from database
					$getCategoryQeury = selectAll($pdo, '*', 'category');
					foreach ($getCategoryQeury as $category) {
						echo '<li><a class="articleLink" href='.$path.'?id=' . $category['category_id'] . '>' . $category['name'] . '</a></li>';
					}
					?>
				</ul>
			</li>
			<!-- if the user is logged in then it should hide the login and signup button -->
			<?php
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
			?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Signup</a></li>

			<?php
			} else {
				// adding another option if the logged in user is admin
				if($_SESSION['user_type']===1){
					echo '<li><a href=/site/admin/index.php>Admin</a></li>';
				}
			?>
			<li><a href="/site/logout.php">Logout</a></li>
			<?php
			}

			?>
		</ul>
	</nav>
	<img src="/as1s/images/banners/randombanner.php" />
	<main>