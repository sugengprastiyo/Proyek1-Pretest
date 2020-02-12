<!DOCTYPE html>
<html lang="en">

<head>
  <title>Story Life Visual</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
  include 'header_user.php';
  ?>

  <script>
    window.location = 'login.php';
  </script>
  <div class="jumbotron">
    <div class="container text-center">
      <h1>Story Life Visual</h1>
      <p>Make your Moment</p>

    </div>
  </div>


  <div class="container-fluid bg-3 text-center">
    <h3>Paket Foto</h3><br>
    <div class="row">
      <center>
        <div class="col-sm-4">
          <a href="paketfoto1.php">
            <button class="w3-button w3-light-grey">
              <p>Paket 1</p>
              <img src="https://www.phillymag.com/wp-content/uploads/sites/3/2019/03/monet-malatino-wedding-thumb.jpg" class="img-responsive" style="width:100%" alt="Image">
            </button></a>
        </div>
        <div class="col-sm-4">
          <a href="paketfoto2.php">
            <button class="w3-button w3-light-grey">
              <p>Paket 2</p>
              <img src="https://junebugweddings.com/wedding-blog/wp-content/uploads/2019/08/mid-century-mercury-hall-wedding-with-southwestern-influence-and-austin-texas-vibes-gloria-goode-photography-41.jpg" class="img-responsive" style="width:100%" alt="Image">
            </button></a>
        </div>
        <div class="col-sm-4">
          <a href="paketfoto3.php">
            <button class="w3-button w3-light-grey">
              <p>Paket 3</p>
              <img src="https://overthemoon.com/wp-content/uploads/2018/10/alexandra-sisto-jarrett-daniel-37.jpg" class="img-responsive" style="width:100%" alt="Image">
            </button></a>
        </div>
        <!-- <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div> -->
      </center>
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

</body>

</html>