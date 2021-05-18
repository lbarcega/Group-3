<?php
  //security check
  session_start();
  if (isset($_SESSION['isLogin'])) {
    if ($_SESSION['isLogin'] == true) {
      header('Location: home.php');
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/app.css">

    <title>Washi  Log In</title>
  </head>
  <body>

    <!-- Start Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom-nav">
      <a class="navbar-brand" href="home.php">
        <img class="menu-logo" src="images/logo.png">
		<span class="d-lg-none d-xl-inline" style="margin-left: 5px;">Washi</span>		
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<form action="searchNote.php" method="get" class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query"required>
				  <button class="btn btn-info my-2 my-sm-0" type="submit">
					<i class="fas fa-search"></i>
				  </button>
				</form>	
			</li>		
          <li class="nav-item">
            <a class="nav-link" href="home.php">
              <i class="fas fa-home"></i> Home
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> Guest
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="registration.php">
                <i class="fas fa-pencil-alt fa-fw"></i> Sign up
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
	

    <!-- End Header -->

    <!--div class="container">

      <form action="authenticate.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form-->

    <div class="container mt-5">
		<div class="mx-auto form-narrow">
			<h1>Log In</h1>
			<hr>
			<form action="authenticate.php" method="post">
				<div class="form-group">

					<input type="text" class="form-control" placeholder="Username" name="username" required>
				</div>
				<div class="form-group">

					<input type="password" class="form-control" placeholder="Password" name="password" required>
				</div>
					
				<button type="submit" class="btn btn-block btn-primary">Log In</button>				
			</form>
	    </div>
    </div>	  
      <?php
        if (isset($_GET['authenticate'])) { //check if authenticate key exists in URL
          if ($_GET['authenticate'] == "false") {
            echo '
              <br>
              <div class="alert alert-danger" role="alert">
                <b>Error:</b> Invalid Username or Password.
              </div>
            ';
          }
        }
      ?>
	  

	    

    </div>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
