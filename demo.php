<?php 
require "inc/Form.php" ; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>demo form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/css/journal.bootstrap.min.css">
</head>
<body>
<form>
	<?=Form::input([
		"id" =>"username" ,
		"name"=>"username" ,
		"value"=>"joe doe"
]);?>
	
	<?=Form::submit();?>

</form>

</body>
</html>