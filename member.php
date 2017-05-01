<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>Member system</title>
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php
		echo '<h1>Welcome ' . (isset($_SESSION['username'])?$_SESSION['username']:'Dear') . '!</h1>';
		?>
		
		<br>
		<div id="main-image"><img src="Welcome-Sticky-Note.png" alt="welcome" width="280" height="160"></div>
		<br>
		<form action="modify.php" method="post">
			<input type="submit" value="Modify" style="width:120px; height:40px; border:2px #9999FF double; background-color:lightcyan;">
		</form>
		<br>
		<form action="logout.function.php" method='post'>
			<input type="submit" value="Logout" style="width:120px; height:40px; border:2px #9999FF double; background-color:lightcyan;">
		</form>
	</body>
</html>