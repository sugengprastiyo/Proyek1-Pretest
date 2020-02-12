<?php
if ($_SESSION['status'] = 'user_login') {
?>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="foto.php">Story Life Visual</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="foto.php">Foto</a></li>
                        <li><a href="video.php">Video</a></li>
                        <li><a href="contactus.php">Contact us</a></li>
                        <!-- <li style="float:right">
        <h5 style="color:white;float:right;margin-top:0px; border-radius: 10px;">Welcome , </h5>
                  <div class="dropdown-content">
                <a href="logout.php">Log Out</a></li> -->
                        <!-- </div> -->
                    </ul>

                    <div class="dropdown" style="float:right">
                        <h5 style="color:white;float:right;margin-top:0px; border-radius: 10px;">Welcome ,<?php echo $_SESSION['username'] ?> </h5>
                        <div class="dropdown-content" style="display: inline">
                            <br>
                            <a href="logout.php">Log Out</a>
                        </div>
                    </div>
                </div>

            </div>
        </nav>
    </body>
<?php
} else {
    header("Refresh:0; url=login.php");
}
?>

    </html>