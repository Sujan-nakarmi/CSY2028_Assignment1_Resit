
<article>
    <h2><?php
    echo $heading;
    ?></h2>
<form action="#" method="POST">
    <label for="title">Title: </label>
    <!-- values are if it is edit article then it will get data from database and paste as value -->
    <input type="text" name="title" value="<?php echo isset($articleDetail) ? $articleDetail['title'] : '' ?>" required>
    <label>Category</label>
<select name="categoryId">
<?php
    $stmt = selectAll($pdo,'*','category');
    foreach ($stmt as $row) {
        echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
    }
?>
</select>
    <label>Content</label> <textarea name="content" cols="50" rows="10" required><?php echo isset($articleDetail) ? $articleDetail['content'] : '' ?></textarea>
    <!-- <input type="text" name="content"> -->
    <label for="date">Date: </label>
    <input type="Date" name="date" value="<?php echo isset($articleDetail) ? $articleDetail['publishDate'] : '' ?>" required>
    <input type="submit" name="submit" value="Submit" />
</form>
</article>