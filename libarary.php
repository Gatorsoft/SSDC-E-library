<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Page</title>

    <!--CSS File Link-->
    <link rel="stylesheet" href="library.css">
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

    <link rel="stylesheet" href="https://docs-ds.estaleiro.serpro.gov.br/govbr-ds-core/dist/core.min.css" />
    <!-- Fonte Rawline-->
    <link rel="stylesheet"
        href="https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css" />
    <!-- Fonte Raleway-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap" />
    <!-- Fontawesome-->

</head>

<body>
    <div class="mainbox ">
        <?php
        include "header.php";
        ?>
        <input type="checkbox" id="check">
        <div class="sidebar_menu">
            <div class="menu">
                <ul type="none" class="p-0">
                    <li class="jlevelli"><a href="#" onclick="leveldr();"><i class="fa-brands fa-java fw-bold"></i>
                            Java Institute</a>
                        <ul class="jlevels d-none" id="levels">
                            <li><a href="#">Level 1</a></li>
                            <li><a href="#">Level 2</a></li>
                            <li><a href="#">Level 3</a></li>
                            <li><a href="#">Level 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa-solid fa-book-open-reader"></i>
                            Mathematics</a></li>
                    <li><a href="#"><i class="fa-solid fa-book-open-reader"></i>
                            Science</a></li>
                    <li><a href="#"><i class="fa-solid fa-book-open-reader"></i>
                            English</a></li>
                </ul>
            </div>
            <div class="social_media">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>

            <label for="check">
                <div class="btn_two">

                    <i class="fa-solid fa-circle-arrow-left"></i>

                </div>
            </label>

        </div>

        <label class="label1" for="check">
            <div class="btn_one">

                <i class="fa-solid fa-circle-arrow-right"></i>

            </div>
        </label>

        <!--Content-->
        <div class="main1" id="main">

            <div class="filters">

                <div class="smcatogaries">

                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catogaries
                        </button>
                        <ul class="dropdown-menu cdul">
                            <li class="row ms-2 me-2">
                                <a href="#" class="col-12 col-lg-6 col-md-6"><i class="fa-brands fa-java"></i>
                                    Java Institute</a>
                                <a href="#" class="col-12 col-lg-6 col-md-6"><i class="fa-solid fa-book-open-reader"></i>
                                    Mathematics</a>
                                <a href="#" class="col-12 col-lg-6 col-md-6"><i class="fa-solid fa-book-open-reader"></i>
                                    Science</a>
                                <a href="#" class="col-12 col-lg-6 col-md-6"><i class="fa-solid fa-book-open-reader"></i>
                                    English</a>
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="dropdown ms-3">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sort By
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Ratings</a></li>
                        <li><a class="dropdown-item" href="#">Release-Date</a></li>
                        <li><a class="dropdown-item" href="#">A-Z</a></li>
                    </ul>

                </div>

                <div style="margin: 0 5px 0 20px;" class="viewby fw-bold ">
                    View By : <button class="btn btn-outline-dark d-flex align-items-center ms-3"><i class="fa-solid fa-list" style="font-size: 20px;"></i></button>
                    <button class="btn btn-outline-dark d-flex align-items-center ms-2"><i class="fa-brands fa-microsoft" style="font-size: 20px;"></i></button>
                </div>

            </div>

            <?php
            include "card.php";
            ?>

            <?php
            include "footer.php";
            ?>
        </div>
        <!--Content-->


    </div>



    <script>
        function leveldr() {
            var levels = document.getElementById("levels");

            levels.classList.toggle("d-none");
        }

    </script>
    <script src="footer.js"></script>
    <script src="https://docs-ds.estaleiro.serpro.gov.br/govbr-ds-core/dist/core-init.js"></script>
</body>

</html>