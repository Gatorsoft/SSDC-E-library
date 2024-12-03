<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">

  <title>E-Library Cover Page</title>

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/mycover.css">
  <link rel="stylesheet" href="css/myhome.css">
  <link rel="stylesheet" href="css/bootstrap.css">

  <link rel="Icon" href="resources/logo.jpg">

</head>

<body class="d-flex h-100 text-center text-bg-dark">

  <!-- Background video -->
  <video class="bg-video position-absolute w-100 h-100 object-fit-cover" autoplay muted loop>
    <source src="resources/book3-vmake.mp4" type="video/mp4">
  </video>

  <!-- Centered Modal -->
  <div class="modal fade show d-block" id="modalTour" tabindex="-1" role="dialog" aria-labelledby="modalTourLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content rounded-4 shadow"
        style="max-width: 600px; width: 100%; margin-left: auto; margin-right: auto;">
        <div class="modal-body p-5">

          <!-- Welcome text (responsive font size) -->
          <h2 class="fw-bold mb-0" style="color: white; font-family: 'Courier New', Courier, monospace;">
            <span class="d-block fs-1 fs-sm-2 fs-md-3">Welcome to</span>
            <div class="h1 fs-2 fs-sm-3 fs-md-4">E-Library</div>
          </h2>

          <!-- Button with responsive width -->
          <button type="button" class="btn btn-lg btn-primary mt-5 w-100" data-bs-dismiss="modal" onclick="b1();">Great,
            thanks!</button>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>