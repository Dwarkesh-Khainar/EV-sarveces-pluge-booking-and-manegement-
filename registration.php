<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../style1.css">
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
        <div class="heading">
            <h1>Ev charging station</h1>
        </div>
        <div class="form">
            <h4>Registraton Form</h4>
            <form action="data.php" method="post" enctype="multipart/form-data">
                <label class="label">Firstname:</label>
                <input type="text" name="fname" id="" class="input" placeholder=" Enter First Name" required>

                <label class="label">Lastname:</label>
                <input type="text" name="lname" id="" class="input" placeholder="Enter Last Name" required>

                <label class="label">Email id:</label>
                <input type="email" name="email" id="" class="input" placeholder="Enter Email id" required>

                <label class="label">Choose ID Proof:</label>
                <select name="idname" id="myselect" class="input" onchange="idproof()" required>
                    <option value="Aadhar">Aadhar</option>
                    <option value="Pan Card">Pan Card</option>
                    <option value="Voter Card">Voter Card</option>
                    <option value="Passport">Passport</option>
                </select>
                <label class="label" id="myid">Aadhar:</label>
                <input type="file" name="idcard" id="myfile" class="input" required>

                <label class="label">Date of Birth:</label>
                <input type="date" name="dob" id="" class="input" required>

                <label class="label">Gender:</label>
                <input type="radio" value="male" name="gender" id="" class="radio" required>Male
                <input type="radio" value="female" name="gender" id="" class="radio" required>Female

                <label class="label">Phone Number:</label>
                <input type="text" name="phno" id="" class="input" placeholder="Enter Phone Number" required>

                <label class="label">Address:</label>
                <input type="text" name="address" id="" class="input" placeholder="Enter Address" required>

                <label class="label">Password:</label>
                <input type="password" name="pass" id="" class="input" placeholder="Enter Password" required>

                <label class="label">Confirm Password:</label>
                <input type="password" name="cpass" id="" class="input" placeholder="Re-Enter Password" required>

                <button class="button">Register</button>
                <span class="link1">already have account ? <a href="login.php">Login here</a></span>
            </form>
        </div>
    </div>
    <script>
        function idproof() {
            document.getElementById("myfile").style.display = "inline";
            document.getElementById("myselect").style.display = "block"
            var x = document.getElementById("myselect").value;
            document.getElementById("myid").innerHTML = x + ":";
        }
    </script>
</body>

</html>