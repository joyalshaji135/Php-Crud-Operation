<?php
include('./config.php');
$update_id=$_GET['update_id'];
$select_query="Select * from operation where user_id=$update_id";
$query=mysqli_query($con,$select_query);
while($row_query=mysqli_fetch_array($query))
{
    $username=$row_query['username'];
    $useremail=$row_query['email'];
    $userpassword=$row_query['password'];
    
}

if(isset($_POST['update']))
{
    $uname=$_POST['username'];
    $uemail=$_POST['email'];
    $upassword=$_POST['userpassword'];
    $upadte_query="update operation set username='$uname',email='$uemail',password='$upassword' where user_id=$update_id";
    $u_query=mysqli_query($con,$upadte_query);
    if($u_query)
    {
        header('location:display.php');
    }
}
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
            <input type="text" class="form-control" name="username" id="uname" value="<?php echo $username; ?>" placeholder="Username" required autocomplete="off">
            <br>
        </div>
        <div class="form-group">
            <label for="email">Enter Your Email</label>
            <br>
            <input type="email" class="form-control" name="email" id="uemail" value=<?php echo $useremail; ?> placeholder="User Email" required autocomplete="off">
            <br>
        </div>
        <div class="form-group">
            <label for="userpassword">Enter Your Password</label>
            <br>
            <input type="password" class="form-control" name="userpassword" id="upassword" value="<?php echo $userpassword; ?>" placeholder="User Password" required autocomplete="off">
            <br>
        </div>
        <button class="btn btn-primary" name="update">
            Update
        </button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
</body>
</html>