<div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-background sticky-top">
       
        <button class="navbar-toggler toogle-butt" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <a href="" class="navbar-brand">
            <img src="assets/img/logo.png" alt="" height="30">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="mr-auto "></div>
            <ul class="navbar-nav nav-bar-links">
            <li class="nav-item active">
                <a class="nav-link" href="/mess-management-system/dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mess-management-system/item_list.php">Items</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/mess-management-system/order_item.php">Order</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/mess-management-system/supplier.php">Suppliers</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="logout.php"><?php echo $_SESSION['username']; ?></a>
            </li>

            </ul>
        </div>
        </nav>
</div>