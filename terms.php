<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Terms and conditions</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link  rel="css/style_terms.css" href=" stylesheet">




 </head>

<body class="home">
    
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="" alt="">FoodOnWheels </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Meals <span class="sr-only"></span></a> </li>
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">signup</a> </li>';
							}
						else
							{
									//if user is login
									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">your orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">logout</a> </li>';
							}

						?>
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>
            <body>
    <div class="terms-box2">
        <div class="terms-text2">
        
            <h2>Terms Of Service</h2>
           
            <p>Greetings Users,</p>
<p>By accessing the FoodOnWheels website & FoodOnWheels   applications, you confirm your understanding of the Terms and Conditions & Privacy Policies
(hereinafter referred to as “this Agreement”).If you do not agree to this Agreement, you shall not use FoodOnWheels 
 Services. By completing the registration process, and clicking on the 
"I agree with the Terms and Conditions & Privacy Policies ", you agree to be bound by this Agreement and this Agreement takes effect.
The FoodOnWheels Services provides a place and opportunity for the sale of food between the seller and the user. The actual sales contract is directly between the seller and the user 
and FoodOnWheels is not a party to that or any other contract between the seller and the user and accepts no obligations in connection with any such contract.
 The seller and the user to such transaction will be entirely responsible for the sales contract between them, 
the listing of food, warranty of purchase, and the like.
FoodOnWheels shall have the right to change, upgrade, modify, limit or suspend service or its related feature. Please focus on the announcement on its own, without prior notice.
 FoodOnWheels shall have the right to further introduce new features, applications, or other services.
This Agreement is intended for Egerton Students  users only.</p>

<h2>Registration</h2>
<p>You may need your FoodOnWheels account to use certain FoodOnWheels Services, and you may be required to be logged into the account and have a 
valid payment method associated with it. If there is a problem with the payment method you are selected, alternative payment methods are also
 available for you to complete payment. You are responsible for maintaining the confidentiality of your account and password and for restricting 
others to have access to your account, 
and you agree to accept responsibility for all activities that occur under your account or password.</p>

<h2>PRIVACY AND AUTHORIZATION</h2>
<p> Your privacy is very important to us at FoodOnWheels. FoodOnWheels will keep strictly confidential of users’
     information and activities on website and application, such as browsing, shopping, placing orders, and sharing printing, 
which involves the user's real name/contact name, address, telephone, email, and other private information.
 Unless authorized by users or otherwise provided in this Agreement or by law, FoodOnwheels will not disclose 
 to the outside world of user privacy information.</p>

 <h2>COPYRIGHT</h2>
 <p>All content included in or made available through any FoodOnWheels Services, such as text, graphics, logos, button icons, images,  digital downloads, data compilations, 
software, etc is the property of FoodOnWheels  or its content suppliers and protected by international copyright laws. 
The compilation of all content included in or made available through any FoodOnWheels  Service is the exclusive property of FoodOnWheels 
 and protected by international copyright laws.
</p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h2>PROPERTY RIGHTS</h2>
<p>FoodOnwheels  is the only owner of all rights or legal licensee allowed to provide the FoodOnwheels 
     Services, which reflects the commercial secrets and intellectual 
property rights protected by relevant laws. All title, ownership, and intellectual property in relation 
to the FoodOnwheels  Services are hereby reserved by FoodOnwheels  and/or its affiliates.
 The trademarks of  “FoodOnwheels ” and relevant logos, icons, trade names,
  domain names and other marks (no matter registered or not)
 (hereinafter collectively the “Marks”) belong to FoodOnwheels  and/or its affiliates,
  and are subject to the legal protection of copyright,
  trademark rights,
 and other intellectual property rights. Unauthorized reproduction,
  modification, use, or publishing of the Marks is strictly prohibited.</p>

<h2>LICENSE AND ACCESS</h2>
<p>Subject to your compliance with this Agreement and any other requirements under the relevant laws and regulations,
 and your payment of any applicable fees, FoodOnWheels or its content providers grant you a limited, non-exclusive, non-transferable, 
non-sublicensable license to access and make personal and non-commercial use of the FoodOnWheels  Services.
 This license does not include any resale or commercial use of any FoodOnWheels  Services, or its contents; 
any collection and use of any product listings, descriptions, or prices; any derivative use of any FoodOnWheels  Services or its contents;
 any downloading, copying, or other use of account information for the benefit of any third party; or any use of data mining, robots, or similar data gathering and extraction tools.
 All rights not expressly granted to you in this Agreement are reserved and retained by FoodOnWheels  or its licensors, suppliers, publishers, rightsholders, or other content providers. 
No FoodOnWheels  Services, nor any part of any FoodOnWheels  Services, may be reproduced, duplicated, copied, sold, resold, visited, or otherwise exploited for any commercial purpose without 
express written consent of FoodOnWheels . You may not frame or utilize framing techniques to enclose any trademark, logo, or other proprietary information (including images, text, 
page layout, or form)
 of FoodOnWheels  without express written consent. You may not use any meta tags or any other "hidden text" utilizing FoodOnWheels 's 
name or trademarks without the express written consent of FoodOnWheels . 
You may not misuse the FoodOnWheels  Services. You may use the FoodOnWheels  Services only as permitted by law. 
The licenses granted by FoodOnWheels  will terminate if you do not comply with any provision of this Agreement or the relevant laws and regulations.
</p>

<h2>RETURNS, REFUNDS</h2>
<p>Users may apply for goods return and refund under certain conditions for the following items.
- Product description does not match;the wrong goods;
-counterfeit products;
-Parts or missing products (PART RECEIPT OF ORDER); defective food.
-At our discretion, a refund may be issued without requiring a return. In this situation, FoodOnWheels   does not require the item to be returned.
-Without limiting the generality of the foregoing, FoodOnWheels   does not accept returns for the following items:
-products not purchased from FoodOnWheels   (order serial numbers does not match);
-products that exceed the expiry date (exceed warranty period);

</p>

<h2>PAYMENT</h2>
<p>FoodOnWheels   doesn't collect payment from customers directly, and such services may be provided by other companies such as Safaricom (M-Pesa) and LipaPay (Card payment/ other mobile money collection).
 For more payment information, please refer to "Payments Information and Guidelines". Users shall make payment in accordance with such guidelines when they use FoodOnWheels   Services. 
Users can request invoices or receipts or relevant vouchers from the sellers they purchase products and third-party payment agencies if such agencies charge fees. FoodOnWheels   does not charge any fees and is not responsible for issuing any invoices or receipts or relevant vouchers.
Users should ensure that the payment information is accurate, and users are responsible for maintaining the confidentiality of payment account and password.
FoodOnWheels   has never entrusted any third party to purchase products and collect money for such purpose. Users can only purchase products through official channels and pay through official payment methods. FoodOnWheels   does not assume any responsibility for losses incurred during purchases and payments through other unofficial channels.
</p>

<h2>APPLICABLE LAW</h2>
<p> By using any FoodOnWheels   Services, you agree that all agreements, terms, and utility of the treaties or other legal documents shall be governed by Kenyan law without 
regard to principles of conflict of laws.  
</p>
<div>
   

        <h4>I Agree to the <span>Terms and conditions</span> and I read the Privacy Notice.</h4>
    
</div>
</div>
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
    <script src="js/foodpicky.min.js"></script> -->
</body>
</html>