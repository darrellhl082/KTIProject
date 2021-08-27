<?php 
session_start();
require '../../../main-function/function.php';
if (!isset($_SESSION["login"]) AND !isset($_SESSION["id"])) {
	echo "<script>
				document.location.href = '../Login/index.php';
			</script>";
	exit;
} 
if (!$result){
	echo mysqli_error($conn);
}
$id = $_SESSION['id'];
$user = query("SELECT * FROM Users WHERE idusers =$id ");
if (!$result){
	echo mysqli_error($conn);
}
if(isset($_POST["submit"])){
	
	if(uploadEbook($_POST) > 0){
		echo "
			<script>
				alert('Succes');
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
    <link rel="stylesheet" href="../../../Bootstrap/bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <!-- My Css -->
    <link rel="stylesheet" href="style.css">
    <title>Upload E-Book</title>
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
                        <a class="nav-link" href="../../../Home/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../../Profile/index.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../../About/index.php">About</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container main justify-content-center align-items-center align-content-center p-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title">Upload E-Book</h1>
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
        <div class="row mt-5 text-black">
            <div class="col-md-8">
                <form name="uploadEbook" method="POST" enctype="multipart/form-data">
                    <?php foreach ($user as $key) :?>
                    <input type="hidden" id="writer" name="writer" value="<?php echo $key["nickname"] ?>">
                    <?php endforeach?>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control bg-transparent border-dark" id="email"
                            aria-describedby="emailHelp" name="email" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="theme" class="form-label">Select The theme</label>
                        <select class="form-select form-select-sm bg-transparent border-dark" name="theme" id="theme"
                            aria-label=".form-select-sm example" required>
                            <option selected>Select theme</option>
                            <option value="Physics">Physics</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Biology">Biology</option>
                            <option value="Math">Math</option>
                            <option value="Economy">Economy</option>
                            <option value="Geography">Geography</option>
                            <option value="History">History</option>
                            <option value="Islamic">Islamic</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Upload Thumbnail</label>
                        <input class="form-control bg-transparent border-dark" type="file" accept="image/*" id="thumb"
                            name="thumb" required>
                    </div>
                    <div class="mb-3">
                        <label for="title" name="title" class="form-label">Title</label>
                        <input type="text" class="form-control bg-transparent border-dark" id="title" name="title"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="ebook" class="form-label">Upload E-Book</label>
                        <input class="form-control bg-transparent border-dark" type="file" accept="application/pdf"
                            id="ebook" name="ebook" required>
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn btn-outline-dark">Submit</button>
                </form>
            </div>

        </div>
    </div>



    <!-- Jquery -->
    <script src="../../../Js/Jquery/jquery-3.6.0.min.js"></script>
    <!-- Bootrap js -->
    <script src="../../../Bootstrap/bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <!-- My Script -->
    <script src="script.js"></script>


</body>

</html>