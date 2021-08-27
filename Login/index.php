<?php 

session_start();
require '../main-function/function.php';
if (isset($_SESSION["login"])) {
    echo "
			<script>
				document.location.href = 'test.html';
			</script>
		";
    exit;
}

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["user-password"];

    $result = mysqli_query($conn, "SELECT * FROM Users WHERE username = '$username'");
    if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["idusers"];
            echo "
			<script>
				document.location.href = '../Home/index.php';
			</script>
		";
            exit;
        }
    }
    $error = true;
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
    <title>Login</title>
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
                <h2>Login</h2>
            </div>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-md-6 login-box">
                <form method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control bg-transparent border-dark" placeholder="Username.."
                            id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="user-password" class="form-label">Password</label>
                        <input type="password" placeholder="Password..."
                            class="form-control bg-transparent border-dark " id="user-password" name="user-password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-outline-dark">Login</button>
                    <a href="../Sign-in/index.php" class="btn btn-outline-dark d-inline-block ms-2">Sign in</a>
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