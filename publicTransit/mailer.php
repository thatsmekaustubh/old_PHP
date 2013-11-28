<?php
	$con=mysqli_connect("localhost","root","","pt_miniprj");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	$result = mysqli_query($con,"SELECT * FROM alertbuffer");

	while($row = mysqli_fetch_array($result))
	  {
	  echo $row['needid'] . " " . $row['status'];
	  echo "<br>";
	  }

	mysqli_close($con);
?>	
	<form method="POST" action="">
		<input type="hidden" name="mailc" value="<?php echo 'a'; ?>"/>
		<input type="submit" value="go" />
	</form>
