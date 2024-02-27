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
        <h3 class="banner-heading">Checkout</h3>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!--  checkout -->
  <section id="checkout" class="checkout-page checkout-main-block">
    <div class="container">
      <div class="row">



     
        <div class="col-sm-6">
          <form id="checkout-form" method='post'enctype='multipart/form-data'class="checkout-form" >
            <h4 class="checkout-page-heading">Delivery Address</h4>
            <?php
          //Database Connection
          $con = mysqli_connect("localhost","root","","e_commerce");
          $message = "";
          if(isset($_POST['first_name'])){
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $address = $_POST['address'];
            $city= $_POST['city'];
            $state= $_POST['state'];
            $phone= $_POST['phone'];
            $email_id= $_POST['email_id'];
            $pincode= $_POST['pincode'];
            $country= $_POST['country'];
            $sql ="insert into customer_detail(first_name,last_name, address, city, state,phone, email_id,pincode,country) values ('{$first_name}','{$last_name}','{$address}','{$city}','{$state}','{$phone}','{$email_id}','{$pincode}','{$country}')";
            if($con->query($sql)){
                $message = "<div class='alert alert-success'>New Record Created Successfully.</div>";
            }else{
              $message = "";
            }
          }
            ?>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input  name="first_name" type="text" class="form-control" id="first_name" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input name="last_name" type="text" class="form-control" id="last_name" required="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" name="address"class="form-control" id="address">
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="city">Town / City</label>
                  <input name="city" type="text" class="form-control" id="city" required="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="state">State</label>
                  <input name="state" type="text" class="form-control" id="state" required="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" name="phone"class="form-control" id="phone" required="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="email_id">Email</label>
                  <input type="email" name="email_id"class="form-control" id="email_id" required="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="pincode">Postcode</label>
                  <input type="text" name="pincode" class="form-control" id="pincode" required="">
                </div>                
              </div>   
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="country">Country</label>
                  <input type="text" name="country" class="form-control" id="country" required="">
                </div>                
              </div>
            </div>
            <div class="checkout-btn">
      				<button onclick="sub()" value="submit" class="btn btn-default">Save Address</button>
      				<a href="javascript:void(0);" onclick="sub()"class="cancel-text" title="Cancel">Cancel</a>
            </div>
          </form>
        </div>




        <div class="col-sm-6">
          <div class="order-block">
            <h4 class="checkout-page-heading">Payment Summary</h4>
            <div class="cart-total-block">
              <table class="cart-table-one">
                <tr>
                  <th class="cart-total-heading">Products</th>
                </tr>   
                <tr>
                  <td>Your Product Name <span>x3</span></td>
                  <td class="text-right">$20.00</td>
                </tr> 
                <tr>
                  <td>Your Product Name <span>x1</span></td>
                  <td class="text-right">$10.00</td>
                </tr> 
                <tr>
                  <td>Your Product Name <span>x5</span></td>
                  <td class="text-right">$80.00</td>
                </tr> 
                <tr>
                  <td><hr></td>
                  <td><hr></td>
                </tr>      
              </table> 
              <table class="cart-table-two">
                <tr>
                  <td>Subtotal :</td>
                  <td class="text-right">$110</td>
                </tr> 
                <tr>
                  <td>Shipping :</td>
                  <td class="text-right">$23</td>
                </tr> 
                <tr>
                  <td><hr></td>
                  <td><hr></td>
                </tr>
                <tr>
                  <th>Total</th>
                  <th class="text-right">$133</th>
                </tr>  
              </table>   
            </div>    
          </div> 
          <div class="payment">
		        <form id="payment" >
		          <div class="form-group">
			          <input type="radio" >
			          <label>Direct Bank Transfer</label>
			          <p>Your order won’t be shipped until the funds have cleared in our account</p>
		          </div>
		          <div class="form-group">
			          <input type="radio" >
			          <label>Cheque Payment</label>
		          </div>
		          <div class="form-group">
			          <input type="radio"  >
			          <label>Credit Card</label>
			          <img src="../../images/shop/credit-cards.jpg" class="img-responsive" alt="credit-card">
		          </div>
		          <div class="form-group">
			          <input type="radio" >
			          <label>Paypal</label>
		          </div>
		          <div class="checkout-btn">
        				<button onclick="call()"class="btn btn-default">Pay Now</button>
        				<a href="javascript:void(0);" class="cancel-text" title="Cancel">Cancel</a>
              </div>  
		        </form>
		      </div>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <script>
 function sub(){
 
    var first_name = document.getElementById('first_name').value;
    var last_name= document.getElementById('last_name').value;
    var address = document.getElementById('address').value;
    var city = document.getElementById('city').value;
    var state = document.getElementById('state').value;
    var phone = document.getElementById('phone').value;
    var email_id = document.getElementById('email_id').value;
    var pincode = document.getElementById('pincode').value;
    var country = document.getElementById('country').value;
    

    if (first_name === '' || last_name === '' ||address === ''||city === ''||state === ''||phone === ''||email_id === ''||pincode === ''||country=== '') {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please fill in all the details!'
        });
    } else {
     
        // Swal.fire({
        //     icon: 'success',
        //     title: 'Success!',
        //     text: 'Form submitted successfully!'
            
        // });
        alert("Form submitted Successfully!!");
      
        // You can perform further actions here, like submitting the form via AJAX
    }
   
}

    function call(){
      alert("Paied Successfully!!");
    }
  </script>
 
</body>
  
  <!-- end jquery -->
</body>
</html>