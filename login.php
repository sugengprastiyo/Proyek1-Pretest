<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Story Life Visual</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
        .text-h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: black;
            padding-top: 30px;
            padding-bottom: 20px;
        }

        .card-form {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            
            width: 380px;
            height: 380px;
            border-radius: 20px;
            background-color: grey;
            ;
            text-align: center;
        }

        .input {
            margin-top: 30px;
            padding: 30px;
            border-bottom: none;
            background: rgba(255, 255, 255, 0);
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            border: none;
            border-bottom: solid 1px;
        }

        input::placeholder {
            color: white;
            font-size: 19px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        input[type="submit"] {
            padding: 10px 55px;
            border-radius: 25px;
            background: rgb(76, 173, 88);
            font-weight: bold;
            color: white;
            margin-top: 30px;
            font-size: 19px;
        }
    </style>
</head>

<body>
    <?php
    include 'header_login.php';
    ?>
    <center>
        <h1 class="text-h1">Login </h1>
        <div class="card-form">
            <form role="form" method="POST">
                <input type="text" name="username" class="input" placeholder="Username" required><br>
                <input type="password" name="password" class="input" placeholder="Password" required><br>
                <input type="submit" name="login" value="Login"><br><br>
                Don't have an account? <a href="signup.php" style="color:black">Sign Up!</a>
            </form><br><br>
            <br>
        </div>
        <?php
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $query = "select * from user_login where username='$username' and password='$password'";
            $result = mysqli_query($connect, $query);
            $check = mysqli_num_rows($result);

            if ($check > 0) {
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['status'] = 'user_login';
        ?>
                <script>
                    alert('Success Login');
                    window.location = 'dashboard_user.php';
                </script>
            <?php
            } else { ?>
                <script>
                    alert('Wrong Username / Password');
                    window.location = 'login.php';
                </script>
        <?php
            }
        }
        ?>
    </center>
</body>
<?php

?>

</html>