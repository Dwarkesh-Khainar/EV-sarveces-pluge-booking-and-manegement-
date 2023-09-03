<?php

error_reporting(0);
session_start();

$email = $_POST['email'];
$pass = $_POST['pass'];
$con = mysqli_connect('localhost', 'root', '', 'charging');

$query = "SELECT * FROM admin where email='$email' and password='$pass'";
$data = mysqli_query($con, $query);

$result = mysqli_fetch_assoc($data);

$isData = mysqli_num_rows($data);

if ($isData) {
    $_SESSION['adminLogin'] = 1;
}

if ($_SESSION['adminLogin'] == 0) {
    echo "<script>
        alert('wrong password')
        location.href='index.php'
        </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Charging Station</title>
    <link rel="stylesheet" href="css/style.css">
</script>
</head>

<body>
    <div class="container">
        <div class="header">
            <span class="menu-bar" id="show" onclick="showMenu()">&#9776;</span>
            <span class="menu-bar" id="hide" onclick="hideMenu()">&#9776;</span>
            <span class="logo">Charging Station</span>
            <span class="profile" onclick="showProfile()"><img src="../res/user3.jpg" alt=""><label><?php echo $_SESSION['name']; ?></label></span>
        </div>
        <?php include 'menu.php'; ?>
        <div id="profile-panel">
            <i class="fa-solid fa-circle-xmark" onclick="hidePanel()">✕</i>
            <div class="dp"><img src="../res/user3.jpg" alt=""></div>
            <div class="info">
                <h2><?php echo $_SESSION['name']; ?></h2>
                <h5>Admin</h5>
            </div>
            <div class="link"><a href="admin-logout.php" class="del"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></div>
        </div>
        <div id="main">
            <div class="info-box" id="box1">
                <h1><?php echo $_SESSION["total_voters"]; ?></h1>
                <h3>Total Users</h3>
                <a href="users.php">More Info <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
            <div class="info-box" id="box2">
                <h1><?php echo $_SESSION["total_cand"]; ?></h1>
                <h3>Battery</h3>
                <a href="candidates.php">More Info <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
            <div class="info-box" id="box3">
                <h1><?php echo $_SESSION["total_position"]; ?></h1>
                <h3>No Of station</h3>
                <a href="position.php">More Info <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
            <div class="info-box" id="box4">
                <h1><?php echo $voter_voted; ?></h1>
                <h3>Booking request & Booked</h3>
                <a href="station.php">More Info <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>