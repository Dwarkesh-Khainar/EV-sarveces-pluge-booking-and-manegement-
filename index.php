<?php
    session_start();
    error_reporting(0);
    $_SESSION["adminLogin"]=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Charging Station</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        nav {
	background-color: skyblue;
	color: #fff;
	padding: 25px;
}

nav ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

nav li {
	display: inline-block;
	margin-right: 20px;
}

nav a {
	color: black;
	text-decoration: none;
	font-size: large;
}

.content {
	margin: 50px;
}


    </style>
</head>
<body>
    <nav>
		<ul>
			<li><a href="../index.html">Home</a></li>
			<li><a href="../about.html">About</a></li>
			<li><a href="../contact.html">Contact</a></li>
            <li><a href="../user.html">login</a></li>
		</ul>
	</nav>

   <div class="container">
        <div class="heading"><h1>Online Charging Station</h1></div>
        <div class="form">
            <h4>Admin Login</h4>
            <form action="admin-panel.php" method="POST">
                <label class="label">Admin Id:</label>
                <input type="text" name="email" class="input" placeholder="Enter admin id" required>

                <label class="label">Password:</label>
                <input type="password" name="pass" class="input" placeholder="Enter Password" required>

                <button class="button" name="login">Login</button>
            </form>
            <p class="error"><?php echo $_SESSION['error']; ?></p>
        </div>
   </div>
</body>
</html>