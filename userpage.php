
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
        window.alert("your order is accepted.");

        window.location.href = "billing_view";

    }
}
</script>
</head>

<body>


<br>
<?php foreach ($arrData as $row) { ?>

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


                  <button onclick="myFunction()">place order </button>


          </div>
          <div></div>
         <?php  }?>

        </div>

</div>
      </div>




</body>
</html>
