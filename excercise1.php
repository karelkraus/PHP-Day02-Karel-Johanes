<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php 
	$viewer = getenv( "HTTP_USER_AGENT" );
	$style;
	if(preg_match('/Chrome/i' , "$viewer"))
	{
	$style = 'chrome.css';
	echo $style;
	echo "<link rel='stylesheet' type='text/css' href='$style'>";
	}
	else  if( preg_match( "/Mozilla/i", "$viewer" ))
	{
	$style = "mozilla.css" ;
	echo $style;
	echo "<link rel='stylesheet' type='text/css' href='$style'>";
	}

	 ?>
	 
</head>
<body>
	<h1>Hello there</h1>
</body>
</html>