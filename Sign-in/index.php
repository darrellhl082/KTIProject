<?php 
require '../main-function/function.php';
if(isset($_POST["submit"])){
	if(signin($_POST) > 0){
		echo "
			<script>
				document.location.href = '../Login/index.php'
			</script>
		";
      
	} else {
		echo"	
        <script>
		    alert('Failed');
		</script>";
	}
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
    <title>Sign In</title>
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
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container mb-5">
        <div class="row mt-5 text-center">
            <div class="col-md-12">
                <h2>Sign In</h2>
            </div>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-md-6 signin-box">
                <form name="signin" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control bg-transparent border-dark" id="username"
                            name="username">
                    </div>
                    <div class="mb-3">
                        <label for="nickname" class="form-label">Nickname</label>
                        <input type="text" class="form-control bg-transparent border-dark" id="nickname"
                            name="nickname">
                    </div>
                    <div class="mb-3">
                        <label for="user-password" class="form-label">Password</label>
                        <input type="password" class="form-control bg-transparent border-dark" id="user-password"
                            name="user-password">
                    </div>
                    <div class="mb-3">
                        <label for="user-password-confirm" class="form-label ">Password
                            Confirmation</label>
                        <input type="password" class="form-control bg-transparent border-dark"
                            id="user-password-confirm" name="user-password-confirm">
                    </div>
                    <button name="submit" type="submit" id="submit" class="btn btn-outline-dark">Submit</button>
                </form>
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