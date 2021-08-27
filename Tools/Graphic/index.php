<?php 
session_start();

if (!isset($_SESSION["login"]) AND !isset($_SESSION["id"])) {
	echo "<script>
				document.location.href = '../Login/index.php';
			</script>";
	exit;
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Graphic Plot</title>
    <script src="../../Js/Math/math.js"></script>

    <script src="../../Js/Math/plotly-2.3.1.min.js"></script>
    <link rel="stylesheet" href="../../Bootstrap/bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <script src="../../Bootstrap/bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
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
                        <a class="nav-link" href="../Home/index.html">Home</a>
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
        <div class="row">
            <div class="col-md-12 box text-center">
                <h3>Create Graphic Equation</h3>
            </div>
        </div>
        <div class="row justify-content-center text-center mt-5">
            <div class="col-md-12 mt-3 text-center justify-content-center box">
                <form id="form">
                    <label for="x-set" class="form-label mb-2">Enter X Value</label>
                    <br>
                    <p class="desc mb-n4">Start | End | Interval</p>

                    <input type="number" id="start" name="x-set"
                        class="form-control d-inline-block bg-transparent x-set border-dark" value="-10">
                    <input type="number" id="end" name="x-set"
                        class="form-control d-inline-block bg-transparent x-set border-dark" value="10">
                    <input type="number" id="interval" name="x-set"
                        class="form-control d-inline-block bg-transparent x-set border-dark" value="1">
                    <br>
                    <label for="eq" class="form-label mt-4">Enter an equation:</label>
                    <input type="text" class="bg-transparent border-dark form-control " id="eq"
                        value="4 * sin(x) + 5 * cos(x/2)" />
                    <input type="submit" value="Draw" class="btn btn-outline-dark mt-3" />
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 overflow-scroll">
                <div id="plot"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">`
                <div class="box">
                    <p>
                        Used plot library: <a href=" https://plot.ly/javascript/">Plotly </a> </p>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js">
    </script>

</body>

</html>