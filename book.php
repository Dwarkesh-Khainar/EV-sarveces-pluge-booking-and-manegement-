<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="heading">
            <h1>Ev charging station</h1>
        </div>
        <div class="form" id="booked">
            <h4>Book Plug</h4>
            <form method="post" action="#">

                <label class="label">Visiting Date and Time:-</label>
                <input type="datetime-local" class="input" name="vdate" required>

                <label class="label">Car number:-</label>
                <input type="text" name="car_number" class="input" required>

                <input type="submit" class="button" name="submit">
            </form>
        </div>
        <h2 id="msg" style="text-align:center; color:red; display:none;">This Plug is already booked!</h2>
    </div>
</body>

</html>
<?php
session_start();
error_reporting(0);

$isBooked = 0;

$plugs = $_GET['plugs'];
$station = $_GET['station'];

date_default_timezone_set("asia/kolkata");

$cdate = date("y-m-d h:i");

$con = mysqli_connect("localhost", "root", "", "charging");
$book_query = "SELECT * FROM booking WHERE mobile='$_SESSION[phno]' and station='$station' and plugs='$plugs'";
$book_data = mysqli_query($con, $book_query);
$book_result = mysqli_fetch_assoc($book_data);

$isBooking = mysqli_num_rows($book_data);

$curtime = strtotime($cdate);
$endtime = strtotime($book_result['vdate']);
$com_time = $endtime-$curtime;
echo "<script>
        var booked = document.getElementById('booked')
        var msg = document.getElementById('msg')
        </script>";
if($isBooking){
    echo "<script>
        booked.style.display='none'
        msg.style.display='block'
        </script>";
}
if ($com_time<=0) {
    echo "<script>
        msg.style.display='none'
        booked.style.display='block'
        </script>";
}



if (isset($_POST['submit'])) {
    error_reporting(0);

    $plugs = $_GET['plugs'];
    $station = $_GET['station'];

    date_default_timezone_set("asia/kolkata");

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $phno = $_SESSION['phno'];

    $name = $fname . " " . $lname;
    $vdate = $_POST['vdate'];
    $carnum = $_POST['car_number'];
    $cdate = date("y-m-d h:i");

    $query = "INSERT INTO booking(fname, mobile, carnum, plugs, station, cdate, vdate) VALUES ('$name','$phno','$carnum','$plugs','$station','$cdate','$vdate')";
    $data = mysqli_query($con, $query);

    if ($data) {
        echo "<script>
        alert('Booking your plug successfully!')
        history.back()
        </script>";
    }
}
?>