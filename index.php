<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Blog Template · Bootstrap v5.3</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <main class="container">

  <div>
    <?php
    include "ViewPageCard.php";
    ?>
  </div>

    <div class="container">
      <div class="row g-5" style="margin-top: 20px;">
        <div class="col-md-8">

          <!--description -->
          <article class="">
           


            </article>


            <div>
              <h4 class="fst-italic">Chapters</h4>
              <ul class="list-unstyled">
                <li>
                  <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                    href="#">
                    <div class="col-lg-8">
                      <h6 class="mb-0">Chapter Name</h6>
                      <small class="text-body-secondary">01</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                    href="#">
                    <div class="col-lg-8">
                      <h6 class="mb-0">Chapter Name</h6>
                      <small class="text-body-secondary">02</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                    href="#">
                    <div class="col-lg-8">
                      <h6 class="mb-0">Chapter Name</h6>
                      <small class="text-body-secondary">03</small>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="col-12 mb-3">
        <div class="row">

          <div class="button-container order-1 col-1" style="margin-top: 80px;">
            <button class="btn" id="scroll-left">
              <img src="icon/side1.png" style="height: 20px; width: 20px;">
            </button>
          </div>
          <div class="button-container order-3 col-1" style="margin-top: 80px;">
            <button class="btn" id="scroll-right">
              <img src="icon/side2.png" style="height: 20px; width: 20px;">
            </button>
          </div>

          <div class="scrolbar order-2 col-10" id="scrollable" style="background-color: #e5f9e6;">
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
            <div class="item"><img src="img/memory book.jpg" style="width: 140px; height: 210px;"></div>
          </div>
        </div>
      </div>

    </div>

    <script>
      const scrollLeftButton = document.getElementById("scroll-left");
      const scrollRightButton = document.getElementById("scroll-right");
      const scrollable = document.getElementById("scrollable");

      scrollLeftButton.addEventListener("click", () => {
        scrollable.scrollBy({
          left: -150,
          behavior: 'smooth'
        });
      });

      scrollRightButton.addEventListener("click", () => {
        scrollable.scrollBy({
          left: 150,
          behavior: 'smooth'
        });
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


  </main>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>