<?php
		if(isset($_POST["submit"]))
		{	
			$name= $_POST["name"];
			echo $name;
		}
		else $name=" ";

	 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 100px">
			<legend>NAME</legend>
			<input type="text" name="name" value="<?php echo $name ?>">
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>	

</body>
</html>