<?php
session_start();
$user = $_SESSION['username'];
include 'connection.php';
$sql = "SELECT * FROM user_login WHERE nama='$user'";
$result = mysqli_query($connect, $sql);
$check = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>formbooking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <?php
  include 'header_booking.php';
  include 'connection.php';
  if ($_SESSION['status'] == 'user_login') {
  ?>

    <!-- <nav class="navbar navbar-inverse">
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
          <ul class="nav navbar-nav">
            <li><a href="index.php">Foto</a></li>
            <li><a href="video.php">Video</a></li>
            <li><a href="contact.php">Contact us</a></li>
          </ul>
        </div>
      </div>
    </nav> -->


    <div class="jumbotron">
      <div class="container text-center">
        <h1>Story Life Visual</h1>
        <p>Make your Moment</p>

      </div>
    </div>

    <?php
    $id_paket = $_GET['id_paket'];
    ?>
    <div class="container">
      <form action="formbookingproses.php" method="POST">
        <div class="form-group">
          <label for="inputdefault">Nama</label>
          <input class="form-control" id="inputdefault" name="nama_booking" type="text" value="<?php echo $check['username']; ?>">
        </div>
        <div class="form-group">
          <label for="inputdefault">Alamat Email</label>
          <input class="form-control" id="inputdefault" type="text" name="alamat_email" value="<?php echo $check['email']; ?>">
        </div>
        <div class="form-group">
          <label for="inputdefault">Tanggal Wedding</label>
          <input class="form-control" id="inputdefault" type="date" name="tanggal_wedding">
          <input type="hidden" name="id_paket" value="<?php echo $id_paket ?>">
        </div>
        <br>

        <button type="sumbit" class="btn btn-success">Booking</button>
      </form>

    </div>

    <br><br><br><br><br>

    <footer class="container-fluid text-center">
      <p>Copy Right Story Life Visual</p>
    </footer>
  <?php
  } else {
    header("Refresh:0; url=login.php");
  }
  ?>
</body>

</html>