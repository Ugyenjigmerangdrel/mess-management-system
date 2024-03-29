<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php 
include('path.php');

include($ROOTPATH . '/app/controllers/order_form.php');

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
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    MMP - PKJX
  </title>
  <?php require('lender/head.php') ?>
</head>

<body class="">
  <div class="wrapper">
  <?php require('lender/sidebar.php') ?>
    <div class="main-panel">
    <?php require('lender/nav.php') ?>
      <div class="content">
          <div class="row">
              <div class="col-md-8">
              <div class="card">
          
                <div class="card-header bg-primary">
                <h4 class="">Order Item
              
                </h4>
                
                </div>
                
                <div class="card-body">
                <form action="order_form.php" method="post">
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label for="">Order No</label>
                            <input type="text" class="form-control" name="order_no">
                        </div>
                        
                        <div class="form-group">
                        <label for=""></label>
                        <div class="">
                        <a href="javascript:void(0)" class="add-more-form btn btn-fill btn-primary">Add More Fields</a>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                    
                    <div class="col-md-4 form-group">
                    <label for="">Item Name</label>
                    <select name="item_supplying[]" id="" class="form-control">
                      <?php foreach ($item as $one): ?>
                          <option value="<?php echo $one['item_name'] ?>"><?php echo $one['item_name']; ?></option>
                      <?php endforeach ?>
                    </select>
                    </div>
                    <div class="col-md-2 form-group">
                    <label for="">Quantity</label>
                    <input type="number" name="quantity[]" required class="form-control">
                    </div>

                    </div>
                    <div class="paste-new-form"></div>
                    <button type="submit" name="save_multiple_data" class="btn btn-fill btn-primary">Submit Order</button>
                </form>
                </div>
                </div>
              </div>
          </div>
      </div>
          
          
 
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
        
      </ul>
    </div>
  </div>
  <?php require('lender/script.php'); ?>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script>
        $(document).ready(function () {
            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-form').append('<div class="main-form mt-3 ">\
                                <div class="row">\
                                    <div class="col-md-4">\
                                    <div class="form-group mb-2">\
                                        <label for=""> Item Name</label>\
                                        <select name="item_supplying[]" class=" form-control " id="">\
                                        <?php foreach ($item as $one): ?>\
                                            <option value="<?php echo $one['item_name'] ?>"><?php echo $one['item_name']; ?></option>\
                                        <?php endforeach ?>\
                                        </select>\
                                    </div>\
                                    </div>\
                                    <div class="col-md-2">\
                                        <div class="form-group mb-2">\
                                            <label for="">Quantity</label>\
                                            <input type="number" name="quantity[]" class="form-control" required >\
                                        </div>\
                                    </div>\
                                    <div class="">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });
        });
    </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>

</html>