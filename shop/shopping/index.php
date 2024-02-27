<!DOCTYPE html>
<html lang="en">
<!-- head -->
<head>
  <title>Origano – Organic Store </title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="Origano">
  <meta name="keywords" content="origano, html template, organic store template, organic store eCommerce template, ">
  <meta name="author" content="Media City">
  <meta name="MobileOptimized" content="320">
  <link rel="icon" type="image/icon" href="../../images/favicon/favicon.ico">
  <!-- favicon-icon -->
  <!-- theme style -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"> <!-- bootstrap css -->
  <!-- revolution -->   
  <link rel="stylesheet" type="text/css" href="../../revolution/css/settings.css"> <!-- revolution setting css -->
  <link rel="stylesheet" type="text/css" href="../../revolution/css/layers.css">  <!-- revolution layer css --> 
  <link rel="stylesheet" type="text/css" href="../../revolution/css/navigation.css">  <!-- revolution layer css -->
  <!-- end revolution -->
  <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css">  <!-- fontawesome css -->
  <link href="../../css/linearicons.css" rel="stylesheet" type="text/css">  <!-- linear icons css -->
  <link href="../../css/eleganticon.css" rel="stylesheet" type="text/css">  <!-- elegant icons css -->
  <link href="../../css/organicfood.css" rel="stylesheet" type="text/css">  <!-- organicfood icons css -->
  <link href="../../../../css?family=Great+Vibes|Lato:400,700,900|Playfair+Display:400,400i|Poppins:400,500,600,700" rel="stylesheet">  <!-- google font -->
  <link rel="stylesheet" type="text/css" href="../../css/menumaker.css">  <!-- menu css -->
  <link href="../../css/owl.carousel.css" rel="stylesheet" type="text/css">  <!-- owl carousel css -->
  <link href="../../css/magnific-popup.css" rel="stylesheet" type="text/css">  <!-- magnify popup css -->
  <link href="../../css/style.css" rel="stylesheet" type="text/css">  <!-- custom css -->
  <!-- end theme style -->
</head>
<!-- end head -->
<!--body-->
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
   include ('../../includes/header.php');
   ?>
   <!--end of navbar-->
<!-- page banner -->
<!-- page banner -->
<section id="page-banner" class="page-banner" style="background-image: url('../../images/bg/page-banner.jpg');"> 
    <div class="container">
      <div class="banner-dtl">
        <h3 class="banner-heading">Shopping Page</h3>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!--  store -->
<section id="shop-page-4-col-v3" class="shop-page shop-col-four shop-main-block">
    <div class="container">
      <div class="shop-nav">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="sort-btn">   
              <div class="sort-dropdown dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Sort By: <span class="drp-name" data-bind="label">Default</span>
                  <span><i class="fa fa-sort-desc"></i></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                  <li><a href="#">Discount</a></li>
                  <li><a href="#">Price Low</a></li>
                  <li><a href="#">Price High</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="sort-btn">   
              <div class="sort-dropdown dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Category: <span class="drp-name" data-bind="label">Any</span>
                  <span><i class="fa fa-sort-desc"></i></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li><a href="#">Fruits</a></li>
                  <li><a href="#">Vegetables</a></li>
                  <li><a href="#">Drinks</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-offset-2 col-md-4 col-sm-10 pad-lt-0">
            <div class="row">
              <div class="col-md-5 col-md-offset-3 col-sm-3 col-xs-6">
                <div class="product-display">                    
                  <form id="select-filter" action="#">
                    <div class="select-filter number">
                      <span>Show:</span>
                      <input type="text" value="8" name="qtybutton" class="cart-plus-minus-box">
                      <div class="inc qtybutton"> <i class="fa fa-sort-asc"></i></div>
                      <div class="dec qtybutton"><i class="fa fa-sort-desc"></i></div>
                    </div>
                  </form>               
                </div>
              </div>
              <div class="col-xs-2"> 
                <div class="grid-icon">
                  <a href="#" class="btn active" title="grid icon"><i class="fa fa-th"></i></a>
                </div>
              </div>
              <div class="col-xs-2 pad-lt-0">
                <div class="grid-icon">
                  <a href="#" class="btn" title="grid icon"><i class="fa fa-th-list"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
 
