<?php
include('./config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Hashing</title>
</head>
<body>
    <form action="#" method="post">
    <p>
        <label for="">Username</label>
        <input type="text" name="username" id="">
    </p>
    <p>
        <label for="">Password</label>
        <input type="password" name="password" id="">
    </p>
    <p>
        <input type="submit" value="Login" name="login">
    </p>
    </form>
</body>
</html>

<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $user_password = $_POST['password'];
	$hash_password = password_hash($user_password, PASSWORD_DEFAULT);

    // $insert_query = "insert into login (username,password) values ('$username','$hash_password')";
    // $insert_main_query = mysqli_query($con,$insert_query);
    // if ($insert_main_query) {
    //     echo "<script>alert('Login Successfully');</script>";
    //     echo "<script>window.open('index.php','_self')</script>";
    // }
    // else
    // {
    //     die(mysqli_error($con));
    // }
    $insert_login_query = "insert into `login` 
                    (username,password) values ('$username','$hash_password')";
		$sql_login_execute = mysqli_query($con, $insert_login_query);
		if ($sql_login_execute) {
			echo "<script>alert('Registeration SucessFully')</script>";
			echo "<script>window.open('login.php','_self')</script>";
		
	} else {
		//insert query
		echo "<script>alert('Invalid Number')</script>";
	}
}

?>