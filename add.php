<?php 
	include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="theme-style" rel="stylesheet" href="css/add.css">
	<title>Add Script</title>
</head>
<body style="background-image: url('image/back.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">

<div class="container mx-auto rounded pl-5 pr-5 pt-5 pb-5 ml-5 mr-5 mb-5 mt-5" style="background-color: white; opacity: 60%;"><br>
<?php
if( isset($_POST['Submit'])){
	$author = mysqli_real_escape_string($mysqli, $_POST['author']);
	$quote = mysqli_real_escape_string($mysqli, $_POST['quote']);


	if( empty($author) || empty($quote) ){

		if(empty($author)){
			echo "<font color='red'> Author field is empty. </font><br/>";
		}
		if(empty($quote)){
			echo "<font color='red'> Quotes field is empty. </font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a></br></br>";

	} else {

		$result = mysqli_query($mysqli, "INSERT INTO fam_quotes(author, quote) VALUES ('$author', '$quote')");
		echo "<font color='green'> Data Added Successfully.";
		echo "<br/><a href='indexfq.php'> View Result </a>";
	}


}
?>

</div>
	
</body>
</html>