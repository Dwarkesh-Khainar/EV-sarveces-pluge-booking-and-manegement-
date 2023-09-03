<?php
session_start();
error_reporting(0);
if ($_SESSION['userLogin'] == 0) {
	echo "<script>
	alert('Access Denied!!!')
	location.href='login.php'
	</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Stations1</title>
	<link rel="stylesheet" href="css/style1.css">
</head>
<body>
	<div class="container">
	<nav class="navbar">
			<li class="list_item">
				<?php echo '<img src="' . $_SESSION['idcard'] . '" alt="No Profile">'; ?>
				<a href="#" class="profile" onclick="showProfileBox()"><?php echo $_SESSION['fname']; ?></a>
			</li>
			<div class="profile_box" id="profile">
				<div class="close_btn" onclick="hideProfileBox()">✕</div>
				<?php echo '<img src="' . $_SESSION['idcard'] . '" alt="No Profile">'; ?>
				<a href="logout.php" class="logout_btn">Logout</a>
			</div>
		</nav>
        <div class="part">
        <h1 class="plug_title">AC Plug</h1>
		<div class="box">
			<h1 class="title">
				Plug-1
			</h1>
			<img src="res/plug.jpg"><br>
			<a href="book.php" class="link_btn">Book</a>
		</div>
		<div class="box">
			<h1 class="title">
				Plug-2
			</h1>
			<img src="res/plug.jpg"><br>
			<a href="book.php" class="link_btn">Book</a>
		</div>
		<div class="box">
			<h1 class="title">
				Plug-3
			</h1>
			<img src="res/plug.jpg"><br>
			<a href="book.php" class="link_btn">Book</a>
		</div>
        </div>

        <div class="part">
        <h1 class="plug_title">DC Plug</h1>
		<div class="box">
			<h1 class="title">
				Plug-1
			</h1>
			<img src="res/plug.jpg"><br>
			<a href="book.php" class="link_btn">Book</a>
		</div>
		<div class="box">
			<h1 class="title">
				Plug-2
			</h1>
			<img src="res/plug.jpg"><br>
			<a href="book.php" class="link_btn">Book</a>
		</div>
		<div class="box">
			<h1 class="title">
				Plug-3
			</h1>
			<img src="res/plug.jpg"><br>
			<a href="book.php" class="link_btn">Book</a>
		</div>
        </div>
	</div>
	<script>
		var profile = document.getElementById("profile");

		function showProfileBox()
		{
			profile.style.height="370px";
		}
		function hideProfileBox()
		{
			profile.style.height="0px";
		}
	</script>
</body>
</html>