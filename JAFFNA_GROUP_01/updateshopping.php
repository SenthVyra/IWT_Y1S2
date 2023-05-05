<?php
$user=$_POST['u'];
if(isset($_POST['delcart']))
{
    
    $order=$_POST['orderid'];
echo $order;
    $conn=new mysqli("localhost","root","","iwtproj");
    $conn->query("delete from order_details where order_id=$order");
    $conn->close();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <img align = "left" src="images/22.jpg" alt="logo" width="362" height="294">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style01.css">
<body>

<div class="header">
  <h1>I N F O T R V E L</h1>
  <p><b>life is live</b></p>
</div>

<div class="navbar">
  <a href="home.php">HOME</a>
  <a href="login.php">LOGIN</a>
  <a href="registration.php">REGISTRATION</a>
  <a href="profile.php">PROFILE</a>
  <a href="about.html">ABOUT</a>
  
</div>

  <div class="side">
    <h2>Tourism</h2>
    <div style="height:200px;"><img src="images/23.jpg" alt="img" width="280" height="160"></div>
    <p>Tourism is travel for pleasure or business; also the theory and practice of touring, the business of attracting, accommodating, and entertaining tourists, and the business of operating tours..</p>
    <IMG SRC="IMAGES/25.jpg" height="100" width="325" >
    <img src="images/29.jpg" height="100" width="325">
    <img src="images/31" height="100" width="325">
  </div>
  <div class="main">
  <h1>Shooping Cart Details</h1>
  <?php

echo "<br>";
$con=new mysqli("localhost","root","","iwtproj");
$result=$con->query("select * from order_details where username='$user'");
echo "<table>";
while($raw=$result->fetch_assoc())
{
    $x=$raw['package_id'];
    $oid= $raw['order_id'];
$result2=$con->query("select * from package_details where package_id=$x");
$raw2=$result2->fetch_assoc();
echo "<tr><td>Package Name:-</td><td>".$raw2['package_name']."</td></tr>";
echo "<tr><td>Amount</td><td>".$raw2['amount']."</td></tr>";
echo "<tr><td>Description</td><td>".$raw2['description']."</td></tr>";
?>

<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
<input type="hidden" name="orderid" value="<?php echo $oid;?>">
<input type="submit" name="delcart" value="delete">

</form>

<form method="post" action="updatecartitem.php">
<input type="hidden" value="<?php echo $oid;?>">
<input type="submit" name="updatecart" value="update">

</form>

<?php
}

echo "</table>";
?>
    </div>
    

<div class="footer">
  <h2>FOLLOW US</h2>
  <div>
  <a href="https://www.facebook.com/"><img src="images/19" height="50" width="50"></a>
  <a href="https://www.twitter.com/"><img src="images/20" height="50" width="50"></a>
  <a href="https://www.instagram.com/"><img src="images/27.png" height="50" width="50"></a>
  <img src="images/34.png" height="50"  width="50">
</div>

</body>
</html>
