<?php
$con = mysqli_connect("localhost", "root", "", "charging");

$vid = $_GET['vid'];

$query = "UPDATE booking SET verify='yes' where id='$vid'";

$data = mysqli_query($con, $query);

if ($data) {
    echo "<script> history.back() </script>";
}
?>