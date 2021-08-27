<?php 
session_start();
require '../../main-function/function.php';
if (!isset($_SESSION["login"]) AND !isset($_SESSION["id"])) {
	echo "<script>
				document.location.href = '../Login/index.php';
			</script>";
	exit;
} 
if (!$result){
	echo mysqli_error($conn);
}
$articles = query("SELECT * FROM Article ORDER BY idArticle DESC");
$idArticle = $_GET['id'];
$article = query("SELECT * FROM Article WHERE idArticle = $idArticle");
if (!$result){
	echo mysqli_error($conn);
}?>


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
    <title>Newton's Laws</title>
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
                        <a class="nav-link" href="../../Home/index.php">Home</a>
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
    <div class="container main">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title">Physics</h1>
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
                        <a href="#">Physics</a>
                    </li>
                    <li class="d-inline-block me-3 mt-2 mb-2">
                        <a href="#">Contribute</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="row article mt-5 text-black justify-content-between">
            <?php foreach ($article as $key): ?>
            <div class="col-md-8">
                <h3 class="article-title fw-bold ">
                    <?php echo $key["title"]?>
                </h3>
                <span class="author text-muted"> <?php echo $key["writer"]?></span>
                <img src="img/<?php echo $key["thumb"]?>" class="img-fluid mt-3 mb-5" alt="">
                <div class="content">
                    <p> <?php echo $key["content"]?></p>



                </div>

            </div>
            <?php endforeach ?>
            <div class="col-md-3 text-black">
                <h4 class="other-title-box text-center">Other</h4>
                <ul class="other">
                    <?php foreach ($articles as $identity ):?>
                    <li class="mb-3">
                        <a href="index.php?id=<?php echo $identity["idArticle"] ?> "
                            class="text-decoration-none text-black">
                            <img src="img/<?php echo $identity["thumb"]?>" class="img-fluid" alt="">
                            <h5 class="other-title mt-3"> <?php echo $identity["title"]?></h5>
                            <span class="other-desc text-muted mt-n3"><?php echo $identity["theme"]?></span>
                        </a>
                    </li>
                    <?php endforeach?>

                </ul>
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