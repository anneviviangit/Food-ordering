<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
include_once 'product-action.php';
error_reporting(0);
session_start();
if(empty($_SESSION["user_id"]))
{
	header('location:login.php');
}
else{

    foreach ($_SESSION["cart_item"] as $item)
    {

    $item_total += ($item["price"]*$item["quantity"]);
    
        if($_POST['submit'])
        {

        $SQL="insert into users_orders(u_id,title,quantity,price) values('".$_SESSION["user_id"]."','".$item["title"]."','".$item["quantity"]."','".$item["price"]."')";

            mysqli_query($db,$SQL);
            
            $success = "Thank you! Your Order Placed successfully!";

        }

    }
                                        

?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Food On Wheels</title>
    <!-- Bootstrap core CSS -->
    
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
<body>
    <!--MPESA-->
<script>  

  (function(d, s, id){
     var js, mpesa = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://cdn.jsdelivr.net/gh/muaad/mpesa_button@master/src/button.min.js";
     mpesa.parentNode.insertBefore(js, mpesa);
   }(document, 'script', 'mpesa_btn_js'));
</script>


    <div class="site-wrapper">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.html"> <img class="img-rounded" src="" alt=""> FoodOnWheels</a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="category.php">Menu <span class="sr-only"></span></a> </li>
                            
							<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">signup</a> </li>';
							}
						else
							{
									
									
										echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">your orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">logout</a> </li>';
							}

						?>
							 
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                      
                        <li class="col-xs-12 col-sm-4 link-item"><span>1</span><a href="category.php">Choose your dish</a></li>
                        <li class="col-xs-12 col-sm-4 link-item "><span>2</span><a href="#">Pick Your favorite food</a></li>
                        <li class="col-xs-12 col-sm-4 link-item active" ><span>3</span><a href="checkout.php">Order and Pay online</a></li>
                    </ul>
                </div>
            </div>
			
                <div class="container">
                 
					   <span style="color:green;">
								<?php echo $success; ?>
										</span>
					
                </div>
            
			
			
				  
            <div class="container m-t-30">
			<form role="form" action="stk_initiate.php" method="POST" enctype="multipart/form-data">
                <div class="widget clearfix">
                    
                    <div class="widget-body">
                            <div class="row">
                                
                                <div class="col-sm-12">
                                    <div class="cart-totals margin-b-20">
                                        <div class="cart-totals-title">
                                            <h4>Cart Summary</h4> </div>
                                        <div class="cart-totals-fields">
										
                                            <table class="table">
											<tbody>
                                          
												 
											   
                                                    <tr>
                                                        <td>Cart Subtotal</td>
                                                        <td> <?php echo "Ksh ".$item_total; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping &amp; Handling</td>
                                                        <td>free shipping</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-color"><strong>Total</strong></td>
                                                        <td class="text-color"><strong> <?php echo "Ksh ".$item_total; ?></strong></td>
                                                    </tr>
                                                </tbody>
												
												
												
												
                                            </table>
                                        </div>
                                    </div>
                                    <!--cart summary-->
                                    <div class="payment-option">
                                        <div>
                                        <ul class=" list-unstyled">
                                            <li>
                                                <br>
                                                <br>
                                                <br>

                                                    <label for="Enter Block number" name ="Block">Enter Block number</label> 
                                                    <br>
                                                    <input type="text" id="block"  class="Block" placeholder="CBD, TATTON" required>
                                                    <br>
                                                    <br>
                                                    
                                                    <label for="room">Room Number</label><br>
                                                    <input type="number" name="room" placeholder="45" required >
                                                    <br>
                                                    <br>

                                                      <!--Phone number-->
                                                    <label for="number">Enter Your Mpesa Number</label>
                                                    <br>
                                                    <input id="phone" type="tel" name="phone" placeholder="254113047464" required/>
                                                    <input type="submit" class="btn" value="Verify" />
                                                    <br>
                                                    <br>

                                                    <label for="number"  ?></label>
                                                    <br>
                                                    
                                                    <input type="text" id="item_total" name="item_total" value="$item_total">''
                                                    
                                                    <!-- ^^  form code  ^^ -->
                                                    <div class="alert alert-info" style="display: none;">
                                                    </div>

                                            </li>
                                        </ul>
                                    </div>
                                        <p class="text-xs-center"> <input type="submit" onclick="" name="submit"  class="btn btn-outline-success btn-block" value="Order now" > </p>
                                    </div>
									
                                </div>
                            </div>
                       
                    </div>
                </div>
			 </form>
            </div>
            <section class="app-section">
                <div class="app-wrap">
                    <div class="container">
                        <div class="row text-img-block text-xs-left">
                            <div class="container">
                                <div class="col-xs-12 col-sm-6  right-image text-center">
                                    <figure> <img src="images/app.png" alt="Right Image"> </figure>
                                </div>
                                <div class="col-xs-12 col-sm-6 left-text">
                                    <h3>The Best Food Delivery App</h3>
                                    <p>Now you can make food happen pretty much wherever you are thanks to the free easy-to-use Food Delivery &amp; Takeout App.</p>
                                    <div class="social-btns">
                                        <a href="#" class="app-btn apple-button clearfix">
                                            <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                            <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                        </a>
                                        <a href="#" class="app-btn android-button clearfix">
                                            <div class="pull-left"><i class="fa fa-android"></i> </div>
                                            <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play store</span> </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                    
                   <!-- start: FOOTER -->
        <footer class="footer">
            <div class="container">
                <!-- top footer statrs -->
                <div class="row top-footer">
                    <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                        <a href="#"> <img src="" alt=""> FoodOnWheels </a> <br>
                        Order Delivery &amp; Take-Out </div>
                    <div class="col-xs-12 col-sm-2 about color-gray">
                        <h5>About Us</h5>
                        <ul>
                            <li><a href="about.php">About us</a> </li>
                            <li><a href="faq.php">FAQ</a> </li>
                            <li><a href="privacypolicy.php">privacypolicy</a> </li>
                            <li><a href="terms.php">Terms & conditions</a> </li>
                        </ul>
                    </div>
                   
                    <div class="col-xs-12 col-sm-3 popular-locations color-gray">
                        <h5>Popular locations</h5>
                        <ul>
                            <li>CBD </li>
                            <li>Tatton</li>
                            <li>Buruburu</li>
                            <li>Gate</li>
                            <li>Maringo</li>
                            <li>Ruwenzori </li>
                            <li>Barret</li>
                            <li>Taifa</li>
                            <li>Uganda</li>
                        
                        </ul>
                    </div>
                </div>
                <!-- top footer ends -->
                <!-- bottom footer statrs -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 payment-options color-gray">
                            <h5>Payment Options</h5>
                            <ul>
                                <li>
                                    <a href="#"> <img src="images/paypal.p1ng" alt="Paypal" height="50px" width="50px"> </a>
                                </li>
                                <li>
                                <a href="#"> <img src="images/mpesa1.png" alt="Mpesa" height="50px" width="50px" ></a>
                               </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                            <h5>Address</h5>
                            <p>We deliver around <em><b>Egerton university</b></em></p>
                            <h5>Phone: <a href="tel:+254717060785">+254717060785</a></h5> </div>
                      
                    </div>
                </div>
                <!-- bottom footer ends -->
            </div>
        </footer>
        <!-- end:Footer -->
        </div>
        <!-- end:page wrapper -->
         </div>

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodonwheels.min.js"></script>

    <script src="https://www.paypal.com/sdk/js?client-id=AZX9TOI0-pab2cmiBVeQu-NWEr95gOgFMk8MGGNFFNeq29Zo2-6nb_ncM3ttRx3qRP4f10t-jmS-RW4L&disable-funding=credit,card"></script>
    <script src="index.js"></script>

    <script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });

   const info = document.querySelector(".alert-info");

function process(event) {
 event.preventDefault();

 const phoneNumber = phoneInput.getNumber();

 info.style.display = "";
 info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
}
 </script>

</body>
<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 14327259;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/14327259/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

</html>

<?php
}
?>
