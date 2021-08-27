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
    <link rel="stylesheet" href="../../Bootstrap/bootstrap-5.1.0-dist/css/bootstrap.min.css">

    <!-- My Css -->
    <link rel="stylesheet" href="style.css">
    <title>Algebra Solve</title>
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
                        <a class="nav-link" href="../../Home/index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Class
                        </a>
                        <ul class="dropdown-menu " style="background-color: #e0e0e0;" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">10 IPA 2</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container main p-4">
        <div class="row justify-content-center">
            <div class="col-md-8 box text-center">
                <h3 class="text-uppercase">Algebra Linear Solve</h3>
            </div>
        </div>
        <div class="row mt-2 justify-content-center text-center">
            <div class="col-md-8 box">
                <form action="">
                    <label for="x1" class="form-label mt-3">Enter the first Equation</label>
                    <input type="text" class="form-control ms-auto me-auto bg-transparent border-dark" value="5*x + 10"
                        id="x1" name="x1">
                    <label for="x1" class="form-label mt-3">Enter the second Equation</label>
                    <input type="text" class="form-control ms-auto me-auto bg-transparent border-dark" value="10*x - 7"
                        id="x2" name="x2">
                    <button type="button" class="btn btn-outline-dark mt-3" id="solve">Solve</button>
                </form>
            </div>
        </div>
        <div class="row mt-2 justify-content-center">
            <div class="col-md-8 box text-center">
                <div id="result">Result</div>
            </div>

        </div>
    </div>



    <!-- Jquery -->
    <script src="../../Js/Jquery/jquery-3.6.0.min.js"></script>
    <!-- Bootrap js -->
    <script src="../../Bootstrap/bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <!-- My Script -->
    <script src="../../Js/Math/algebra-0.2.6.min.js"></script>
    <script src="script.js"></script>


</body>

</html>