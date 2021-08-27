<?php 
session_start();

if (!isset($_SESSION["login"]) AND !isset($_SESSION["id"])) {
	header("Location: ../Login/index.php");
	exit;
} 
require '../main-function/function.php';

if(isset($_POST["submit"])){
  
	if(update($_POST) >= 0){
		echo "
			<script>
			
				alert('Succes')
			</script>
		";
	} else {
		echo "	
			<script>
				alert('Failed');
				
			</script>";
		echo mysqli_error($conn);
	}
}
$id = $_SESSION['id'];
$user = query("SELECT * FROM Users WHERE idusers =$id ");
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
    <link rel="stylesheet" href="../Bootstrap/bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <!-- My Css -->
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
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
                        <a class="nav-link" aria-current="page" href="../Home/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container main">
        <div class="row">
            <div class="col-md-8 box">
                <h3 class="text-uppercase">Profile</h3>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-8 box">
                <form method="POST">
                    <?php foreach ($user as $key ) : ?>
                    <input type="hidden" name="id" value="<?php echo $key["idusers"] ?>">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control bg-transparent border-dark" id="username" name="username"
                            value="<?php echo $key["username"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nickname" class="form-label">Nickname</label>
                        <input type="text" class="form-control bg-transparent border-dark" id="nickname" name="nickname"
                            value="<?php echo $key["nickname"] ?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-outline-dark">Submit</button>
                    <?php endforeach ?>
                    <a href="../Logout/index.php" class="btn btn-outline-dark">Log Out</a>
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