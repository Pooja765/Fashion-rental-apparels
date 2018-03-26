<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.navbar-default .navbar-fnt {
    color: #FFFFFF;
}
.navbar-default .navbar-backgrnd {
    color: #CC3333;
}
</style>
</head>

<body>


<nav class="navbar navbar-default navbar-fnt navbar-backgrnd">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Men <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="men_ethnic.php">Ethnic</a></li>
          <li><a href="men_western.php">Western</a></li>

        </ul>
      </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Women <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/CIFashion/index.php/cfashion/getuserpage">Ethnic</a></li>
          <li><a href="women_western.php">Western</a></li>

        </ul>
      </li>

    </ul>
 <form class="navbar-form navbar-left" action="<?php echo site_url('cfashion/index');?>" style="margin-left:350px">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
 <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo site_url('Cfashion/signup');?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="<?php echo site_url('Cfashion/login');?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<div class="container">
<div class="row">
<img src="images/logo3.png" style="margin-left:230px">




</div>
</div>
<br><br><br>
<!---CAROUSEL--->

<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/ethnic2.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/ethnic3.png" alt="Chicago" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/western1.jpg" alt="New york" style="width:100%;">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br><br><br><br>
<hr>

<!----discount section------->

<div class="container">
	<div class="row">
	 <div class="col-md-2">
		<h1 style="text-align:center;color:brown;margin-top:80px;">50% off on Women's wear</h1>
	</div>
	<div class="col-md-10">
	<img src="images/d1.png">
	</div>
     	</div>

	<br><br><br>
	<div class="row">
	 <div class="col-md-2">
		<h1 style="text-align:center;color:brown;margin-top:70px;">30% off on Men's wear</h1>
	</div>
	<div class="col-md-10">
	<img src="images/d2.png">
	</div>
     	</div>

</div>
</body>
</html>
