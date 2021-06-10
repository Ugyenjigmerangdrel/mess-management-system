<?php 
include('path.php');

include($ROOTPATH . '/app/controllers/item_list.php');

$user_role = '';
if ($_SESSION['user_role'] === 1){
    $user_role = 'Superadmin';
} 

if ($_SESSION['user_role'] === 2){
    $user_role = 'Admin';
}

$item = selectAll('item_table');
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
  </head>
  <body>
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-dark navbar-background">
                <a class="navbar-brand" href="#">
                    <img src="https://academy.bt/tranewsite/wp-content/uploads/2020/09/download-4-132x113.png" width="100" alt="">
                  </a>
                <button class="navbar-toggler toogle-butt" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="mr-auto "></div>
                  <ul class="navbar-nav nav-bar-links">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.html">About<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="learning-journey.html">Mine</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="contact.html"><?php echo $_SESSION['username']; ?></a>
                    </li>

                  </ul>
                </div>
              </nav>
        </div>
    </header>
    <br>
    <section>
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-4 border-right border-white">
      <form action="item_list.php" method="post">
          <div class="col-lg-12 col-md-12 col-sm-12  login-container">
           <?php foreach ($error as $err): ?>
                <h6 class="text-warning border-bottom border-warning p-1" ><? echo $err ?></h6>
              <? endforeach; ?>
              <div class="form-group">
                  <label class="text-white" for="username">Item Name</label>
                  <input class="text-white form-control bg-dark login-input-text" type="text" name="item_name" value="<?php echo $item_name;?>">
                  
                  
              </div>
              <div class="form-group">
                  <label class="text-white" for="password">Quantity_Unit</label>
                  <input class="text-white form-control bg-dark login-input-text" type="text" name="quantity_unit" value="<?php echo $quantity_unit;?>">
  
              </div>
              <div class="form-group">
                  <label class="text-white" for="text">Description</label>
                  <input class="text-white form-control bg-dark login-input-text" type="text" name="description" value="<?php echo $description;?>">
  
              </div>
              <div class="form-group">
                  <label class="text-white" for="text">Item Rate</label>
                  <input class="text-white form-control bg-dark login-input-text" type="text" name="item_rate" value="<?php echo $item_rate;?>">
  
              </div>
              <div class="form-group ">
              <button type="submit" class="form-control btn border border-light text-light explore-butt login-butt" name="submit">Submit</button>
              </div>

          </div>
          <br>
          


        </form>
    
    </div>
      <div class="col-lg-8 item-container" style="height:80vh; overflow-y: scroll;">
      <br>
      <h5 class="text-white">Item Listing</h5>
      <br>
      <table class="table text-white item-table-border">
      <thead class="item-table-bg">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Item Name</th>
          <th scope="col">Quantity_Unit</th>
          <th scope="col">Description</th>
          <th>Item Rate</th>
          <th>Changes</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($item as $key => $iti): ?>
        <tr>
          <th scope="row"><?php echo $key + 1 ?></th>
          <td><?php echo $iti['item_name'];?></td>
          <td><?php echo $iti['quantity_unit'];?></td>
          <td><?php echo $iti['description'];?></td>
          <td><?php echo $iti['item_rate'];?></td>
          <td><button class="btn bg-dark border border-light text-light explore-butt">Update</button><button class="btn bg-danger border border-light text-light explore-butt ml-2">Delete</button></td>
        </tr>

      <?php endforeach ?>
       
      </tbody>
    </table>
      </div>
    </div>
    </div>
    </section>

    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>