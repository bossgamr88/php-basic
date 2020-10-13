<?php 
	if (!isset($_POST['send'])) {
?>	
<form action="<?php $PHP_SELF ?>" method="post">
	<b>Please enter User name and Password</b><br><br>
	Username : <input type="text" name="user"><br><br>
	Password : <input type="password" name="pass"><br><br>
	<input type="submit" name="send" value="OK">
</form>
<?php 
}	
	else
{
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	echo 'My Username is $user <br>';
	echo 'My Password is $pass';	
}
?>

