<?php
$conn = mysqli_connect("localhost","root","","KTI");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
    
}

function update($data){
	$id = $data["id"];
	$username = htmlspecialchars($data["username"]);
    $nickname = htmlspecialchars($data["nickname"]);
	global $conn;
 	$query = "UPDATE Users SET 
	 		username = '$username',
 			nickname = '$nickname'
 			WHERE idusers = $id
 		";
    mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);	
}
function signin($data){
	global $conn;
	$username = strtolower(stripslashes($data["username"]));
    $nickname = stripslashes($data["nickname"]);
	$password = mysqli_real_escape_string($conn, $data["user-password"]);
	$password2 = mysqli_real_escape_string($conn, $data["user-password-confirm"]);
	$result = mysqli_query($conn, "SELECT username FROM Users WHERE username = '$username'");
	if (mysqli_fetch_assoc(($result))) {
		echo "<script>alert('Username Already Used!');</script>";
		return false;
	}
	if($password !== $password2){
		echo "
			<script>alert('Password Confirmation did'nt Match!!');</script>
		";
		return false;
	}
	
	$password = password_hash($password, PASSWORD_DEFAULT);
	 
	mysqli_query($conn, "INSERT INTO Users VALUES (not null,
	'$username', '$password','$nickname')");
	return mysqli_affected_rows($conn);
}

function uploadArticle($data){
	$email = htmlspecialchars($data["email"]);
	$writer = htmlspecialchars($data["writer"]);
	$theme = htmlspecialchars($data["theme"]);
	$title = htmlspecialchars($data["title"]);
	$content = htmlspecialchars($data["content"]);
	$thumb = uploadThumb();
	global $conn;
 	$query = "INSERT INTO Article 
			VALUES 
			(not null,'$theme','$title','$thumb', '$content' ,'$writer', '$email')";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
function uploadThumb(){
	
	$namaFile = $_FILES['thumb']['name'];
	$ukuranFile = $_FILES['thumb']['size'];
	$error = $_FILES['thumb']['error'];
	$tmpName = $_FILES['thumb']['tmp_name'];
	$typeFile = $_FILES['thumb']['type'];
	$ekstensiValid = ['image/jpg','image/jpeg','image/png'];
	 
	if(!in_array($typeFile, $ekstensiValid)){
		echo "
		<script>
			alert('Not an Image');
		</script>
		";
		return false;
	}
	$namaBaru = uniqid();
	$namaBaru .='.';
	$namaBaru .= end(explode('/', $typeFile));

	if(!move_uploaded_file($tmpName, '../../article/img/'. $namaBaru)){
	    return false;
	}
	return $namaBaru;


}

function uploadEbook($data){
	$email = htmlspecialchars($data["email"]);
	$writer = htmlspecialchars($data["writer"]);
	$theme = htmlspecialchars($data["theme"]);
	$title = htmlspecialchars($data["title"]);
	$content = uploadEbookFile();
	$thumb = uploadThumbEbook();
	global $conn;
 	$query = "INSERT INTO Ebook 
			VALUES 
			(not null,'$theme','$title','$thumb', '$content' ,'$writer', '$email')";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
function uploadThumbEbook(){
	
	$namaFile = $_FILES['thumb']['name'];
	$ukuranFile = $_FILES['thumb']['size'];
	$error = $_FILES['thumb']['error'];
	$tmpName = $_FILES['thumb']['tmp_name'];
	$typeFile = $_FILES['thumb']['type'];
	$ekstensiValid = ['image/jpg','image/jpeg','image/png'];
	 
	if(!in_array($typeFile, $ekstensiValid)){
		echo "
		<script>
			alert('Not an Image');
		</script>
		";
		return false;
	}
	$namaBaru = uniqid();
	$namaBaru .='.';
	$namaBaru .= end(explode('/', $typeFile));

	if(!move_uploaded_file($tmpName, '../../e-book/img/'. $namaBaru)){
	    return false;
	}
	return $namaBaru;


}
function uploadEbookFile(){
	
	$namaFile = $_FILES['ebook']['name'];
	$ukuranFile = $_FILES['ebook']['size'];
	$error = $_FILES['ebook']['error'];
	$tmpName = $_FILES['ebook']['tmp_name'];
	$typeFile = $_FILES['ebook']['type'];
	$ekstensiValid = ['application/pdf'];
	 
	if(!in_array($typeFile, $ekstensiValid)){
		echo "
		<script>
			alert('Not a PDF File');
		</script>
		";
		return false;
	}
	$namaBaru = uniqid();
	$namaBaru .='.';
	$namaBaru .= end(explode('/', $typeFile));

	if(!move_uploaded_file($tmpName, '../../e-book/files/'. $namaBaru)){
	    return false;
	}
	return $namaBaru;


}

?>