
<!-- navigation -->
  <nav id="nav-bar" class="nav-bar">
    <div class="container">
      <div class="logo">
        <a href="http://localhost/e-commerce/" ><img src="http://localhost/e-commerce/images/logo.png" class="img-responsive" alt="logo"></a>
      </div>
      <div class="navigation-main-block">
        <div class="row">
          <div class="col-md-9">
            <div class="navigation">
              <div id="cssmenu" class="align-center">
                <ul>
                  <li class="nav_link" id="nav_home"><a href="http://localhost/e-commerce/">Home</a>
                  </li>
                  <li class="nav_link" id="nav_about"><a href="http://localhost/e-commerce/about-us/">About Us</a>
                  </li>
                  <li class="nav_link" id="nav_gallery"><a href="http://localhost/e-commerce/gallery/">Gallery</a>
                  
                  </li>
                  <li class="nav_link" id="nav_shop"><a href="http://localhost/e-commerce/shop/shopping">Shop</a>
                  </li>
                  <li class="nav_link" id="nav_account" ><a href="#">Account</a>
                    <ul>
                      <li ><a href="http://localhost/e-commerce/account/my_account/">My Account</a></li>
                      <li><a href="http://localhost/e-commerce/account/login/">Login</a></li>
                      <li><a href="http://localhost/e-commerce/account/register/">Register</a></li>
                    
                    </ul>
                  </li>
                  <li class="nav_link" id="nav_contact"><a href="http://localhost/e-commerce/contact/">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 pad-0 hidden-sm hidden-xs">
            <div class="nav-block-right">
              <ul>
                <li id="cart" class="cart"><a href="http://localhost/e-commerce/cart/" title="Shopping Cart"><i class="lnr lnr-cart"></i> <span style="background: red;font-size: 9px; padding: 6px;border-radius: 40%;color: wheat; position: relative;
    top: -21px;" id="cartCount"><?php

$cart= $_COOKIE['cart'];

$cartA=explode(",",$cart);
$cartCo=count($cartA);
?><?php 
        if($cartCo > 0 && $cart!="")
        { 
          echo count(explode(",",$_COOKIE['cart']));
        }else{
          echo "0";
          }?> </span></a></li>
                <li><a href="http://localhost/e-commerce/account/my_account/" title="My Account"><i class="lnr lnr-user"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- search -->
   <div class="search">
      <div class="container clearfix">
        <input type="search" class="search-box" placeholder="Type anything here...." />
        <a href="#" class="fa fa-times search-close"></a>
      </div>
    </div> 
    <!-- end search -->
  </nav>
 
 