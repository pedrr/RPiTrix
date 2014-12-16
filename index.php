<?php 
// In PHP kleiner als 4.1.0 sollten Sie $HTTP_POST_FILES anstatt 
// $_FILES verwenden.

$uploaddir = '/var/www/trix/sounds/';

switch (
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if (0) {
	echo '<pre>';
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
	    echo "Datei ist valide und wurde erfolgreich hochgeladen.\n";
	} else {
	    echo "Möglicherweise eine Dateiupload-Attacke!\n";
	}
	
	echo 'Weitere Debugging Informationen:';
	print_r($_FILES);
	
	print "</pre>";
}
?>


<html>
<head>
	<link href="./css/bootstrap.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>

</head>

<body>
<div class="container">
<div class="row">
<div class="span12">
	<div class="page-header">
	 
		<h1>Trix Control Panel</h1>

	</div>
</div>
</div>
		
	<div class="row">
		<div class="span12">
		<div class="well">
		<form class="form-inline" role="form">
		 <div class="row">
		    <div class="col-sm-2">FileGPIO1</div>
		    <input type="file" id="FileGPIO1" name="FileGPIO1" class="col-sm-8">
		    <button type="submit" class="btn btn-default col-sm-2">Upload1</button>
		 </div> 
		 <div class="row">
		    <div class="col-sm-2">FileGPIO2</div>
		    <input type="file" id="FileGPIO2" name="FileGPIO2" class="col-sm-8">
		    <button type="submit" class="btn btn-default col-sm-2">Upload2</button>
		 </div>
		 <div class="row">
            <div class="col-sm-2">FileGPIO3</div>
		    <input type="file" id="FileGPIO3" name="FileGPIO3" class="col-sm-8">
		    <button type="submit" class="btn btn-default col-sm-2">Upload3</button>
		  </div>
		  <div class="row">
  		    <div class="col-sm-2">FileGPIO4</div>
		    <input type="file" id="FileGPIO4" name="FileGPIO4" class="col-sm-8">
		    <button type="submit" class="btn btn-default col-sm-2">Upload4</button>
		</div>
		 <div class="row">
   
		    <div class="col-sm-2">FileGPIO5</div>
		    <input type="file" id="FileGPIO5" name="FileGPIO5" class="col-sm-8">
		    <button type="submit" class="btn btn-default col-sm-2">Upload5</button>
		 </div>   
		</form>	
		</div>
		</div>
	</div>
	<footer>
	<p>&copy; Simon Scharschinger</p>
	</footer>
</div>

</body>

</html>
