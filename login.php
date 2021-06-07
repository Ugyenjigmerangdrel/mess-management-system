<?php
include('path.php');

include($ROOTPATH.'/app/controllers/users.php');

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
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-dark navbar-background">
                <a class="navbar-brand" href="#">
                    <img src="/assets/images/logo.svg" width="50" height="50" alt="">
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

                  </ul>
                </div>
              </nav>
        </div>
    </header>

  <section>
      <div class="container">
          <form action="login.php" method="post">
            <div class="col-lg-6 col-md-12 col-sm-12 m-auto p-4 login-container">
                <div class="form-group">
                    <label class="text-white" for="username">Username</label>
                    <input class="text-white form-control bg-dark login-input-text" type="text" name="username">
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