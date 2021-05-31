<?php


$phrase = $_POST['phrase'];


$phrase = strtolower($phrase);

$phrase = str_split($phrase);


foreach ($phrase as $character)

{

	$character = $character . ".gif";
	if (file_exists($character) == 1)
	{
		$results .= "<img src=$character height=72>";
	}
	else
	{

	}
}


?>	

<html>
	<head>
		<title>Text - SignLanguage Transalotor </title>
	</head>
	<body>
		<form method=post>
			<input type=text name=phrase>
			<input type=submit name=submit value=submit>
		</form>
			
		<p><?=$results?>
	</body>
</html>