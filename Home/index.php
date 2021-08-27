<?php 
session_start();

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
    <link rel="stylesheet" href="../Bootstrap/bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <!-- My Css -->
    <link rel="stylesheet" href="style.css">
    <title>Maca</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">MACA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../Profile/index.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../About/index.php">About</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container main">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>HOME</h1>
            </div>
        </div>
        <div class="row justify-content-around text-center p-3">
            <div class="col-md-4 icon-box mt-4">
                <a href="../Library/index.php">
                    <img class="icon" src="img/icon/books.svg" alt="">
                    <h4 class="icon-title mt-2">Library</h4>
                </a>
            </div>
            <div class="col-md-4 icon-box mt-4">
                <a href="../Tools/index.php">
                    <img class="icon" src="img/icon/calculations.svg" alt="">
                    <h4 class="icon-title mt-2">Tools</h4>
                </a>
            </div>
            <div class="col-md-4 icon-box mt-4">
                <a href="../References/index.php">
                    <img class="icon" src="img/icon/encyclopedia.svg" alt="">
                    <h4 class="icon-title mt-2">Learning References</h4>
                </a>
            </div>
            <div class="col-md-4 icon-box mt-4">
                <a href="../Discuss/index.php">
                    <img class="icon" src="img/icon/discussion.svg" alt="">
                    <h4 class="icon-title mt-2">Class Discussion</h4>
                </a>
            </div>


        </div>
    </div>


    <!-- Jquery -->
    <script src="../Js/Jquery/jquery-3.6.0.min.js"></script>
    <!-- Bootrap js -->
    <script src="../Bootstrap/bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <!-- My Script -->
    <script src="script.js"></script>


</body>

</html>