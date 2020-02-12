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
        <h1>PAKET 3</h1>
        <p>Gold Video Package</p>

      </div>
    </div>


    <div class="container-fluid bg-3 text-center">
      <h3> Gold Video Package</h3><br>
      <img src="https://www.samhurdphotography.com/wp-content/uploads/2014/12/75-sigma-50mm-camera-lens-flare.jpg" class="img-responsive" style="width:100%" alt="Image">
      <div class="row">

        <h2>Gold Video Package</h2>
        <h4>Include <br>
          3 Videographer and 1 Director <br>
          1 minutes + 3 minutes Cinematic <br>
          1 Link google drive 15Gb <br>
        </h4>
        <br><br>

        <h4 style="color: red">Rp; 8.500.000.00</h4>

        <br><br>
        <a href="formbooking.php?id_paket=6">
          <button type="button" class="btn btn-success">Booking Now</button></a>

        <!-- <center>
    <div class="col-sm-4">
      <a href=""></a>
      <button ><p>Paket 1</p>
      <img src="https://www.phillymag.com/wp-content/uploads/sites/3/2019/03/monet-malatino-wedding-thumb.jpg" class="img-responsive" style="width:100%" alt="Image"></button>
    </div>
    <!-- <div class="col-sm-4"> 
      <p>Paket 2</p>
      <img src="https://junebugweddings.com/wedding-blog/wp-content/uploads/2019/08/mid-century-mercury-hall-wedding-with-southwestern-influence-and-austin-texas-vibes-gloria-goode-photography-41.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Paket 3</p>
      <img src="https://overthemoon.com/wp-content/uploads/2018/10/alexandra-sisto-jarrett-daniel-37.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div> -->
        <!-- <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div> -->

      </div><br>

      <!-- <div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br> -->

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