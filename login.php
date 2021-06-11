<?php
include('path.php');

include($ROOTPATH.'/app/controllers/users.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php require($ROOTPATH.'/app/links/header.php') ?>
  </head>
  <body>
    <header class="header_area">
    <?php require($ROOTPATH.'/app/links/nav.php') ?>
    </header>

  <section>
      <div class="container">
          <form action="login.php" method="post">
            <div class="col-lg-6 col-md-12 col-sm-12 m-auto p-4 login-container">
            <?php foreach ($errors as $err): ?>
                <h6 class="text-warning border-bottom border-warning p-1" ><? echo $err ?></h6>
              <? endforeach; ?>
                <div class="form-group">
                    <label class="text-white" for="username">Username</label>
                    <input class="text-white form-control bg-dark login-input-text" type="text" name="username" value="<?php echo $username;?>">
                    
          
                </div>
                <div class="form-group">
                    <label class="text-white" for="password">Password</label>
                    <input class="text-white form-control bg-dark login-input-text" type="password" name="password">
                    
                </div>
                <div class="form-group ">
                <button type="submit" class="form-control btn border border-light text-light explore-butt login-butt" name="login">Login</button>
                </div>
            </div>
            <br>
            


          </form>
      </div>
  </section>

    

    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>