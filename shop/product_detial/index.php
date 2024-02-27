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

if(isset($_GET["id"])){ 
    $id = $_GET["id"];
    $sql = "SELECT * FROM products WHERE  p_id='$id'";}
// Retrieve image data from the database
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$image ="http://localhost/e-commerce/shop/shopping/product/$id.png"; 
$name=$row['p_name'];
$detail=$row['p_detail'];
$rate=$row['p_rate'];
?>
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
<section id="page-banner" class="page-banner" style="background-image: url('../../images/bg/page-banner.jpg');"> 
    <div class="container">
      <div class="banner-dtl">
        <h3 class="banner-heading">Product Detail</h3>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!--  checkout -->
<section id="product-detail" class="product-detail-page">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="product-desc-img">
            <img id="zoom-01" <?php echo"src='$image'" ?>class="img-responsive" alt="product-desc-1" data-zoom-image="images/shop/product-full-01.jpg">
          </div> 
          <br>
          <br>
          <br>
          <br>
          <?php echo"<h3 class='product-dtl-name'>$name</h3>" ?>
            <div class="product-dtl-price"><span>₹100.00</span><?php echo"$rate" ?></div>
            <div class="product-dtl-rating-block">
              <div class="shop-products-rating">
                <ul>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star-half-o"></i></li>
                </ul>
              </div>
              <div class="rating-text-two">
                <span><a href="#" title="Reviews">(Based on 17 reviews)</a></span><a href="#" title="Write A Review"><i aria-hidden="true" class="icon_pencil-edit"></i> Write a review</a>
              </div>
            </div>
            <div class="product-desc">
            <?php echo" <p><br>$detail<br><a href='#' title='Read More'>Read more...</a></p>" ?>
            </div>          
        </div>
        <div class="col-sm-6">
          <div class="product-page-dtl-block">
            <div class="product-commitment-block">
              <div class="row">
                <div class="col-xs-2">
                  <div class="product-commitment-icon">
                    <i aria-hidden="true" class="icon_pin_alt"></i>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="product-commitment">We commit will send this product in 3 days</div>
                </div>
              </div>
            </div>
            <div class="product-commitment-block">
              <div class="row">
                <div class="col-xs-2">
                  <div class="product-commitment-icon">
                    <i aria-hidden="true" class="icon_currency"></i>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="product-commitment">Return purchased item and get all money back</div>
                </div>
              </div>
            </div>
            <div class="product-commitment-block">
              <div class="row">
                <div class="col-xs-2">
                  <div class="product-commitment-icon">
                    <i aria-hidden="true" class="icon_star_alt"></i>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="product-commitment">Buy this product and earn 10 special loyalty points</div>
                </div>
              </div>
            </div>
            <hr>
            <div class="product-dtl-btn-main-block">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-8 col-xs-6">
                      <div class="product-display">                    
                        <form id="product-display" action="#">
                          <div class="select-filter number">
                            <span>Quantity:</span>
                            <input type="text" value="9" name="qtybutton" class="cart-plus-minus-box">
                            <div class="inc qtybutton"> <i class="fa fa-sort-asc"></i></div>
                            <div class="dec qtybutton"><i class="fa fa-sort-desc"></i></div>
                          </div>
                        </form>               
                      </div>
                    </div>
                    <div class="col-md-4 col-xs-6 pad-lt-0">
                      <div class="sort-btn">   
                        <div class="sort-dropdown dropdown">
                          <button class="btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <span class="drp-name" data-bind="label">1 kg</span>
                            <span><i class="fa fa-sort-desc"></i></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                            <li><a href="#" title="dropdown">2 kg</a></li>
                            <li><a href="#" title="dropdown">5 kg</a></li>
                            <li><a href="#" title="dropdown">10 kg</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="or-text">or</div>
                  <div class="sort-btn">   
                    <div class="sort-dropdown dropdown">
                      <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Choose Box: <span class="drp-name" data-bind="label">10kg</span>
                        <span><i class="fa fa-sort-desc"></i></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a href="#" title="dropdown">20kg</a></li>
                        <li><a href="#" title="dropdown">30kg</a></li>
                        <li><a href="#" title="dropdown">50kg</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 pad-lt-0 pad-rt-0">
                  <div class="coupon-box-block">
                    <div class="coupon-box">
                      <form id="coupon-form" class="coupon-form" action="#">
                        <input type="text" id="coupon" class="form-control" placeholder="Enter Coupon Code">
                      </form>
                    </div>
                    <div class="in-stock-text">
                      <i class="fa fa-check-square"></i> In stock
                    </div>
                  </div>
                  <div class="cart-btn-block">
                    <div class="add-cart-btn-two">
                      <a href="javascript:void(0);" class="btn btn-default" onclick="cart('<?php echo $id  ?>')"  title="Add To Cart"><i class="fa fa-shopping-basket"></i> Add to cart</a>
                    </div>
                  </div>
                  <div class="wishlist-btn">
                    <a href="#" class="btn btn-default" title="Wishlist"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="product-info">
              <ul>
                <li><span><i class="fa fa-table"></i> Sku: </span>#ABC456-123-M</li>
                <li><span><i class="fa fa-clock-o"></i> Expiry Date: </span>01/0/2016</li>
                <li><span><i class="fa fa-pencil-square"></i> Categories: </span>Vegetable</li>
                <li><span><i class="fa fa-bookmark"></i> Tags: </span><a href="#" title="Carbohydrates">Carbohydrates, </a><a href="#">Fats, </a><a href="#" title="Minerals">Minerals, </a><a href="#" title="Water">Water, </a><a href="#">Nutrition, </a><a href="#" title="Manufacture">Manufacture, </a><a href="#" title="Food">Food</a></li>
                <li><span class="share-block"><i class="fa fa-share-alt"></i> Share: </span></li>
                <li class="social-icon">
                  <ul>
                    <li><a href="#" title="Facebook"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fa fa-twitter-square"></i></a></li>
                    <li><a href="#" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
                    <li><a href="#" title="Google Plus"><i class="fa fa-google-plus-square"></i></a></li>
                    <li><a href="#" title="Behance"><i class="fa fa-behance-square"></i></a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="product-dtl-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
          <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews (2)</a></li>
          <li role="presentation"><a href="#use" aria-controls="use" role="tab" data-toggle="tab">How to eat</a></li>             
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="description">
          <p>Uniquely transform out-of-the-box human capital before client-centered mindshare. Dynamically implement professional platforms and an expanded array of testing procedures. Objectively benchmark high-payoff results for cross-unit mindshare.</p>
          <p>Uniquely transform out-of-the-box human capital before client-centered mindshare. Dynamically implement professional platforms and an expanded array of testing procedures. Objectively benchmark high-payoff results for cross-unit mindshare.</p>
          <ul>
            <li>High Quality Products</li>
            <li>6 Months Life</li>
            <li>FSSAI Approved Products Only</li>
            <li>Chemical Free</li>
            <li>Produced With Organic Farming</li>
          </ul>
          </div>
          <div role="tabpanel" class="tab-pane" id="reviews">
            <div class="blog-comment">
              <div class="row">
                <div class="col-xs-10">
                  <div class="media"> 
                    <div class="media-left">
                      <a href="#"><img src="../../images/shop/review-01.jpg" class="media-object" alt="comment-client-01"></a> 
                    </div> 
                    <div class="media-body"> 
                      <div class="media-heading-block">
                        <h6 class="media-heading">Johnathan Doe - <span>posted 2 minutes ago</span></h6> 
                        <div class="shop-products-rating">
                          <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                      </div>
                      <p>Ad sumo admodum tincidunt cum. Mei et ullum lobortis, virtute accusamus pertinacia ne vim. At summo aliquando ius. Sea ad munere nullam admodum. Quo legere vivendo pericula et, ea aliquam placerat ullamcorper mei. Vide tractatos ei eos. Duo dicta commune intellegam cu, cu eum partem omnesque prodesset. Mea eripuit voluptatum in. Congue aperiam maiestatis et mea, nih</p>
                      <div class="media comments-reply">
                        <div class="media-left"> 
                          <a href="#"><img src="../../images/shop/review-02.jpg" class="media-object" alt="comment-client-02"></a> 
                        </div> 
                        <div class="media-body"> 
                          <div class="media-heading-block">
                            <h6 class="media-heading">Susan Muscluas - <span>posted 3 hours ago</span></h6>
                            <div class="shop-products-rating">
                              <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                              </ul>
                            </div>
                          </div>
                          <p>Ad sumo admodum tincidunt cum. Mei et ullum lobortis, virtute accusamus pertinacia ne vim. At summo aliquando ius. Sea ad munere nullam admodum. Quo legere vivendo pericula et, ea aliquam placerat ullamcorper mei. Vide tractatos ei eos. Duo dicta commune intellegam cu, cu eum partem omnesque prodesset. Mea eripuit voluptatum in. Congue aperiam maiestatis et mea, nihil</p>
                        </div> 
                      </div> 
                    </div> 
                  </div>
                </div>
                <div class="col-xs-2">
                  <div class="media-reply-block">
                    <div class="media-reply"> 
                      <a href="#" title="Reply"><i class="fa fa-mail-forward"></i> Reply</a>
                    </div>
                    <div class="media-reply"> 
                      <a href="#" title="Reply"><i class="fa fa-mail-forward"></i> Reply</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="blog-comment-send">
              <h5 class="comments-heading">Post a review</h5>
              <p>Fill out all required fields to send a message. You have to login to your wordpress account to post any comment. Please don´t spam.<br>Thank you!</p>
              <form id="comment-form" class="comment-form" action="#">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name...">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="youremail@email.com">
                    </div> 
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject (Optional)">
                    </div> 
                  </div>
                </div>
                <div class="message">
                  <textarea class="form-control" name="mesaage" rows="3" placeholder="Type your message here..."></textarea>
                </div>
                <button type="submit" class="btn btn-default">Post Comment</button>              
              </form>     
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="use">                
            <p>Uniquely transform out-of-the-box human capital before client-centered mindshare. Dynamically implement professional platforms and an expanded array of testing procedures. Objectively benchmark high-payoff results for cross-unit mindshare. </p>
            <p>Uniquely transform out-of-the-box human capital before client-centered mindshare. Dynamically implement professional platforms and an expanded array of testing procedures. Objectively benchmark high-payoff results for cross-unit mindshare. </p>        
          </div>
        </div>
      </div>
    </div>


    <?php
  $conn->close();
                      ?>
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
 
