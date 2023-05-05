

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
Search Package <input type="text" name="search"><br>

<input type="submit" name="sub" value="Search">
</form>
<?php
if(isset($_POST['sub']))
{
	
	$place=$_POST['search'];
	echo "<br>";
	
	$con=new mysqli("localhost","root","","iwtjune2020");
	$result=$con->query("select * from package_details where place='$place'");
	while($raw=$result->fetch_assoc())
	{
		echo "<h1 id='title'>".$raw['package_name']."</h1>";
	echo "<table>";
	
	echo "<tr><td>Package Name:-</td><td>".$raw['package_name']."</td></tr>";
	echo "<tr><td>Amount</td><td>".$raw['amount']."</td></tr>";
	echo "<tr><td>Description</td><td>".$raw['description']."</td></tr>";
	echo "</table>";
	}
	
	
	
	
	
}?>
<div class="profile_para">
This is the Profile Page
</div>
</body>
</html>