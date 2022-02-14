<?php	


	$nameError = "";
	$name = "";

	if(isset($_REQUEST['submit'])){
		if($_POST['name'] == null){
			$nameError = "invalid name";
		}else{
			$name = $_REQUEST['name'];
		}
	}


?>

<html>
<head>
	<title>Task 1 C</title>
</head>
<body>
	<form method="POST" action="">
        <fieldset>
            <legend>NAME</legend>
            <table>
			<tr>
				<td><input type="text" name="name" value="<?=$name?>"></td>
				<td><?=$nameError ?></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		    </table>
        </fieldset>
		
	</form>
</body>
</html>