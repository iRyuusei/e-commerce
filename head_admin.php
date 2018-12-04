<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 6/29/17
 * Time: 3:11 PM
 */
?>

<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <!--<ul>
                        <li><a href="<?php /*echo base_url() */?>Welcome/login"><i class="fa fa-user"></i> My Account</a></li>
                        <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                        <li><a href="<?php /*echo base_url() */?>Welcome/cart"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                        <li><a href="<?php /*echo base_url() */?>Welcome/checkout"><i class="fa fa-user"></i> Checkout</a></li>

                    </ul>-->
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->

<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="<?php echo base_url() ?>Admin">Mobile<span> River</span>(Admin Panel)</a></h1>
                </div>
            </div>

            <div class="col-sm-6">
                <!--<div class="shopping-item">
                    <a href="cart.php">Cart - <span class="cart-amunt">$800</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                </div>-->
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->

<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span style="color: white;">menu</span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a href="<?php echo base_url() ?>index.php/Welcome">Home</a></li>
                    <li class=""><a href="<?php echo base_url() ?>index.php/Admin">View Products</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/Welcome/add_pro">Add Product</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/Admin/order">Orders & Users</a></li>
                </ul>

                <ul class="nav navbar-right navbar-nav">
                    <?php
                    if(isset($_SESSION['email'])) {
                        ?>
                        <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Welcome : <?php echo $_SESSION['dis_name'] ?></a></li>
                                <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="<?php echo base_url() ?>assets/img/user.png" width ="20" height='20'></a>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() ?>index.php/Login/accounts"" class="icon">Profile</a></li>
                                    <li><a href="<?php echo base_url() ?>index.php/Login/edit_accounts"" class="icon">Edit Information</a></li>
                                    <li><a href="<?php echo base_url() ?>index.php/Login/logout">Log Out</a></li>
                                </ul>
                    </li>
                        <?php
                    }

                    ?>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->

<style type="text/css">

.dropdown-menu a.icon {
  position: relative;
  padding-left: 40px;
  background-color: white;
  color: black;
}
.dropdown-menu a.icon .glyphicon {
  top: 6px;
  left: 10px;
  font-size: 18px;
}

</style>