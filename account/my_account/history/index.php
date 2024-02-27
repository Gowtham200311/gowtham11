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
  <link rel="icon" type="image/icon" href="../../../images/favicon/favicon.ico">
  <!-- favicon-icon -->
  <!-- theme style -->
  <link href="../../../css/bootstrap.min.css" rel="stylesheet" type="text/css"> <!-- bootstrap css -->
  <!-- revolution -->   
  <link rel="stylesheet" type="text/css" href="../../../revolution/css/settings.css"> <!-- revolution setting css -->
  <link rel="stylesheet" type="text/css" href="../../../revolution/css/layers.css">  <!-- revolution layer css --> 
  <link rel="stylesheet" type="text/css" href="../../../revolution/css/navigation.css">  <!-- revolution layer css -->
  <!-- end revolution -->
  <link href="../../../css/font-awesome.min.css" rel="stylesheet" type="text/css">  <!-- fontawesome css -->
  <link href="../../../css/linearicons.css" rel="stylesheet" type="text/css">  <!-- linear icons css -->
  <link href="../../../css/eleganticon.css" rel="stylesheet" type="text/css">  <!-- elegant icons css -->
  <link href="../../../css/organicfood.css" rel="stylesheet" type="text/css">  <!-- organicfood icons css -->
  <link href="../../../../../css?family=Great+Vibes|Lato:400,700,900|Playfair+Display:400,400i|Poppins:400,500,600,700" rel="stylesheet">  <!-- google font -->
  <link rel="stylesheet" type="text/css" href="../../../css/menumaker.css">  <!-- menu css -->
  <link href="../../../css/owl.carousel.css" rel="stylesheet" type="text/css">  <!-- owl carousel css -->
  <link href="../../../css/magnific-popup.css" rel="stylesheet" type="text/css">  <!-- magnify popup css -->
  <link href="../../../css/style.css" rel="stylesheet" type="text/css">  <!-- custom css -->
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
   include ('../../../includes/header.php');
   ?>
   <!--end of navbar-->
   <!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('../../../images/bg/page-banner.jpg');"> 
    <div class="container">
      <div class="banner-dtl">
        <h3 class="banner-heading">Order History</h3>
        
      </div>
    </div>
  </section>
