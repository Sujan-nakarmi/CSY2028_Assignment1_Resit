
<article>
    <h2><?php
    echo $heading;
    ?></h2>
<form action="#" method="POST">
    <label for="firstname">Firstname: </label>
    <!-- values are if it is edit admin then it will get data from database and paste as value -->
    <input type="text" name="firstname" value="<?php echo isset($adminDetail) ? $adminDetail['firstname'] : '' ?>" required>
    <label for="lastname">Lastname: </label>
    <input type="text" name="lastname" value="<?php echo isset($adminDetail) ? $adminDetail['lastname'] : '' ?>" required>
    <label for="email">Email: </label>
    <input type="email" name="email" value="<?php echo isset($adminDetail) ? $adminDetail['email'] : '' ?>" required>
    <?php
    if($action === 'add'){
    ?>
    <label for="password">Password: </label>
    <input type="password" name="password" value="<?php echo isset($adminDetail) ? $adminDetail['password'] : '' ?>" required>
    <?php
    }
    ?>
    <label for="contact">Contact: </label>
    <input type="text" name="contact" value="<?php echo isset($adminDetail) ? $adminDetail['contact_number'] : '' ?>" required>
    <label for="address">Address: </label>
    <input type="text" name="address" value="<?php echo isset($adminDetail) ? $adminDetail['address'] : '' ?>" required>
    <input type="submit" name="submit" value="Submit" />
</form>
</article>