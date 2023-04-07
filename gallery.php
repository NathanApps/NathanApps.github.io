
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Oyster Properties - Gallery</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="./css/styles.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <!-- <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light">
        <div class="container-fluid navbar-container">
            <img class="navbar-brand" src="./img/logo.png" alt="logo">
          </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto justify-content-center">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Gallery <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
      </nav> -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="./img/logo.png" class="d-inline-block align-top logo" alt="Left Logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                <!-- <a class="nav-link" href="services.html">Services</a> -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./servicePages/services.html">Overall</a>
                    <a class="dropdown-item" href="./servicePages/preacquisition.html">Pre Acquisition Property Surveys</a>
                    <a class="dropdown-item" href="./servicePages/defectdiagnosis.html">Defect Diagnosis, Pathology and Reporting</a>
                    <a class="dropdown-item" href="./servicePages/partywall.html">Party Wall Advice</a>
                  </div>
                </li>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Gallery <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
            <a class="navbar-brand" href="contact.html">
              <img src="./img/RICS-Logo.png" class="d-inline-block align-top logo" alt="Right Logo">
            </a>
          </div>
        </div>
      </nav> 
    </header>

    <main role="main">
        <div class="wrapper">
            <!-- filter Items -->
            <nav>
              <div class="items">
                <span class="item active" data-name="all">All</span>
                <span class="item" data-name="canterbury">Canterbury</span>
                <span class="item" data-name="hernebay">Herne Bay</span>
                <span class="item" data-name="broadstairs">Broadstairs</span>
                <span class="item" data-name="ramsgate">Ramsgate</span>
                <span class="item" data-name="margate">Margate</span>
                <span class="item" data-name="whitstable">Whitstable</span>
                <span class="item" data-name="folkestone">Folkestone</span>
              </div>
            </nav>
            <!-- filter Images -->
            <div class="gallery">
                <?php
                $folder = './img/gallery/';
                $images = glob($folder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                foreach ($images as $image) {
                  $whatIWant = substr($image, strpos($image, "_") + 1);    
                  $whatIWant = strstr($whatIWant, '.', true);
                  //echo $whatIWant;
                  // list($width, $height) = getimagesize($image);
                  if ($width > $height) {
                      // Landscape
                      // echo '<div class="thumbnail" data-name="'.$whatIWant.'">
                      //   <div class="image" data-name="'.$whatIWant.'"><span><img src="'.$image.'" alt="" /></span></div>
                      // </div>';
                      echo '<div class=" thumbnail image" data-name="'.$whatIWant.'"><span><img src="'.$image.'" loading="lazy" alt=""></span></div>';
                  } else {
                      // Portrait or Square
                      // echo '<div class="thumbnail" data-name="'.$whatIWant.'">
                      //   <div class="image" data-name="'.$whatIWant.'"><span><img src="'.$image.'" class="portrait" alt="" /></span></div>
                      // </div>';
                      echo '<div class=" thumbnail image" data-name="'.$whatIWant.'"><span><img  class="portrait" src="'.$image.'" loading="lazy" alt=""></span></div>';
                  }
                  //echo '<div class=" thumbnail image" data-name="'.$whatIWant.'"><span><img src="'.$image.'" alt=""></span></div>';
                }
                ?>
              <!-- <div class="image" data-name="Canterbury"><span><img src="img/gallery.JPG" alt=""></span></div>
              <div class="image" data-name="Herne Bay"><span><img src="img/gallery/gallery1.JPG" alt=""></span></div>
              <div class="image" data-name="Ramsgate"><span><img src="img/gallery/gallery9.JPG" alt=""></span></div>
              <div class="image" data-name="Margate"><span><img src="img/gallery/gallery1.JPG" alt=""></span></div>
              <div class="image" data-name="Margate"><span><img src="img/gallery.JPG" alt=""></span></div>
              <div class="image" data-name="Canterbury"><span><img src="img/gallery/gallery1.JPG" alt=""></span></div>
              <div class="image" data-name="Ramsgate"><span><img src="img/gallery/gallery9.JPG" alt=""></span></div>
              <div class="image" data-name="Whitstable"><span><img src="img/gallery/gallery1.JPG" alt=""></span></div> -->
            </div>
          </div>
          <!-- fullscreen img preview box -->
          <div class="preview-box">
            <div class="details">
              <span class="title">Image Category: <p></p></span>
              <span class="icon fas fa-times">&times;</span>
            </div>
            <div class="image-box"><img src="" alt=""></div>
          </div>
          <div class="shadow"></div>
        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p class="float-left"><img class="ric-logo" src="./img/RICS-Logo.png" /></p>
        <p class="copy-right">Oyster Property Surveyors Limited is Registered in England and Wales No. 11149422, Regulated by RICS <br/>Registered Office Address: 14 Walmer Road, Whitstable, Kent, United Kingdom, CT5 4LF.</p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="./js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./js/vendor/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./js/vendor/holder.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
