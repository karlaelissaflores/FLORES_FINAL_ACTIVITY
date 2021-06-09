<?php

  //initialize session
  session_start();

  if( !isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('location: login.php');
    exit;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <title>Dashboard</title>
</head>
    <style>
        body{
          background-color: #f7f7f7;
        }
        h2.midle{
          text-align: center;
        }
        p.bot{
          text-align: center;
        }

    </style>
  
<body>
    <div class="container-fluid p-sm-0 m-sm-0">
        <div class="row bg-info text-dark p-0 m-0">
            <div class="container-fluid p-sm-3 m-sm-0">
                <img src="image/quote.png" width="100" height="" class="float-sm-Center">
                <div class="float-sm-right">
                    <h1 class="m-sm-0">Famous_Qoutes</h1>
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
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
    </nav>

<div class="container">

    <div class="card bg-light m-sm-3">
                    <div class="card-header bg-info " >
                        <h6 class="m-sm-auto">Video Player</h6>
                    </div>
                    <div class="card-body">
                        <video id="my-video" class="video-js" style="margin-left: 270px" controls preload="auto" width="500" height="300" poster="image/motivation-daily-quotes.png" data-setup="{}">
                            <source src="Inspirational Quotes About Life.mp4" type="video/mp4"/>
                            <p class="vjs-no-js ">
                                To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                            </p>
                        </video>
                    </div>

      <div class="col-sm">
                        <h5 class="float-sm-left"><b>About The Creator</b><br><small><a href="#"></a></small></h5>
                    </div>
                    <div class="card-body" style="word-spacing: 2px";>
                    <div>    
                    A 3rd Year highschool taking up Bachelor of Sciences Information Technology at Palawan State University, CFO of OPUS.tech.PH a start-up company of Palawan International Technology Business Incubator.
                </div>

    </div>
      </div>
      </div>

		<div class="col-sm-12 border border-bottom-dark mt-3">
			
		</div>
	  
      </div>
      </div>
      
      <h5 class="col-sm-1"><a href="logout.php" class="mt-3 btn btn-danger">Logout</a></h5>
	        	</div>
    </div>
   </div>
    <div class="container-fluid bg-secondary text-md-center m-sm-0 p-sm-1">
        <h6>Copyright 2021, Flores,Karla Elissa T. - OPUS.tech, All Rights Reserved</h6>
    </div>
  
</body>
</html>