<?php	


	$emailError = "";
	$email = "";

	if(isset($_REQUEST['submit'])){
		if($_POST['email'] == null){
			$emailError = "invalid email";
		}else{
			$email = $_REQUEST['email'];
		}
	}


?>

<html>
<head>
	<title>Task 2 B</title>
</head>
<body>
	<form method="POST" action="">
        <fieldset>
            <legend>EMAIL</legend>
            <table>
			<tr>
				<td><input type="email" name="email" value="<?=$email?>"></td>
				<td><?=$emailError ?></td>
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