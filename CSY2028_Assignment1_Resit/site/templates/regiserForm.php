<!-- this is the signup form template -->

<h2>Registration form</h2>
<form action="#" method="POST">
			<label>FirstName*</label> 
			<input type="text" name="firstname" required value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname'];?>"/>
			<label>Lastname*</label> 
			<input type="text" name="lastname" required value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname'];?>"/>
            <label>Email*</label> 
			<input type="email" name="email"  required value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"/>
            <label>Password*</label> 
			<input type="password" name="password" required value="<?php if(isset($_POST['password'])) echo $_POST['password'];?>"/>
			<label>Confirm Password*</label> 
			<input type="password" name="repassword" required/>
			<label>Contact Number*</label>
			<input type="text" name="contact"  required value="<?php if(isset($_POST['contact'])) echo $_POST['contact'];?>"/>
			<label>Address*</label>
			<input type="text" name="address" required value="<?php if(isset($_POST['address'])) echo $_POST['address'];?>"/>
			<input type="submit" name="register" value="Register" />
        </form>