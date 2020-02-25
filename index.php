<?php 
  require './db.php';
  $sql_index = "SELECT * FROM index_details";
  $result_index = $mysqli->query($sql_index);
  $row = $result_index->fetch_assoc();

  $scrolling_link = $row["scrolling_link"];
  $banner_img1 = $row["banner_img1"];
  $banner_img2 = $row["banner_img2"];
  $banner_img3 = $row["banner_img3"];

  echo $banner_img3 = null;
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="./assets/css/style.css">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>

  <div class="container-fluid remove-all-margin-padding">

    <!-- BANNER START -->

    <div class="banner">
      <h1 class="display-4">FTPO Pune Banner</h1>
    </div>

    <!-- BANNER END -->

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./event.php">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./committee.php">Committee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- NAVBAR END-->

    <!-- CAROUSEL START -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $banner_img1 ).'"/>'; ?>
        </div>
        <div class="carousel-item">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $banner_img2 ).'"/>'; ?>
        </div>
        <?php if(($banner_img3 == null) != 1) { ?>
        <div class="carousel-item">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $banner_img3 ).'"/>'; } ?>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- CAROUSEL END -->

    <!-- MARQUEE NOTIF START -->

    <div class="notification">
      <marquee>
        <h4>
          <a href="<?php echo $scrolling_link; ?>"> Notification of Placement Drive Organized </a>
        </h4>
      </marquee>
    </div>

    <!-- MARQUEE NOTIF END -->

    <!-- ABOUT US START -->
    <div class="about-us">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h2 class="display-4">
              ABOUT US
            </h2>
            <p class="text-justify">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
              pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
              id
              est laborum.
            </p>
          </div>
          <div class="col-md">
            <img src="./assets/img/ftpo-logo-large.jpg" class="img-thumbnail" alt="FTPO LOGO">
          </div>
        </div>
      </div>
    </div>
    <!-- ABOUT US END -->
  </div>
  <!-- Footer -->
  <section id="footer">
    <div class="container-fluid">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Quick links</h5>
          <ul class="list-unstyled quick-links" style="margin-left: 2em;">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Event</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Committee</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Gallery</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Contact</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Contact</h5>
          <ul class="inf">
            <li><i class="fa fa-university" aria-hidden="true"></i> Zeal College Of Engineering And Research
            </li>
            <li><i class="fa fa-home" aria-hidden="true"></i> Search Results
              Survey No.39, Dhayari Narhe Rd, Narhe, Pune, Maharashtra 411041</li>
            <li><i class="fa fa-mobile" aria-hidden="true"></i> +91 9890633345</li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> +91 02114306210</li>
            <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:tpo.dypatilcoe@gmail.com"
                class="w3ls-a" target="_blank"> tpo.dypatilcoe@gmail.com</a></li>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 text-center">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.763576266181!2d73.8226213143678!3d18.449040676174352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2be933201c149%3A0x1c055d83993ff72b!2sZeal%20College%20of%20Engineering%20and%20Research!5e0!3m2!1sen!2sin!4v1579778336871!5m2!1sen!2sin"
            height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a>
            </li>
          </ul>
        </div>
        </hr>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white bg-dark">
          <p class="footer-ftpo"><a href="#">&copy Federation of Training and Placement Pune
          </p>
        </div>
        </hr>
      </div>
    </div>
  </section>
  <!-- ./Footer -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>

</html>