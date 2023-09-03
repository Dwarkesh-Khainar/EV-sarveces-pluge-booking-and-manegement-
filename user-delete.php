<?php
$phone = $_GET['ph'];
$con = mysqli_connect('localhost', 'root', '', 'charging');
$query = "DELETE FROM register WHERE phno='$phone'";
$data = mysqli_query($con, $query);
if ($data) {
    echo "<script> history.back()</script>";
}
