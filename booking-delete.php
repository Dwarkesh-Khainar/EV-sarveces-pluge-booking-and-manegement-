<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost', 'root', '', 'charging');
$query = "DELETE FROM booking WHERE id='$id'";
$data = mysqli_query($con, $query);
if ($data) {
    echo "<script> history.back()</script>";
}