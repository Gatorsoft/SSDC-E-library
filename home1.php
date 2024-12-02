<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>E-Library Home</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/myhome.css">
  <link href="https://fonts.googleapis.com/css2?family=Mystery+Quest&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/bsb-btn-circle/bsb-btn-circle.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/bsb-sep/bsb-sep.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/font-size/font-size.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/padding/padding.css">

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link href="headers.css" rel="stylesheet">

  <!--CSS File Link-->
  <link rel="stylesheet" href="css/library.css">
    <!--CSS File Link-->

    <!--Bootstrap CDNs-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--Bootstrap CDNs-->

    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Font Awesome CDN-->

    <link for="header" rel="stylesheet" href="https://docs-ds.estaleiro.serpro.gov.br/govbr-ds-core/dist/core.min.css" />
    <!-- Fonte Rawline-->
    <link rel="stylesheet"
        href="https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css" />
    <!-- Fonte Raleway-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap" />
    <!-- Fontawesome-->


</head>

<body>

  <?php

  include("header.php");

  ?>


  <main>

    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12">

          <div class="img-fluid ">

            <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div style="border-radius: 15px;" class="carousel-inner shadow-lg">
                <!-- First Slide -->
                <div class="carousel-item active">
                  <div class="image-box">
                    <img src="resources/14.avif" alt="Slide 1" class="d-block w-100">

                  </div>
                  <div class="carousel-caption text-start mb-5 mt-sm-5">
                    <h1 class="sppb-addon-title fw-bold" style="color: #fff;">Welcome To </h1>
                    <p class="opacity-75">
                      
                    </p>
                    <p></p>
                  </div>
                </div>
                <!-- Second Slide -->
                <div class="carousel-item">
                  <div class="image-box">
                    <img src="resources/9.jpg" alt="Slide 2" class="d-block w-100">
                  </div>
                  <div class="carousel-caption mb-5">
                    <h1><b style="color: #fff; font-weight: bold;">New Updated News</b></h1>
                    <p style="color: #fff;">Discover our expanding book collection. Stay tuned for updates and features!.</p>
                  </div>
                </div>
                <!-- Third Slide -->
                <div class="carousel-item">
                  <div class="image-box">
                    <img src="resources/4.jpg" alt="Slide 3" class="d-block w-100">
                  </div>
                  <div class="carousel-caption text-start mb-5">
                    <h1 style="font-family: 'Courier New', Courier, monospace;"><b style="color: #fff; font-weight: bold;">Project E-Library</b></h1>
                    <p style="color: #fff;"> </br> -> First Version is released !... </br> -> New Versions are comming soon !... </br> ->
                      What are you Expected From them ? </p>
                    <button class="btn btn-success fs-4" onclick="sendEmail()">Send us an E-mail !...</button>
                  </div>
                </div>
              </div>

              <!-- Carousel Controls -->
              <button class="carousel-control-prev custom-carousel-btn" type="button" data-bs-target="#myCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon custom-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next custom-carousel-btn" type="button" data-bs-target="#myCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon custom-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>


            </div>
          </div>



          <!-- heroo eka  -->
          <section class="py-2 text-center my-3  ">
            <div class=" row py-lg-5 box1 my-2 ms-1 me-1">
              <div class="album col-lg-12 col-md-8 mx-auto  position-relative " style="height: 400px; width: 3000px;">
                <!-- Background image using img tag -->
                <img src="resources/4545.png" alt="background image" style="border-radius: 15px;"
                  class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover d-block d-md-none  shadow-lg bg-body-tertiary  mx-md-0 my-md-0 img-fluid">
                <img src="resources/4545.png" alt="background image" style="border-radius: 15px;"
                  class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover d-none d-sm-block  shadow-lg bg-body-tertiary ">
                <img src="resources/4545.png" alt="background image" style="border-radius: 15px;"
                  class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover d-none d-lg-block  shadow-lg bg-body-tertiary ">
                <img src="resources/4545.png" alt="background image" style="border-radius: 15px;"
                  class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover d-none d-xl-block shadow-lg bg-body-tertiary    ">

                <!-- Content on top of the image -->
                <div
                  class="fulltxt text-container fs-sm-4 fw-light text-white position-relative col-lg-8 col-md-8 mx-auto text-center d-flex align-items-center justify-content-center mt-3">
                  <div>
                    <!-- Apply the 'e-letter' class to the 'E' element -->
                    <p class="h1 fulltxt fw-light text-white e-letter fs-sm-2">E</p>
                  </div>

                  <div>
                    <!-- Apply the 'library-text' class to the '- Library' element -->
                    <p class="h1 fulltxt  fw-light text-white library-text fs-sm-2">- Library</p>
                  </div>
                </div>





                <!-- Paragraph (Responsive Font Size and Margin) -->
                <p class="lead text-body-secondary position-relative fs-6 fs-sm-5 mt-4 ">
                  <span style="color: white;">Something short and leading about the collection below—its contents,
                    the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over
                    it entirely.</span>
                </p>

                <!-- Button (Responsive Styling) -->
                <button onclick="goToLibrary();" class="lib position-relative shadow-lg btn btn-outline-light fs-6 fs-sm-5 px-4 py-2">
                  Go to E-Library
                </button>

              </div>
            </div>
        </div>


      </div>

    </div>
    </section>
    <!-- hero eka -->


    <?php

    include("footer.php");

    ?>

    </div>
    </div>
    </div>




  </main>





  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>