<?php
    $con = mysqli_connect("localhost","root","","charging");

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $idname = $_POST["idname"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $phno = $_POST["phno"];
    $address = $_POST["address"];
    $pass = $_POST["pass"];

    $filename=$_FILES["idcard"]["name"];
    $tempname=$_FILES["idcard"]["tmp_name"];
    $folder="img/".$filename;
    move_uploaded_file($tempname,$folder);

    $query="INSERT INTO register(fname, lname, email, idname, idcard, dob, gender, phno, address, pass) VALUES ('$fname','$lname','$email','$idname','$folder','$dob','$gender','$phno','$address','$pass')";
    $data=mysqli_query($con,$query);
    
    

    if(!$data)
    {
        echo "<script>
        alert('Something went wrong!')
        </script>";
    }
    else{
        echo "<script>
        alert('Registration successful!')
        </script>";
    }
    echo "<script>
        history.back()
    </script>";
