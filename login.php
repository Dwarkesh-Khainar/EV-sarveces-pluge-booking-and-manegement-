<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../style1.css">
</head>

<body><nav>
		<ul>
			<li><a href="../index.html">Home</a></li>
			<li><a href="../about.html">About</a></li>
			<li><a href="../contact.html">Contact</a></li>
            <li><a href="../user.html">login</a></li>
		</ul>
	</nav>
    
    <div class="container">
        <div class="heading">
            <h1>Ev charging station</h1>
        </div>
        <div class="form">
            <h4>Login Form</h4>
            <form action="visiable.php" method="post">
                <label class="label">User Id:</label>
                <input type="text" name="email" id="" class="input" placeholder="Enter User id" required>

                <label class="label">Password:</label>
                <input type="password" name="pass" id="" class="input" placeholder="Enter Password" required>

                <button class="button">Login</button>
                <span class="link1">New user ? <a href="registration.php">Register here</a></span>
            </form>
        </div>
    </div>
</body>

</html>