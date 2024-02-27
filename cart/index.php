<!DOCTYPE html>
<html lang="en">
<!-- head -->
<head>
  <title>Origano – Organic Store</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="Origano">
  <meta name="keywords" content="origano, html template, organic store template, organic store eCommerce template, ">
  <meta name="author" content="Media City">
  <meta name="MobileOptimized" content="320">
  <link rel="icon" type="image/icon" href="../images/favicon/favicon.ico">
  <!-- favicon-icon -->
  <!-- theme style -->
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"> <!-- bootstrap css -->
  <!-- revolution -->   
  <link rel="stylesheet" type="text/css" href="../revolution/css/settings.css"> <!-- revolution setting css -->
  <link rel="stylesheet" type="text/css" href="../revolution/css/layers.css">  <!-- revolution layer css --> 
  <link rel="stylesheet" type="text/css" href="../revolution/css/navigation.css">  <!-- revolution layer css -->
  <!-- end revolution -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">  <!-- fontawesome css -->
  <link href="../css/linearicons.css" rel="stylesheet" type="text/css">  <!-- linear icons css -->
  <link href="../css/eleganticon.css" rel="stylesheet" type="text/css">  <!-- elegant icons css -->
  <link href="../css/organicfood.css" rel="stylesheet" type="text/css">  <!-- organicfood icons css -->
  <link href="../../../css?family=Great+Vibes|Lato:400,700,900|Playfair+Display:400,400i|Poppins:400,500,600,700" rel="stylesheet">  <!-- google font -->
  <link rel="stylesheet" type="text/css" href="../css/menumaker.css">  <!-- menu css -->
  <link href="../css/owl.carousel.css" rel="stylesheet" type="text/css">  <!-- owl carousel css -->
  <link href="../css/magnific-popup.css" rel="stylesheet" type="text/css">  <!-- magnify popup css -->
  <link href="../css/style.css" rel="stylesheet" type="text/css">  <!-- custom css -->
  <!-- end theme style -->
</head>
<body>
    <!-- preloader -->
<div class="preloader">
    <div class="status">
      <div class="status-message">
      </div>
    </div>
  </div>
<!-- end preloader -->
  <!--navbar-->
  <?php
   include ('../includes/header.php');
   ?>
   <!--end of navbar-->
   <!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('../images/bg/page-banner.jpg');"> 
    <div class="container">
      <div class="banner-dtl">
        <h3 class="banner-heading">Shopping Cart</h3>
        
      </div>
    </div>
  </section>
<!-- end page banner -->
<!--  cart -->
<?php

$cart= $_COOKIE['cart'];

$cartA=explode(",",$cart);
$cartCo=count($cartA);
?>

  <section id="cart-page" class="cart-page">
    <div class="container">
      <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="Close">&times;</a>
        <i class="fa fa-shopping-basket"></i><?php 
        if($cartCo > 0 && $cart!="")
        { 
          echo count(explode(",",$_COOKIE['cart']));
        }else{
          echo "0";
          }?> Items in cart
      </div>



     <?php
