<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    ?>
  <!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style type="text/css">
        html, body{
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="./css/animate.css">

    <title>Event Input</title>

  </head>
  <body class="container align-items-center d-flex justify-content-center" style="height: 100vh; background-image: url('./img/back.jpg'); background-size: cover; background-repeat: no-repeat;">
    
    <div class="row w-50">
    	<div class="col justify-content-center">
    		
    		<form action="Addevent.php" method="post" class="p-5 rounded" style="background: rgba(0,0,0,0.4);">
  	<h2 class="text-danger shake" id="newevent">New Event</h2>
  <div class="form-group">
    <label for="Event Title">Event Title</label>
    <input type="text" class="form-control" id="eventTitle" aria-describedby="eventTitleHelp" placeholder="Title"name = "eventTitle">
  </div>
  <div class="form-group">
    <label for="Event Description">Event Description</label>
    <input type="text" class="form-control" id="eventDesc" placeholder="Description" name = "eventDesc">
  </div>
  <div class="form-group">
    <label for="Event Date">Event Date</label>
    <input type="date" class="form-control" id="eventDate" placeholder="Event Date"name = "eventDate">
  </div>
  <input type="submit" class ="btn btn-primary w-100" value ="Event Input" name ="">
	</form>
    	</div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://www.gstatic.com/firebasejs/5.9.2/firebase.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="./scripts.js"></script>
  </body>
</html>
<?php
}
?>