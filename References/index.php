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
    <title>Learning References</title>
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
                        <a class="nav-link" href="../Home/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Profile/index.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../About/index.php">About</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container main">
        <div class="row mb-2">
            <div class="col-md-12 text-center">
                <img src="img/encyclopedia.svg" alt="" class="title-icon accordion-body mb-1">
                <h2 class="text-uppercase">Learning References</h2>
            </div>
        </div>
        <div class="row justify-content-around text-center p-3">
            <div class="col-md-4 box mt-4">
                <a href="https://www.google.com/">
                    <h4 class="icon-title mt-2">Google</h4>
                    <p class="tools-decs text-muted">A Search Engine</p>
                </a>
            </div>
            <div class="col-md-4 box mt-4">
                <a href="https://www.youtube.com/">
                    <h4 class="icon-title mt-2">Youtube</h4>
                    <p class="tools-decs text-muted">A Online Video Sharing Platform</p>
                </a>
            </div>
            <div class="col-md-4 box mt-4">
                <a href="https://www.ruangguru.com/">
                    <h4 class="icon-title mt-2">Ruang Guru</h4>
                    <p class="tools-decs text-muted">Online Course</p>
                </a>
            </div>
            <div class="col-md-4 box mt-4">
                <a href="https://e-resources.perpusnas.go.id/">
                    <h4 class="icon-title mt-2">E-Pusnas</h4>
                    <p class="tools-decs text-muted">Online National Library of the Republic of Indonesia </p>
                </a>
            </div>
            <div class="col-md-4 box mt-4">
                <a href="https://phet.colorado.edu/">
                    <h4 class="icon-title mt-2">Phet Colorado</h4>
                    <p class="tools-decs text-muted">Interactive Science Simulation</p>
                </a>
            </div>
            <div class="col-md-4 box mt-4">
                <a href="https://www.wolframalpha.com/">
                    <h4 class="icon-title mt-2">Wolfram Alpha</h4>
                    <p class="tools-decs text-muted">A computational knowledge engine or answer engine</p>
                </a>
            </div>
            <div class="col-md-4 box mt-4">
                <a href="https://translate.google.com/">
                    <h4 class="icon-title mt-2">Google Translate</h4>
                    <p class="tools-decs text-muted">Translate words, phrases, and web pages between English and over
                        100 other languangess.</p>
                </a>
            </div>
            <div class="col-md-4 box mt-4">
                <a href="https://eyes.nasa.gov/">
                    <h4 class="icon-title mt-2">NASA's Eyes</h4>
                    <p class="tools-decs text-muted">Our Solar System Visualization</p>
                </a>
            </div>
            <div class="col-md-4 box mt-4">
                <a href=https://naturalhistory.si.edu/visit/virtual-tour#">
                    <h4 class="icon-title mt-2">Smithsonian
                        Virtual Museum</h4>
                    <p class="tools-decs text-muted">The Smithsonian National Museum of Natural History virtual tours
                    </p>
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