<?php
session_start();
error_reporting(0);
if($_SESSION['adminLogin']!=1)
{
    header("location:index.php");
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
    <style>
        .del,.edit,.verify
        {
            display: block;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }
        .verify
        {
            background-color: royalblue;
        }
        td
        {
            padding: 1rem;
        }
    </style>
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
                <h2>SSVPS ADMIN</h2>
                <h5>Admin</h5>
            </div>
            <div class="link"><a href="admin-logout.php" class="del"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></div>
        </div>
        <div id="main">
        <div class="heading"><h2 style="background:royalblue;">Users</h2></div>   
        <table class="table">
               <thead>
                    <th>Name</th>
                    <th>Phone No</th>
                    <th>Vehicle Number</th>
                    <th>plugs</th>
                    <th>station</th>
                    <th>Booking Date</th>
                    <th>Visiting Date</th>
                    <th>Action</th>               
               </thead>
               <tbody>
                      <?php
                      
                      $con=mysqli_connect('localhost','root','','charging');
                  
                      $query="SELECT * FROM booking WHERE station='station1'";

                      $color="red";
                  
                      $data=mysqli_query($con,$query);
                    
                      while($result=mysqli_fetch_assoc($data))
                      {
                        if($result['verify']=="yes")
                        {
                            $verify="none";
                        }
                        else
                        {
                            $verify="block";
                        }
                        echo "<tr>
                        <td>".$result['fname']." ".$result['lname']."</td>
                        <td>".$result['mobile']."</td>
                        <td>".$result['carnum']."</td>
                        <td>".$result['plugs']."</td>
                        <td>".$result['station']."</td>
                        <td>".$result['cdate']."</td>
                        <td>".$result['vdate']."</td>
                        <td><a href='verify_booking.php?vid=$result[id]' style='display:$verify' class='del verify' onClick='return validconfirm()'><i class='fa-solid fa-check'></i> Booked Done</a>
                        <a href='booking-delete.php?id=$result[id]' class='del' onClick='return delconfirm()'><i class='fa-solid fa-trash-can'></i> Delete</a></td>
                        </tr>";
                      }
                      
                      ?>
               </tbody>
           </table>
    </div>
    <script src="../js/script.js"></script>
    <script>
        function delconfirm()
        {
            return confirm('Delete this user?');
        }

        function validconfirm()
        {
            return confirm('Validate this user?');
        }
    </script>
</body>
</html>