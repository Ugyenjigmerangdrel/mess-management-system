<?php 
include('path.php');
include($ROOTPATH . '/app/database/db.php');

$user_role = '';
if ($_SESSION['user_role'] === 1){
    $user_role = 'Superadmin';
} 

if ($_SESSION['user_role'] === 2){
    $user_role = 'Admin';
}
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
        <div class="container-fluid ">
            <div class="row mt-3">
                <div class="col-lg-3 col-md-6 col-sm-12 text-white">
                    <div class="row pt-2 pb-2 m-2 pl-2 pr-2" style="box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%); border-radius:5px; background:tomato;">
                         
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-envelope text-info mt-3" style="font-size: 2rem;"></i>
                    </div>
                    <div class="col-lg-8">
                        <h5>Item Lists</h5>
                        <p><b>260</b></p>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 text-white">
                    <div class="row pt-2 pb-2 m-2 pl-2 pr-2" style="box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%); border-radius:5px; background:teal;">
                         
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-folder text-white mt-3" style="font-size: 2rem;"></i>
                    </div>
                    <div class="col-lg-8">
                        <h5>Item Lists</h5>
                        <p><b>260</b></p>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 text-white">
                    <div class="row pt-2 pb-2 m-2 pl-2 pr-2" style="box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%); border-radius:5px; background:red;">
                         
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-home text-white mt-3" style="font-size: 2rem;"></i>
                    </div>
                    <div class="col-lg-8">
                        <h5>Item Lists</h5>
                        <p><b>260</b></p>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 text-white">
                    <div class="row pt-2 pb-2 m-2 pl-2 pr-2" style="box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%); border-radius:5px; background:purple;">
                         
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-pen text-white mt-3" style="font-size: 2rem;"></i>
                    </div>
                    <div class="col-lg-8">
                        <h5>Item Lists</h5>
                        <p><b>260</b></p>
                    </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>

    <section>
    <div class="container-fluid">
        <div class="row">
        
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