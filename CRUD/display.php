<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="Author" content="Joyal Shaji">
    <meta name="description" content="Datas Display">
    <meta http-equiv="refresh" content="30">
    <title>Display Datas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        .text-light {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Crud Operation</h1>
    <div class="container">
        <button class="btn btn-primary my-5 ">
            <a href="index.php" class="text-light">
                Add User
            </a>
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S/o</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select_query = "Select * from operation";
                $query_retrive = mysqli_query($con, $select_query);
                $count = 1;
                if ($query_retrive) {
                    while ($query = mysqli_fetch_array($query_retrive)) {
                        $user_id = $query['user_id'];
                        $username = $query['username'];
                        $useremail = $query['email'];
                        $userpassword = $query['password'];
                        echo "
                <tr>
                <th scope='row'>$count</th>
                <td>$username</td>
                <td>$useremail</td>
                <td>$userpassword</td>
                <td><button class='btn btn-primary'><a href='update.php?update_id=$user_id' class='text-light'>Update</a></button></td>
                <td><button class='btn btn-danger'><a href='delete.php?delete_id=$user_id' class='text-light'>Delete</a></button></td>
                </tr>";
                        $count++;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>