<?php
error_reporting(0);
session_start();

$email = $_POST['email'];
$pass = $_POST['pass'];
$con = mysqli_connect('localhost', 'root', '', 'charging');

$query = "SELECT * FROM register where email='$email' and pass='$pass'";
$data = mysqli_query($con, $query);

$result = mysqli_fetch_assoc($data);

$isData = mysqli_num_rows($data);

$_SESSION['email'] = $result['email'];
$_SESSION['pass'] = $result['pass'];

if ($isData) {
	$_SESSION['fname'] = $result['fname'];
	$_SESSION['lname'] = $result['lname'];
	$_SESSION['idcard'] = $result['idcard'];
	$_SESSION['phno'] = $result['phno'];

	$_SESSION['userLogin'] = 1;
}

if ($_SESSION['userLogin'] == 0) {
	echo "<script>
	alert('wrong password')
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
	<title>stations</title>
	<link rel="stylesheet" href="css/style1.css">
</head>

<body>
	<div class="container">
		<nav class="navbar">
			<li class="list_item">
				
				<a href="#" class="profile" onclick="showProfileBox()"><?php echo $_SESSION['fname']; ?></a>
			</li>
			<div class="profile_box" id="profile">
				<div class="close_btn" onclick="hideProfileBox()">✕</div>
				<?php echo '<img src="' . $_SESSION['idcard'] . '" alt="No Profile">'; ?>
				<a href="logout.php" class="logout_btn">Logout</a>
			</div>
		</nav>
		<div class="box">
			<h1 class="title">
				Station-1
			</h1>
			<img src="res/1.jpg"><br>
			<a href="station1.php" class="link_btn">Visit</a>
			<a href="map.html" class="link_btn">Map</a>
		</div>
		<div class="box">
			<h1 class="title">
				Station-2
			</h1>
			<img src="res/1.jpg"><br>
			<a href="station2.php" class="link_btn">Visit</a>
			<a href="map.html" class="link_btn">Map</a>
		</div>
		<div class="box">
			<h1 class="title">
				Station-3
			</h1>
			<img src="res/1.jpg"><br>
			<a href="station3.php" class="link_btn">Visit</a>
			<a href="map.html" class="link_btn">Map</a>
		</div>
	</div>
	<script>
		var profile = document.getElementById("profile");

		function showProfileBox() {
			profile.style.height = "370px";
		}

		function hideProfileBox() {
			profile.style.height = "0px";
		}
	</script>
</body>

</html>