<!-- end checkout -->
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
  <script type="text/javascript"src="../../js/jquery.min.js"></script>  <!-- jquery library js -->
  <script type="text/javascript"src="../../js/bootstrap.min.js"></script>  <!-- bootstrap js -->
  <script type="text/javascript"src="../../js/menumaker.js"></script> <!-- menumaker js -->
  <script type="text/javascript"src="../../js/owl.carousel.js"></script> <!-- owl carousel js -->
  <script type="text/javascript"src="../../js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js -->
  <script type="text/javascript"src="../../js/jquery.elevatezoom.js"></script> <!-- product zoom js -->
  <script type="text/javascript"src="../../js/price-slider.js"></script> <!-- price slider / filter js-->
  <script type="text/javascript"src="../../js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->  
  <script type="text/javascript"src="../../js/jquery.counterup.js"></script> <!-- facts count js-->
  <script type="text/javascript"src="../../js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
  <script type="text/javascript"src="../../js/jquery.appear.js"></script> <!-- progress bar js -->
  <script type="text/javascript"src="../../js/jquery.countdown.js"></script>  <!-- event countdown js -->
  <script type="text/javascript"src="../../js/imagesloaded.pkgd.js"></script> <!-- image load js-->
  <script type="text/javascript"src="../../js/masonry.pkgd.min.js"></script> <!-- masonry js -->
  <script type="text/javascript"src="../../js/paperstack.js"></script> <!-- paperstack js -->
  <!-- revolution js files -->
  <script type="text/javascript"src="../../revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript"src="../../revolution/js/jquery.themepunch.revolution.min.js"></script>  
  <script type="text/javascript"src="../../revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript"src="../../revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript"src="../../revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript"src="../../revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript"src="../../revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript"src="../../revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <!-- end revolution js files -->
  <script type="text/javascript"src="../../js/theme.js"></script><!-- custom js -->
  <script type="text/javascript">
  // Revolution js
    var tpj=jQuery;
    var revapi1066;
    tpj(document).ready(function() {
      if(tpj("#rev_slider_1066_1").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_1066_1");
      }
      else
      {
        revapi1066 = tpj("#rev_slider_1066_1").show().revolution({
        sliderType:"standard",
        jsFileLocation:"//server.local/revslider/wp-content/plugins/revslider/public/assets/js/",
        sliderLayout:"auto",
        delay:20000,
        navigation: {
          keyboardNavigation:"off",
          keyboard_direction: "horizontal",
          mouseScrollNavigation:"off",
          mouseScrollReverse:"default",
          onHoverStop:"off",
          touch:{
            touchenabled:"on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: false
          },
          arrows: {
            style: "hebe",
            enable: true,
            hide_onmobile: true,
            hide_onleave: false,
            tmp: '<div class="tp-title-wrap"> <span class="tp-arr-titleholder">{{title}}</span>    <span class="tp-arr-imgholder"></span> </div>',
            left: {
                h_align: "left",
                v_align: "center",
                h_offset: 0,
                v_offset: 0
            },
            right: {
                h_align: "right",
                v_align: "center",
                h_offset: 0,
                v_offset: 0
            }
          },
        },
        responsiveLevels:[1240,1024,778,480],
        visibilityLevels:[1240,1024,778,480],
        gridwidth:[1240,1240,1240,1280],
        gridheight:[868,768,960,720],
        lazyType:"none",
        parallax: {
          type:"mouse",
          origo:"slidercenter",
          speed:2000,
          levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
          type:"mouse",
          disable_onmobile:"on"
        },
        shadow:0,
        spinner:"off",
        stopLoop:"off",
        stopAfterLoops:1,
        stopAtSlide:0,
        shuffle:"off",
        autoHeight:"off",
        fullScreenAutoWidth:"off",
        fullScreenAlignForce:"off",
        fullScreenOffsetContainer: ".header",
        fullScreenOffset: "60px",
        disableProgressBar:"on",
        hideThumbsOnMobile:"off",
        hideSliderAtLimit:0,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        debugMode:false,
        fallbacks: {
          simplifyAll:"off",
          nextSlideOnWindowFocus:"off",
          disableFocusListener:false,
          }
        });
      }
    });
    // Paper Stack Js     
      var stack = $('.stack').paperstack({});
      $('#next').click(stack.next);
      $('#prev').click(stack.previous);        
  </script>



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




  <!-- end jquery -->
</body>
</html>