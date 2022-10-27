<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
</head>
<body>
<div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                <li class="mega-menu mega-menu-sm">
                        <span>Admin Dashboard</span>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-shopping-bag"></i><span class="nav-text">Brands</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="addbrand.php">Add Brand</a></li>
                            <li><a href="brands.php">View Brands</a></li>
                        </ul>
                    </li>
                    
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-shopping-cart"></i><span class="nav-text">Categories</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="addcategory.php">Add Cateogry</a></li>
                            <li><a href="categories.php">View Categories</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a href="../login/logout.php">Log Out</a>
                    </li>
                </ul> 
            </div>
        </div>    
</body>
</html>