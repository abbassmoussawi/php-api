<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
<label for="password">Insert your password</label>
<input type="password" name="password">
<input type="submit" name="submit">
</form>
<?php
if($_POST){
$password = $_POST['password'];

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
}else{
    echo 'Strong password.';
    echo json_decode($password);
}
}

?>
