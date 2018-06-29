<?php include 'database.php'; ?>
<?php
$quary= "SELECT FROM shouts";
$shouts = mysqli_query($con ,$quary)

?>
<!DOCTYPE html>
<html>
<head>
	<title>Shout It Loud!</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="container">
		<header>
			<h1>Shout IT! Shoutbox</h1>
		</header>
		<div id="shouts">
			<ul>
				<?php while ($row=mysqli_fetch_accoc($shouts)) : ?>
				
				<li class="shout">
				 <span>Time - chandu - Hi this is a  big shout </span>
				
				</li>	
				<?php endwhile; ?>
			</ul>
			
		</div>
		<div id="input">
			<form method="post" action="process.php">
				<input type="text" name="user" placeholder="Enter your name">
				<input type="text" name="message" placeholder="Enter a message">
				<br>
				<input class="shout-btn" type="submit" name="submit" value="Shout It">
			</form>
		</div>
		
	</div>


</body>
</html>
