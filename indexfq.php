<?php 
	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM fam_quotes");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<title>Famous_Qoutes</title>
</head>


<body>
    <div class="container-fluid p-sm-0 m-sm-0">
        <div class="row bg-info text-dark p-0 m-0">
            <div class="container-fluid p-sm-3 m-sm-0">
                <img src="image/quote.png" width="100" height="" class="float-sm-Center">
                <div class="float-sm-right">
                    <h1 class="m-sm-0">Welcome to My Profile</h1>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark m-0">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="indexfq.php">Famous Quotes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Images</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Creator</a>
                </li>
            </ul>
        </div>
        <form class="form-inline m-0">
		<div class="btn btn-success">
		<a class="text-white" href="add.html"><strong>Add New Data</strong></a>
			</div>
			<br></br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
    </nav>

    <div class="card bg-light m-sm-3">
                    <div class="card-header bg-info " >
                        <h6 class="m-sm-auto">Famous_Qoutes</h6>
                    </div>
                    <div class="card-body ">
					
                    <table style="font-size: 18px;">
		<tr>
			<td>AUTHOR &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
			<td>QUOTES &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </td>
			<td>UPDATE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		</tr> 

		<?php
while( $res = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$res['author']."</td>";
    echo "<td>".$res['quote']."</td>";
    echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
    echo "</tr>";
} 
?>
</table>

</div>
    </div>
      </div>


		<div class="col-sm-12 border border-bottom-dark mt-3">
			
		</div>
	  
      </div>
   </div>

   <div class="col-sm-12 border border-bottom-dark mt-3">    
      <h5 class="col-sm-1"><a href="index.php" class="mt-3 btn btn-success">Back</a></h5>
	        	</div>



			<div class="container-fluid bg-secondary text-md-center m-sm-0 p-sm-1">
        <h6>Copyright 2021, Flores,Karla Elissa T. - OPUS.tech, All Rights Reserved</h6>
    </div>
	  
</body>
</html>


