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
                <a class="nav-link" href="/mess-management-system/dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mess-management-system/item_list.php">Items</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Messages</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href=""><?php echo $_SESSION['username']; ?></a>
            </li>

            </ul>
        </div>
        </nav>
</div>