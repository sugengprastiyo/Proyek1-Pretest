<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <title>Story Life Visual</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>
   <?php
   include 'connection.php';
   session_start();
$usernameNow = $_SESSION['username'];
    $queryGetProfile = "Select * from user_login where username = '$usernameNow'";
    $resultProfile = mysqli_query($connect, $queryGetProfile);
    $checkResultProfile = mysqli_num_rows($resultProfile);
    if (mysqli_num_rows($resultProfile) > 0) {
        while ($profile = mysqli_fetch_array($resultProfile)) {
            $level = $profile['level'];
            if ($_SESSION['status'] == 'user_login' and $level == '2') { ?> 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Story Life Visual</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

    </div>
  </div>
</nav>

<br><br><br><br>
<?php
            include "connection.php";

            $query = "select * from transaksi_booking";
            $result = mysqli_query($connect, $query);

            ?>
<center>
            <table class="table table-bordered" style="width:auto;margin-left:50px;margin-right:50px;">
                <thead>
                    <tr>
                        <th>idPaket</th>
                        <th>Nama</th>
                        <th>Alamat Email</th>
                        <th>Tanggal Wedding</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                <tr>
                                    <td><?php echo $row['id_paket'] ?></td>
                                    <td><?php echo $row['nama_booking'] ?></td>
                                    <td><?php echo $row['alamat_email'] ?></td>
                                    <td><?php echo $row['tanggal_wedding'] ?></td>
                                </tr>

                    <?php       
                            }
                        ?>
                </tbody>
            </table>
            
        </center>
        <?php
     }
   }
   } ?>
</body>
</html>