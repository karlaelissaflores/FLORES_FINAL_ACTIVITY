<?php 

	include_once("config.php");

if( isset($_POST['update']))
{
			$id = mysqli_real_escape_string($mysqli, $_POST['id']);
			$author = mysqli_real_escape_string($mysqli, $_POST['author']);
			$quote = mysqli_real_escape_string($mysqli, $_POST['quotes']);
			

			if( empty($author) || empty($quote) ){

				if(empty($author)){
					echo "<font color='red'> Author field is empty. </font><br/>";
				}
				if(empty($quote)){
					echo "<font color='red'> Quotes field is empty. </font><br/>";
				}
				
				echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

			} else {

				$result = mysqli_query($mysqli, "UPDATE fam_quotes set author='$author', quote='$quote' WHERE id=$id");
				header("Location: indexfq.php");
				
			}

}
?>

<?php 

	$id = $_GET['id'];

	$result = mysqli_query($mysqli,"SELECT * from fam_quotes where id=$id");

	while($res = mysqli_fetch_array($result))
	{
		$author = $res['author'];
		$quote = $res['quote'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="wIDth=device-wIDth, initial-scale=1.0">
    <link id="theme-style" rel="stylesheet" href="css/edit.css">
	<title>Edit data</title>
</head>
	<body>
	<div class="card">
		<div class="container">
		  <div>
	<form action="edit.php" method="post" name="form1">	

		
		<table>
				<th><p><h3><label for="quote">Author</label></p></h3></th>
			<tr>
				<td><input type="text" name="author" size="66%" value="<?php echo $author;?>"></td>
			</tr>
			<br><br>
				<th><p><h3><label for="quotes">Quotes</label></p></h3></th>
		    <tr>
				<td><textarea id="quotes" name="quotes" rows="4" cols="50" value="<?php echo $quote;?>">
				</textarea></td>
			</tr>

			<tr>
				<br>
			
			<td><input type="submit" name="update" value="Update"></td>
			<td><input type="hIDden" name="id" value="<?php echo $_GET['id'];?>"></td>
	
			</tr>
		</table>
    </div>
       </div>
             </div>
              </div>
    </form>
	<div class="col-sm-12 border border-bottom-dark mt-3"></div>

<div class="col-sm-12 border border-bottom-dark mt-3">    
   <h5 class="col-sm-1"><a href="indexfq.php" class="mt-3 btn btn-success">Back</a></h5>
</div>
</div>


   <div class="container-fluid bg-secondary text-md-center m-sm-0 p-sm-1">
	 <div></div>
	 <h6>Copyright 2021, Flores,Karla Elissa T. - OPUS.tech, All Rights Reserved</h6>
 </div>
 
</body>
</html>