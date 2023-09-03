<?php

$fn  =$_GET['fn'];
$ln  =$_GET['ln'];
$ph  =$_GET['ph'];
$ad  =$_GET['ad'];
$em = $_GET['em'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Charging Station</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
   <div class="container">
        <div class="heading"><h1>Online Charging Station</h1></div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form">
                <h4>User Information Update</h4>
                <label class="label">Firstname:</label>
                <input type="text" name="fname" id="" class="input" value="<?php echo $fn; ?>">

                <label class="label">Lastname:</label>
                <input type="text" name="lname" id="" class="input" value="<?php echo $ln; ?>">

                <label class="label">Phone Number:</label>
                <input type="text" name="phone" class="input" value="<?php echo $ph; ?>">

                <label class="label">Email ID:</label>
                <input type="text" name="email" class="input" value="<?php echo $em; ?>">

                <label class="label">Address:</label>
                <input type="text" name="address" class="input" value="<?php echo $ad; ?>">

                <button class="button" name="update">Update</button>
            </div>
        </form>
   </div> 

   <?php
   
    if(isset($_POST['update']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $idnum=$_POST['idnum'];
        $phone=$_POST['phone'];
        $con=mysqli_connect("localhost","root","","charging");

        $query2="UPDATE register SET fname='$fname',lname='$lname',email='$email',phno='$phone',address='$address' WHERE phone='$ph'";
        $data2=mysqli_query($con,$query2);

        if($data2)
        {
            header("location:voters.php");
        }
    }
   
   ?>