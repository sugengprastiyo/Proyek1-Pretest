<!DOCTYPE html>
<html lang="en">

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
  <!-- 
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
      <ul class="nav navbar-nav">
        <li><a href="index.php">Foto</a></li>
        <li><a href="video.php">Video</a></li>
        <li><a href="contactus.php">Contact us</a></li>
      </ul>
    </div>
  </div>
</nav> -->
  <?php
  include 'connection.php';
  include 'header_user.php';
  if ($_SESSION['status'] == 'user_login') {


  ?>


    <div class="jumbotron">
      <div class="container text-center">
        <h1>PAKET 1</h1>
        <p>Silver Package</p>

      </div>
    </div>


    <div class="container-fluid bg-3 text-center">
      <h3>Foto Silver Package</h3><br>
      <img src="https://www.osteriaweddings.com.au/wp-content/uploads/2019/09/osteria-weddings-casuarina-wedding-venue-MaxineDaniel-527-650x436.jpg" class="img-responsive" style="width:100%" alt="Image">
      <div class="row">

        <h2>Silver Package</h2>
        <h4>Include <br>
          3 Photographer and 1 Director <br>
          Unlimited Photo <br>
          50 Edit photo <br>
        </h4>
        <br><br>

        <h4 style="color: red">Rp; 2.000.000.00</h4>

        <br>
        <a href="formbooking.php?id_paket=1">
          <button type="button" class="btn btn-success">Booking Now</button></a>



      </div><br>

      <footer class="container-fluid text-center">
        <p>Copy Right Story Life Visual</p>
      </footer>
    <?php
  } else {
    header("Refresh:0; url-login.php");
  }
    ?>
</body>

</html>