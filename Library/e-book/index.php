<?php 
session_start();
require '../../main-function/function.php';
if (!isset($_SESSION["login"]) AND !isset($_SESSION["id"])) {
	echo "<script>
				document.location.href = '../../Login/index.php';
			</script>";
	exit;
} 

$ebook = query("SELECT * FROM Ebook");
if (!$result){
	echo mysqli_error($conn);
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
    <title>E-Book</title>
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
                <h1 class="title">E-Book</h1>
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
                        <a href="../e-book/index.php">E-Book</a>
                    </li>
                    <li class="d-inline-block me-3 mt-2 mb-2">
                        <a href="../lib-contribute/index.php">Contribute</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="row mt-5">
            <?php foreach ($ebook as $key ):?>
            <div class="col-md-3 mb-3">
                <div class="card bg-transparent">
                    <img src="img/<?php echo $key["thumb"] ?>" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $key["title"] ?></h5>
                        <p class="card-text text-mute text-secondary"><?php echo $key["theme"] ?></p>
                        <a href="files/<?php echo $key["content"] ?>" class="btn btn-outline-dark" download>Download</a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

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