if ($cartCo > 0 && $cart!="") {
 
    foreach ($cartA as $c)
    {
        ?>
                         <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_commerce";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve image data from the databases
$sql = "SELECT * FROM products WHERE p_id='$c'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?> 


      <div class="cart-products-main-block">
        <div class="row">
          <div class="col-sm-8">
            <div class="cart-products-block">
              <div class="row">
                <div class="col-sm-2">
                  <div class="cart-product-img">
                    <a href="product-detail.html" title="<?php echo $row['p_name'];?>"><img src="http://localhost/e-commerce/shop/shopping/product/<?php echo $row['p_image'];?>" class="img-responsive" alt="Products"></a>
                  </div>
                </div>
                <div class="col-sm-7">
                  <div class="cart-product-dtl">
                    <h5 class="cart-product-name"><a href="product-detail.html" title="<?php echo $row['p_name'];?>"><?php echo $row['p_name'];?></a></h5>
                    <div class="cart-parent-page"><a href="#" title="Food">Food</a> / Vegetable</div>
                    <div class="shop-products-rating">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <div class="cart-btn-block">
                      <div class="add-cart-btn-two">
                        <a href="javascript:void(0);"  onclick=" delete_cart('<?php echo $row['p_id'] ?>')" class="btn btn-default" title="Remove form Cart"><i class="fa fa-shopping-basket"></i> Remove from cart</a>
                      </div>
                      <div class="wishlist-btn">
                        <a href="#" class="btn btn-default" title="Wishlist"><i class="fa fa-heart"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-dtl-btn">   
                    <div class="btn-title">Qty:</div>
                    <div class="product-display">                    
                      <form id="select-filter-2" action="#">
                        <div class="select-filter number">
                          <input type="text" value="9" name="qtybutton" class="cart-plus-minus-box">
                          <div class="inc qtybutton"> <i class="fa fa-sort-asc"></i></div>                 
                          <div class="dec qtybutton"><i class="fa fa-sort-desc"></i></div>
                        </div>
                      </form>               
                    </div>
                  </div>    
                  <div class="or-text">or</div>`
                  <div class="product-dtl-btn box-qunty-btn">  
                    <div class="btn-title">Box:</div> 
                    <div class="sort-btn">   
                      <div class="sort-dropdown dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="drp-name" data-bind="label">10 kg</span>
                          <span><i class="fa fa-sort-desc"></i></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <li><a href="#" title="dropdown">20 kg</a></li>
                          <li><a href="#" title="dropdown">50 kg</a></li>
                          <li><a href="#" title="dropdown">100 kg</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="order-block">
              <div class="cart-total-block">
                <div class="cart-shipping-info text-right">
                  <div class="cart-shipping-info-text">Est. Delivery : 26 - 29 Dec</div>
                  <div class="cart-price"><span>$20.00</span>$10.00</div>
                  <div class="cart-promo"><span>50%</span></div>
                  <hr>
                </div>
                <table class="cart-table-two">
                  <tr>
                    <td>Subtotal :</td>
                    <td class="text-right">$10</td>
                  </tr> 
                  <tr>
                    <td>Shipping :</td>
                    <td class="text-right">$3</td>
                  </tr> 
                  <tr>
                    <td><hr></td>
                    <td><hr></td>
                  </tr>
                  <tr>
                    <th>Total</th>
                    <th class="text-right"><?php echo"{$row['p_rate']}";?></th>
                  </tr>  
                </table>   
              </div>    
            </div> 
          </div>
        </div>  
      </div>
    


      <?php
    }
  }else {
      echo "";
      }
    ?>




      <div class="cart-final-block">
        <div class="row">
          <div class="col-sm-8">
            <div class="cart-final-btn">
              <a href="http://localhost/e-commerce/shop/shopping" class="btn btn-default" title="Continue Shopping">Continue Shopping</a>
            </div>
          </div>
          <div class="col-sm-4">
            <table class="cart-table-two cart-final-table">
              <tr>
                <th>Total</th>
                <th class="text-right"><span>total</span></th>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-8">
          <div class="cart-coupon-box">
            <div class="cart-coupon-text">Have a promo code? Apply Here</div>
            <form id="cart-coupon-form" class="cart-coupon-form" action="#">
              <input type="text" id="coupon" class="form-control" placeholder="Enter promo code">
              <a href="#" class="coupon-apply-text" title="Apply">Apply</a>
            </form>
          </div>
        </div>
        <div class="col-sm-4 text-right">
          <div class="cart-final-btn cart-pay-btn">
            <a href="http://localhost/e-commerce/cart/check_out/" class="btn btn-default" title="Proceed To Pay">Proceed to Pay $39</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="shop-products-main-block">
        <h2 class="related-products-heading text-center">Related Products</h2>
        <div id="product-dtl-slider" class="product-dtl-slider">    
        <?php
                       // Database connection
                     $servername = "localhost";
                     $username = "root";
                    $password = "";
                    $dbname = "e_commerce";
                    $conn = new mysqli($servername, $username, $password, $dbname);

                     if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                       }

                      // Retrieve image data from the database
                        $sql = "SELECT * FROM products";
                  $result = $conn->query($sql);
                 ?>
              <?php
          // Display images
   
          if ($result->num_rows > 0) {
        
       
           while ($row = $result->fetch_assoc()) {
            
            ?>
          <div class="item shop-products-block">      
            <div class="shop-products-img">
            <?php  echo"    <a href='http://localhost/e-commerce/shop/product_detial/?id={$row["p_id"]}'  title='{$row["p_name"]}'><img src='http://localhost/e-commerce/shop/shopping/product/{$row["p_image"]}'  class='img-responsive' alt='Product'></a>"?>
            </div>
            <div class="shop-products-dtl-main">
              <div class="shop-products-dtl">
              <?php echo"<h5 class='shop-products-name'><a href='http://localhost/e-commerce/shop/product_detial/?id={$row["p_id"]}' title='{$row["p_name"]}'>{$row["p_name"]}</a></h5>";?>
                <div class="shop-products-rating">
                  <ul>
                    <li><i class="fa fa-star active"></i></li>
                    <li><i class="fa fa-star active"></i></li>
                    <li><i class="fa fa-star active"></i></li>
                    <li><i class="fa fa-star active"></i></li>
                    <li><i class="fa fa-star active"></i></li>
                  </ul>
                </div>
                <?php echo"<div class='shop-products-price'><span>₹100.00</span> {$row["p_rate"]}</div>";?>
              </div>
              <div class="shop-products-footer">
                <div class="row">
                  <div class="col-xs-6">
                    <a href="javascript:void(0);"  onclick="cart('<?php echo $row['p_id'] ?>')" title="Add To Cart"><i class="fa fa-shopping-basket"></i> Add to cart</a>
                  </div>
                  <div class="col-xs-6">
                    <a href="http://localhost/e-commerce/shop/product_detial/?id=<?php echo"{$row['p_id']}";?>" title="View Detail"><i class="fa fa-file-text-o"></i> View detail</a>
                  </div>
                </div>
              </div>  
            </div> 
          </div>
         

          <?php
                          }
      
           } else {
            echo "No images found";
            }
             // Close database connection
               $conn->close();
               ?>
      
        </div>
      </div>
    </div>
  </section>
<!-- end cart -->
   <!-- like what you see -->
<section id="like" class="like-main-block text-center" style="background-image: url('../images/bg/like-bg.jpg')">
    <div class="container">
      <div class="like-text-block">
        <h1 class="like-text-bg">Like What You See?</h1>
        <h2 class="like-text">Like What You See?</h2>
      </div>
      <a href="../#" class="btn btn-default" data-toggle="modal" data-target="#contact-modal" title="Get In Touch">Get In Touch With Us!</a>
      <div class="modal fade contact-modal" id="contact-modal" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
              <h5 class="modal-title text-center">Get in touch with us</h5>
            </div>
            <div class="modal-body contact-modal-body text-center">
              <form id="get-in-touch" action="#">
                <div class="form-group">
                  <input type="text" class="form-control" id="modal-name" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="modal-email" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="modal-subject" placeholder="Enter Subject">
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="modal-message" name="message" rows="6" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end like what you see -->
   <!-- footer -->
   <?php
   include ('../includes/footer.php');
   ?>
 <!--end of footer-->



 <script>
        // Function to set cookies
        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }
        
        
        function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

var cart1 = [];

let a =  getCookie("cart");
if(a != ''){
  var array = a.split(",");

  cart1 = [...array];
}
        function cart(id){
     

          if(!cart1.includes(id)){

            cart1.push(id);
                setCookie('cart', cart1, 7);
          }else {
            alert("Already Product added");
          }
          let a =  getCookie("cart");
          var array = a.split(",");
          document.getElementById("cartCount").innerHTML = array.length;
          console.log(array.length);
          window.location.reload();

        }

    </script>
    <script>
     

function delete_cart(id){
  let b =  getCookie("cart");
  var array = b.split(",");
  if(array.includes(id)){
   var remove= array.splice(array.indexOf(id),1);
   console.log(remove)
  
     console.log(array.length);
     setCookie('cart',array,7);

     


}
window.location.reload();

}
      </script>





 <script type="text/javascript" src="../js/jquery.min.js"></script>  <!-- jquery library js -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>  <!-- bootstrap js -->
  <script type="text/javascript" src="../js/menumaker.js"></script> <!-- menumaker js -->
  <script type="text/javascript" src="../js/owl.carousel.js"></script> <!-- owl carousel js -->
  <script type="text/javascript" src="../js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js -->
  <script type="text/javascript" src="../js/jquery.elevatezoom.js"></script> <!-- product zoom js -->
  <script type="text/javascript" src="../js/price-slider.js"></script> <!-- price slider / filter js-->
  <script type="text/javascript" src="../js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->  
  <script type="text/javascript" src="../js/jquery.counterup.js"></script> <!-- facts count js-->
  <script type="text/javascript" src="../js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
  <script type="text/javascript" src="../js/jquery.appear.js"></script> <!-- progress bar js -->
  <script type="text/javascript" src="../js/jquery.countdown.js"></script>  <!-- event countdown js -->
  <script type="text/javascript" src="../js/imagesloaded.pkgd.js"></script> <!-- image load js-->
  <script type="text/javascript" src="../js/masonry.pkgd.min.js"></script> <!-- masonry js -->
  <script type="text/javascript" src="../js/paperstack.js"></script> <!-- paperstack js -->
  <!-- revolution js files -->
  <script type="text/javascript" src="../revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="../revolution/js/jquery.themepunch.revolution.min.js"></script>  
  <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <!-- end revolution js files -->
  <script type="text/javascript" src="../js/theme.js"></script><!-- custom js -->

 </body>
 </html>