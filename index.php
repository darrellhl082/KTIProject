<?php 
session_start();
if (!isset($_SESSION["login"]) AND !isset($_SESSION["id"])) {
	echo "<script>
				document.location.href = 'Login/index.php';
			</script>";
	exit;
} else {
    echo "<script>
				document.location.href = 'Home/index.php';
			</script>";
	exit;
}


?>