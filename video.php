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
  include 'connection.php';
  include 'header_user.php';
  if ($_SESSION['status'] == 'user_login') {
  ?>


    <div class="jumbotron">
      <div class="container text-center">
        <h1>Story Life Visual</h1>
        <p>Make your Moment</p>

      </div>
    </div>


    <div class="container-fluid bg-3 text-center">
      <h3>Paket Video</h3><br>
      <div class="row">
        <center>
          <div class="col-sm-4">
            <a href="paketvideo1.php">
              <button class="w3-button w3-light-grey">
                <p>Paket 1</p>
                <img src="https://images.squarespace-cdn.com/content/v1/52bb96e6e4b0bb77308dfdcf/1556221206911-O2FTQDC11WKSHYDW0298/ke17ZwdGBToddI8pDm48kFWxnDtCdRm2WA9rXcwtIYR7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UcTSrQkGwCGRqSxozz07hWZrYGYYH8sg4qn8Lpf9k1pYMHPsat2_S1jaQY3SwdyaXg/Chris%2BKristen%2BPreview%2B1-0002.jpg?format=1000w" class="img-responsive" style="width:100%" alt="Image">
              </button></a>
          </div>
          <div class="col-sm-4">
            <a href="paketvideo2.php">
              <button class="w3-button w3-light-grey">
                <p>Paket 2</p>
                <img src="https://www.rockmywedding.co.uk/wp-content/uploads/sites/1/nggallery/smoke-bombs-1/Lola-Rose-Photography.jpeg" class="img-responsive" style="width:100%" alt="Image">
              </button></a>
          </div>
          <div class="col-sm-4">
            <a href="paketvideo3.php">
              <button class="w3-button w3-light-grey">
                <p>Paket 3</p>
                <img src="https://missgen.com/wp-content/uploads/2014/11/MissGenPhotography_Nordica-Wedding-London-027.jpg" class="img-responsive" style="width:100%" alt="Image">
              </button></a>
          </div>
          <!-- <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div> -->
        </center>
      </div><br>

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