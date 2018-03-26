
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
<script>


function myFunction() {
    var ask = window.confirm("Are you sure you want to place the order???");
    if (ask) {
        window.alert("Your order is accepted.");

        window.location.href = "window-location.html";

    }
}
</script>
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
          <li><a href="women_ethnic.php">Ethnic</a></li>
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
  </div>
</nav>
<br>
<?php foreach ($arrethnic as $row) { ?>

  <div class="container">
    <div class="row">
      <div class="item">
          <div></div>
            <div class="col-md-4">
<br>
              <?php $image = $row["item_image"]; ?>
                <?php echo "<img src='http://localhost/CIFashion/$image' width='300px' height='520px'>";  ?>
<br>
                <?php echo $row['item_name'] ?>
<br>
                <?php echo $row['item_price'] ?>
                <div id='add_button'>
              <?php
                //$btn = array(
                /*'class' => 'fg-button teal',
                'value' => 'Place order',
                'name' => 'action=onclick'

              );*/
              ?>
<button onclick="myFunction()">place order </button>


              </div>
          </div>
          <div></div>
         <?php  }?>

        </div>

</div>
      </div>
    </div>



</body>
</html>
