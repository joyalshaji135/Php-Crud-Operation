<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="Joyal Shaji">
    <meta name="description" content="CRUD OPERATION">
    <!-- <meta http-equiv="refresh" content="30"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <h1 title="heading of the content" style="text-align: center;">Crud Operation</h1>
    <div class="container my-5">
    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Enter Your Username</label>
            <br>
            <input type="text" class="form-control" name="username" id="uname" placeholder="Username" required autocomplete="off">
            <br>
        </div>
        <div class="form-group">
            <label for="email">Enter Your Email</label>
            <br>
            <input type="email" class="form-control" name="email" id="uemail" placeholder="User Email" required autocomplete="off">
            <br>
        </div>
        <div class="form-group">
            <label for="userpassword">Enter Your Password</label>
            <br>
            <input type="password" class="form-control" name="userpassword" id="upassword" placeholder="User Password" required autocomplete="off">
            <br>
        </div>
        <button class="btn btn-primary" name="submit">
            Submit
        </button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $user_email=$_POST['email'];
    $user_password=$_POST['userpassword'];

    $insert_query="insert into `operation` (username,email,password) values('$username','$user_email','$user_password')";
    $run_query=mysqli_query($con,$insert_query);
    if($run_query)
    {
        header('location:display.php');        
    }
    else
    {
        die(mysqli_error($con));
    }

}
?>