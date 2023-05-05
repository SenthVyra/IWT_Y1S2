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


  <div class="main">
      <?php
      if(isset($_POST['sub']))
      {
        $pkname=$_POST['pik_name'];
        $pkamount=$_POST['pik_amt'];
        $pkplace=$_POST['pik_pls'];
        $pkdescription=$_POST['pik_desc'];
        $pkextraservices=$_POST['pik_ext'];
        $con=new mysqli("localhost","root","","iwtproj");
        $sql="insert into package_details(package_name,amount,place,description,extra_service) values('$pkname',$pkamount,'$pkplace','$pkdescription','$pkextraservices')";
        $con->query($sql);
        $con->close();
      }
      ?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table>
    <tr><td>Pakage name</td><td><input type="text" name="pik_name"></td></tr>
    <tr><td>Pakage amount</td><td><input type="text" name="pik_amt"></td></tr>
    <tr><td>Pakage place</td><td><input type="text" name="pik_pls"></td></tr>
    <tr><td>Pakage description</td><td><textarea name="pik_desc"></textarea></td></tr>
    <tr><td>Pakage extra services</td><td><textarea name="pik_ext"></textarea></td></tr>
    <tr><td></td><td><input type="submit" name="sub" value="add pakages"></textarea></td></tr>
    
    
</table>
</form>

<div class="footer">
  <h2>FOLLOW US</h2>
  <div padding: 14px 16px>
  <a href="https://www.facebook.com/"><img src="images/19" height="50" width="50"></a>
  <a href="https://www.twitter.com/"><img src="images/20" height="50" width="50"></a>
  <a href="https://www.instagram.com/"><img src="images/27.png" height="50" width="50"></a>
  <img src="images/34.png" height="50"  width="50">
</div>

</body>
</html>