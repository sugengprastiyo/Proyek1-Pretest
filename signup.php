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
            height: 580px;
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
        <h1 class="text-h1">Sign Up</h1>
        <div class="card-form">
            <form role="form" method="POST">
                <input type="text" name="nama" class="input" placeholder="Nama Lengkap" required><br>
                <input type="email" name="email" class="input" placeholder="Email" required><br>
                <input type="text" name="username" class="input" placeholder="Username" required><br>
                <input type="password" name="password" class="input" placeholder="Password" required><br>
                <input type="submit" value="Sign Up" name="signup"><br><br>
            </form><br>
        </div>
    </center>
    <?php
    if (isset($_POST['signup'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sqlCheckUsername = "SELECT * FROM user_login where username = '$username' OR email = '$email'";
        $runCheckUsername = mysqli_query($connect, $sqlCheckUsername);

        $checkAvailability = mysqli_num_rows($runCheckUsername);

        if ($checkAvailability == TRUE) {
    ?>
            <script>
                alert('Username or Email Already Exist');
                window.location = 'signup.php';
            </script>
            <?php
        } else {
            $register = "INSERT INTO user_login(nama,email,username,password) VALUES ('$nama','$email','$username',MD5('$password'))";
            if (mysqli_query($connect, $register)) { ?>
                <script>
                    alert('Success Register');
                    window.location = 'login.php';
                </script>
            <?php
            } else { ?>
                <script>
                    alert('Error Connect MySQL');
                    window.location = 'signup.php';
                </script>
    <?php

            }
            mysqli_close($connect);
        }
    }
    ?>
</body>

</html>