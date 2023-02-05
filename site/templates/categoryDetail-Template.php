
<article>
    <h2><?php
    echo $heading;
    ?></h2>
<form action="#" method="POST">
    <label for="name">Category Name: </label>
    <!-- values are if it is edit category then it will get data from database and paste as value -->
    <input type="text" name="name" value="<?php echo isset($categoryDetail) ? $categoryDetail['name'] : '' ?>" required>
    <input type="submit" name="submit" value="Submit" />
</form>
</article>