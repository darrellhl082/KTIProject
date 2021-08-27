<?php 
session_start();
require '../../main-function/function.php';

if (!isset($_SESSION["login"]) AND !isset($_SESSION["id"])) {
	echo "<script>
				document.location.href = '../Login/index.php';
			</script>";
	exit;
} 

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../Bootstrap/bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <!-- My Css -->
    <link rel="stylesheet" href="style.css">
    <title>Contribute</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light  sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">MACA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../../Home/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../Profile/index.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../About/index.php">About</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container main justify-content-center align-items-center align-content-center">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title">Contribute</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 menu  align-items-center">
                <ul class="me-auto menuList text-center">
                    <li class="d-inline-block me-3 mt-2 mb-2">
                        <a href="#">Home</a>
                    </li>
                    <li class="d-inline-block me-3 mt-2 mb-2">
                        <a href="#">Physics</a>
                    </li>
                    <li class="d-inline-block me-3 mt-2 mb-2">
                        <a href="#">Physics</a>
                    </li>
                    <li class="d-inline-block me-3 mt-2 mb-2">
                        <a href="#">Physics</a>
                    </li>
                    <li class="d-inline-block me-3 mt-2 mb-2">
                        <a href="#">Physics</a>
                    </li>
                    <li class="d-inline-block me-3 mt-2 mb-2">
                        <a href="#">Physics</a>
                    </li>
                    <li class="d-inline-block me-3 mt-2 mb-2">
                        <a href="#">Physics</a>
                    </li>
                    <li class="d-inline-block me-3 mt-2 mb-2">
                        <a href="#">E-Book</a>
                    </li>
                    <li class="d-inline-block me-3 mt-2 mb-2">
                        <a href="#">Contribute</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="row contribute justify-content-around mb-5">
            <div class="col-md-3 text-center icon">
                <a href="upload-article/index.php">
                    <img src="img/upload-article.svg" alt="" class="img-fluid">
                    <h5 class="upload-title text-black mt-3">Upload Article</h5>
                </a>
            </div>
            <div class="col-md-3 text-center icon">
                <a href="upload-ebook/index.php">
                    <img src="img/upload-ebook.svg" alt="" class="img-fluid">
                    <h5 class="upload-title text-decoration-none text-black mt-3">Upload E-Book</h3>
                </a>
            </div>
        </div>
    </div>




    <!-- Jquery -->
    <script src="../../Js/Jquery/jquery-3.6.0.min.js"></script>
    <!-- Bootrap js -->
    <script src="../../Bootstrap/bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <!-- My Script -->
    <script src="script.js"></script>


</body>

</html>