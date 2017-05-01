<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>Member system</title>
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	<div id="list">
		<div id="title">Login</div>
		<form action="login.function.php" method="post">
			<ul class="iems">
				<p>Username:</p><input type="text" name="username" required>
				<p>Password:</p><input type="password" name="password" required>
			</ul>
			<input type="submit" value="Login" style="width:120px; height:40px; border:2px #9999FF double; background-color:lightcyan;">
			
		</form>
		<br>
		<form action="register.php" method="post">
			<input type="submit" value="Creat Account" style="width:120px; height:40px; border:2px #9999FF double; background-color:lightcyan;">
		</form>
		<br>
	</div>
	</body>
</html>

