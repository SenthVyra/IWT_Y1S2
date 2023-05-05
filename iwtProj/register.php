
<?php
if(isset($_POST['sub']))
{
	$u=$_POST['uname'];
	$p=$_POST['psw'];
	$con=new mysqli("localhost","root","","iwtjune2020");
	$con2=new mysqli("localhost","root","","iwt2");
	
	$con->query("insert into user_details(username,password) values('$u','$p')");
	$con2->query("insert into test2(id,name) values(1,'Hello')");
	$con->close();
	$con2->close();
}
?>
<html>
<head>
<link rel="stylesheet" href="css/top_styles.css">
<link rel="stylesheet" href="css/profile_styles.css">
</head>

<body>
<!-- Header will be here -->
<div class="header_logo">
Header
</div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
USER NAME <input type="text" name="uname"><br>
PASSWORD <input type="password" name="psw"><br>
<input type="submit" name="sub" value="Register">
</form>
<div class="profile_para">
This is the Profile Page
</div>
</body>
</html>