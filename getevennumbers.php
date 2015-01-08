<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/htl4/loose/dtd">
<html>
	<head>
		<title>Get Even Numbers!</title>
	</head>
	<body>
		<form action="index2.php" method="POST">
			<p>Enter any number and I will show you cool stuff!</p>
			<input name="nvariable" type="text"/>
			<button type="submit">Submit</button>
		</form>
		<?php
			if(isset($_REQUEST['nvariable'])) {
				echo '<br><br>';
				echo 'Your number was: '.$_REQUEST["nvariable"];
				echo '<br>'.'Counting by twos to your number: ';

				for($i = 2; $i <= $_REQUEST["nvariable"]; $i += 2) {

				echo $i.' ';
				}
			}
		?><!--?php-->
	</body>
</html>