<?php
require_once 'config.php';

if(isset($_POST["username"])&&isset($_POST["password"])){
	$username = $_POST["username"];
	$password = $_POST["password"];

	try{
		$stmt = $conn->prepare("SELECT * FROM user where username = :username and password = :password ;");
		$stmt->execute(array('username' => $username , 'password' => $password));

		// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$rows = $stmt->fetchAll();
		if(count($rows) > 0){
			// login successfully
			$_SESSION['username'] = $username;
			header('Location: member.php');
		}
		else{
			// login failed
			echo "<script>alert('Error: Invalid ID or password!'); window.location.assign('index.php');</script>";
		}
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
}
else{
	echo "<script>alert('Error: Please enter username and password!'); window.location.assign('index.php');</script>";
}
?>