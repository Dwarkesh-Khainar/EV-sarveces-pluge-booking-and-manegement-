<?php
$con = mysqli_connect("localhost", "root", "", "charging");
$query = "SELECT * FROM booking WHERE mobile='7276188378'";
$data = mysqli_query($con, $query);
$result = mysqli_fetch_assoc($data);
?>