<!-- end page banner -->
<!--  checkout -->
<section id="order-history" class="account-page">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4">
          <div class="customer-profile-main-block">
            <div class="customer-profile-block">
              <div class="row">
                <div class="col-md-4">
                  <div class="profile-img">
                    <img src="../../../images/clients/customer-01.jpg" class="img-responsive" alt="customer">
                  </div>
                </div>
                <div class="col-md-8">
                  <h5 class="customer-name">John Doe</h5>
                  <div class="ac-status">Premium Account</div>
                </div>
              </div>
            </div>
            <div class="ac-nav">
            <ul>
                <li ><a href="http://localhost/e-commerce/account/my_account/" title="My Account"><i class="fa fa-user-circle-o"></i>My Account</li>
                <li class="active"><a href="http://localhost/e-commerce/account/my_account/history/" title="Order History"><i aria-hidden="true" class="icon_cart_alt"></i>Order History</a></li>
                <li><a href="http://localhost/e-commerce/account/my_account/wallet/" title="Wallet"><i aria-hidden="true" class="icon_wallet"></i>Wallet</a></li>
                <li><a href="http://localhost/e-commerce/account/my_account/address/" title="Address Book"><i aria-hidden="true" class="icon_contacts_alt"></i>Address Book</a></li>
                <li><a href="http://localhost/e-commerce/account/my_account/change_password/" title="Change Password"><i class="fa fa-user-secret"></i>Change Password</a></li>
                <li><a href="http://localhost/e-commerce/account/my_account/returns/" title="Returns"><i class="fa fa-reply"></i>Returns</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-sm-8">
          <div class="order-history-table table-responsive">
            <table>
              <tr>
                <th colspan="2">Product</th>
                <th>Order ID</th>
                <th>Order Date</th>
                <th>Amount</th>
                <th>Quantity</th>
                <th>Order Status</th>
              </tr>
              <tr>
                <td><a href="http://localhost/e-commerce/shop/product_detial" title="Pomegranate"><img src="../../../images/shop/product-07.png" class="img-responsive" alt="Pomegranate"></a>
                </td><td><a href="http://localhost/e-commerce/shop/product_detial" class="order-pdt-name" title="Pomegranate">Pomegranate</a></td>
                <td>OS-14777</td>
                <td>20-06-2017</td>
                <td>$15.59</td>
                <td>2</td>
                <td>
                  <div class="order-status">Shipped on 21-06-2017</div>
                  <a href="#" class="btn btn-default" title="Track Now"><i class="fa fa-rocket"></i> Track Now</a>
                </td>
              </tr>
              <tr>
                <td><a href="http://localhost/e-commerce/shop/product_detial" title="Green Cabbage"><img src="../../../images/shop/product-08.png" class="img-responsive" alt="Green Cabbage"></a></td>
                <td><a href="http://localhost/e-commerce/shop/product_detial" class="order-pdt-name" title="Green Cabbage">Green Cabbage</a></td>
                <td>OS-14779</td>
                <td>20-06-2017</td>
                <td>$10.00</td>
                <td>1</td>
                <td>
                  <div class="order-status">Shipped on 21-06-2017</div>
                  <a href="#" class="btn btn-default" title="Track Now"><i class="fa fa-rocket"></i> Track Now</a>
                </td>
              </tr>
              <tr>
                <td><a href="http://localhost/e-commerce/shop/product_detial" title="Pineapple"><img src="../../../images/shop/product-11.png" class="img-responsive" alt="Pineapple"></a></td>
                <td><a href="http://localhost/e-commerce/shop/product_detial" class="order-pdt-name" title="Pineapple">Pineapple</a></td>
                <td>OS-14785</td>
                <td>20-06-2017</td>
                <td>$12.74</td>
                <td>4</td>
                <td>
                  <div class="order-status">Shipped on 21-06-2017</div>
                  <a href="#" class="btn btn-default" title="Track Now"><i class="fa fa-rocket"></i> Track Now</a>
                </td>
              </tr>
            </table>             
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end checkout -->
  <!-- like what you see -->
  <section id="like" class="like-main-block text-center" style="background-image: url('../../../images/bg/like-bg.jpg')">
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
  include ('../../../includes/footer.php');
  ?>
<!--end of footer-->
<script>

    var elems = document.querySelectorAll('.active_link');
    [].forEach.call(elems, function(el){
        el.classList.remove("active_link");
    });

    document.getElementById("nav_account").className = "active active_link";


</script>
  <script type="text/javascript"src="../../../js/jquery.min.js"></script>  <!-- jquery library js -->
  <script type="text/javascript"src="../../../js/bootstrap.min.js"></script>  <!-- bootstrap js -->
  <script type="text/javascript"src="../../../js/menumaker.js"></script> <!-- menumaker js -->
  <script type="text/javascript"src="../../../js/owl.carousel.js"></script> <!-- owl carousel js -->
  <script type="text/javascript"src="../../../js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js -->
  <script type="text/javascript"src="../../../js/jquery.elevatezoom.js"></script> <!-- product zoom js -->
  <script type="text/javascript"src="../../../js/price-slider.js"></script> <!-- price slider / filter js-->
  <script type="text/javascript"src="../../../js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->  
  <script type="text/javascript"src="../../../js/jquery.counterup.js"></script> <!-- facts count js-->
  <script type="text/javascript"src="../../../js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
  <script type="text/javascript"src="../../../js/jquery.appear.js"></script> <!-- progress bar js -->
  <script type="text/javascript"src="../../../js/jquery.countdown.js"></script>  <!-- event countdown js -->
  <script type="text/javascript"src="../../../js/imagesloaded.pkgd.js"></script> <!-- image load js-->
  <script type="text/javascript"src="../../../js/masonry.pkgd.min.js"></script> <!-- masonry js -->
  <script type="text/javascript"src="../../../js/paperstack.js"></script> <!-- paperstack js -->
  <!-- revolution js files -->
  <script type="text/javascript"src="../../../revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript"src="../../../revolution/js/jquery.themepunch.revolution.min.js"></script>  
  <script type="text/javascript"src="../../../revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript"src="../../../revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript"src="../../../revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript"src="../../../revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript"src="../../../revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript"src="../../../revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <!-- end revolution js files -->
  <script type="text/javascript"src="../../../js/theme.js"></script><!-- custom js -->
  
  <!-- end jquery -->
</body>
</html>