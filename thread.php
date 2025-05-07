<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome to Organic Store</title>
</head>

<body>

    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php
        $id = $_GET['catid'];
        //$email = $_SESSION["useremail"];  
        $email = isset($_SESSION["useremail"]) ? $_SESSION["useremail"] : ""; // Check if useremail is set
        $sql = "SELECT * FROM `categories` WHERE category_id=$id"; 
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $catname = $row['category_name'];
            $catdes = $row['category_price'];
        }
    ?>
    <?php
    $showAlert=false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST')
    {
    //insert payment into db
    $qty = $_POST['qty'];
    $size = $_POST['size'];

    $sql = "INSERT INTO `cart` (`email`, `catid`, `catname`, `catprice`, `qty`, `size`, `timeStamp`) VALUES ('$email', '$id', '$catname', '$catdes', '$qty', '$size', current_timestamp())";
    $result = mysqli_query($conn,$sql);
    $showAlert=true;
   if($showAlert)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Information is added to Cart. <strong><a href="cart.php" style="decoration=none; color: darkgreen;">View cart</a></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    else
    {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERROR!</strong> Information is not added to Cart.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'; 
    }

}
?>
    <!-- Category container starts here-->
    <!-- <div class="container my-4 alert alert-success alert-dismissible fade show">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><?php echo $catname;?></h1>
                <p class="lead">₹<?php echo $catdes ;?></p>
            </div>
        </div>
    </div> -->

    <?php 
    echo '
    
    <div class="container my-3">
      <div class="card bg-dark text-white">
      <img src="img/thread.jpg" class="card-img" alt="...">
      <div class="card-img-overlay">
      <h5 class="card-title" style="color: black;">Eat Healthy...Stay Healthy</h5>
        <p class="card-text" style="color: black;">We will provide you the best-quality veggies which is super healthy for your body.</p>
      </div>
    </div>
    </div>';


       $sql = "SELECT * FROM `categories` WHERE `category_id` = $id"; 
       $result = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_assoc($result))
       {
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
        //echo $row['category_id'];
        //echo $row['category_name'];
        // $id = $row['category_id'];
        $cat = $row['category_name'];
        $desc = $row['category_price'];  
        echo '
     <div class="container my-3">
    <div class="card mb-3" style="max-width: 10000px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <img src="categories/card-'.$id.'.jpg" class="card-img-top" alt="image not found">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><b>'.$cat.'</b></h5>
        <p class="card-text">₹'.$desc.'/-</p>

        <form method="post">
      <div class="form-group col-md-block">
        <label for="inputSize">Size</label>
        <select id="inputSize" name="size" class="form-control" required>
          <option selected>Select...</option>
          <option>Small</option>
          <option>Medium</option>
          <option>Large</option>
        </select>
      </div>
      <div class="form-group col-md-block" required>
        <label for="inputQuantity">Quantity</label>
        <select id="inputQuantity" name="qty" class="form-control" required>
          <option selected>Select...</option>
          <option>1 kg</option>
          <option>1.5 kg</option>
          <option>2 kg</option>
          <option>3 kg</option>
          <option>4 kg</option>
          <option>5 kg</option>
        </select>
      </div>
    <center><button type="submit" class="btn btn-success btn-lg">Add to Cart</button></center><br>
  </form>
      </div>
    </div>
  </div>
</div>
    </div>';
  }
  else{
    echo '
    <div class="container">
    <h1 class="py-2">'.$catname.'</h1> 
       <p class="lead">You are not logged in. Please login to be able to buy a product</p>
    </div>
    ';
}
}
  ?>



    <br><?php include 'partials/_footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>