// get cookie cart

    ?>
            <?php
            
          if ($result->num_rows > 0) {
        
         // Display images
      
           while ($row = $result->fetch_assoc()) {
            ?>

                       <div class="col-md-3 col-sm-6">     
                        <div class="shop-products-block">     
                                     <div class='shop-products-img'>
                                     <?php  echo" <a href='http://localhost/e-commerce/shop/product_detial/?id={$row["p_id"]}' title='{$row["p_name"]}'><img src='product/{$row["p_image"]}' class='img-responsive'; alt='Product'></a>";?>
                                       </div>
                                      <div class='shop-products-dtl-main'>
                                       <div class='shop-products-dtl'>
                                       <?php echo"<h5 class='shop-products-name'><a href='http://localhost/e-commerce/shop/product_detial/?id={$row["p_id"]}' title='{$row["p_name"]}'>{$row["p_name"]}</a></h5>";?>
                                            <div class='shop-products-rating'>
                                                   <ul>
                                                       <li><i class='fa fa-star active'></i></li>
                                                      <li><i class='fa fa-star active'></i></li>
                                                     <li><i class='fa fa-star active'></i></li>
                                                     <li><i class='fa fa-star active'></i></li>
                                                        <li><i class='fa fa-star active'></i></li>
                                                     </ul>
                                           </div>
                                           <?php echo"<div class='shop-products-price'><span>₹100.00</span> {$row["p_rate"]}</div>";?>
                                          </div>
                                         <div class='shop-products-footer'>
                                         <div class='row'>
                                              <div class='col-xs-6'>
                                                <a href='javascript:void(0);' onclick="cart('<?php echo $row['p_id'] ?>')" title='Add To Cart'><i class='fa fa-shopping-basket'></i> Add to cart</a>
                                              </div> 
                                              <div class='col-xs-6'>
                                              <?php  echo"<a href='http://localhost/e-commerce/shop/product_detial/?id={$row["p_id"]}' title='View Detail'><i class='fa fa-file-text-o'></i> View detail</a>";?>
                                              </div>
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
        <div class="pagination-block">
        <div class="row">  
          <div class="col-xs-2">
            <div class="prev">
              <a href="#" class="btn btn-default" title="Previous"><i class="fa fa-long-arrow-left"></i></a>
            </div>
          </div>
          <div class="col-xs-8 text-center">
            <ul class="pagination">
              <li class="active"><a href="#" title="Pagination">1</a></li>
              <li ><a href="#" title="Pagination">2</a></li>
              <li><a href="#" title="Pagination">3</a></li>
              <li><a href="#" title="Pagination">4</a></li>
              <li><a href="#" title="Pagination">5</a></li>
            </ul>
          </div>
          <div class="col-xs-2 text-right">
            <div class="next">
              <a href="" class="btn btn-default" title="Next"><i class="fa fa-long-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end store -->

<!-- like what you see -->
  <section id="like" class="like-main-block text-center" style="background-image: url('../../images/bg/like-bg.jpg')">
    <div class="container">
      <div class="like-text-block">
        <h1 class="like-text-bg">Like What You See?</h1>
        <h2 class="like-text">Like What You See?</h2>
      </div>
      <a href="#" class="btn btn-default" data-toggle="modal" data-target="#contact-modal" title="Get In Touch">Get In Touch With Us!</a>
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
  include ('../../includes/footer.php');
  ?>
<!--end of footer-->
<script>

var elems = document.querySelectorAll('.active_link');
[].forEach.call(elems, function(el){
    el.classList.remove("active_link");
});

document.getElementById("nav_shop").className = "active active_link";


</script>

  <script type="text/javascript" src="../../js/jquery.min.js"></script>  <!-- jquery library js -->
  <script type="text/javascript" src="../../js/bootstrap.min.js"></script>  <!-- bootstrap js -->
  <script type="text/javascript" src="../../js/menumaker.js"></script> <!-- menumaker js -->
  <script type="text/javascript" src="../../js/owl.carousel.js"></script> <!-- owl carousel js -->
  <script type="text/javascript" src="../../js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js -->
  <script type="text/javascript" src="../../js/jquery.elevatezoom.js"></script> <!-- product zoom js -->
  <script type="text/javascript" src="../../js/price-slider.js"></script> <!-- price slider / filter js-->
  <script type="text/javascript" src="../../js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->  
  <script type="text/javascript" src="../../js/jquery.counterup.js"></script> <!-- facts count js-->
  <script type="text/javascript" src="../../js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
  <script type="text/javascript" src="../../js/jquery.appear.js"></script> <!-- progress bar js -->
  <script type="text/javascript" src="../../js/jquery.countdown.js"></script>  <!-- event countdown js -->
  <script type="text/javascript" src="../../js/imagesloaded.pkgd.js"></script> <!-- image load js-->
  <script type="text/javascript" src="../../js/masonry.pkgd.min.js"></script> <!-- masonry js -->
  <script type="text/javascript" src="../../js/paperstack.js"></script> <!-- paperstack js -->
  <!-- revolution js files -->
  <script type="text/javascript" src="../../revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="../../revolution/js/jquery.themepunch.revolution.min.js"></script>  
  <script type="text/javascript" src="../../revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="../../revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="../../revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="../../revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="../../revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="../../revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <!-- end revolution js files -->
  <script type="text/javascript" src="../../js/theme.js"></script><!-- custom js -->


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
</body>
</html>
