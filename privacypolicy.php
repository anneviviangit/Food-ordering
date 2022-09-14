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
        <title>Privacy Policy</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animsition.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet"> 
        <link href="css/privacypolicy.css" rel="stylesheet">
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
                            <li class="nav-item"> <a class="nav-link active" href="category.php">Meals <span class="sr-only"></span></a> </li>
                           <!--<li class="nav-item"> <a class="nav-link active" href="login.php">Meals <span class="sr-only"></span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="registration.php">Meals <span class="sr-only"></span></a> </li>
                            
                           -->
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
            <!-- end of navbar-->
            <body>
    <div class="terms-box2">
        <div class="terms-text2">
            <h2>Privacy Policy</h2>
        <p>Food on Wheels is a service provided by Food on Wheels Group. 
            Protecting your personal data is very important to us. By visiting
             our website, you provide us with some personal data. This policy 
             explains how we use it. You can visit our website and explore it 
             without providing us with personal data.</p></br>

            <h2>What information do we collect about you?</h2>
            
            <p>We only collect personal information from you when you order goods or
             services on our website, when you complete any customer survey, or through 
             cookies.We collect this information in order to enable orders, such as name, 
             address, phone number, or payment information.</p></br>
            
            <h2>Cookies and Google Analytics</h2>
            
            Accepting cookies is not necessary to visit our website, but mandatory in order
             to complete correctly an order.What are cookies? Cookies are small text files 
             placed on your computer while visiting websites. They are necessary to have 
             websites work more efficiently or to provide information to the websites owners.
              We collect cookies to remember your IP address, so that you can save time when
               coming back on our website. To get more information about cookies, please visit
               www.allaboutcookies.org.</br>
            
            food.foodonwheels.co.ke uses Google Analytics, a web analytics service provided by
             Google, Inc. ("Google").Google Analytics uses "cookies" (see above). The information 
             generated by the cookie about your use of the website will be transmitted to and stored 
             by Google on servers in the United States. If this website anonymizes IP addresses, your 
             IP address will be truncated by Google within a EU member state or other EEA state before 
             being transmitted to the US. Only in exceptional situations will your full IP address be 
             transmitted to Google servers in the United States and truncated there. Google will use this
              information for the purpose of evaluating your use of the website, compiling reports on website
             activity for website operators and providing other services relating to website activity and internet 
             usage. Google will not associate your IP address with any other data held by Google. You may refuse the 
             use of cookies by selecting the appropriate settings on your browser, however please note that if you do 
             this you may not be able to use the full functionality of this website. By using this website, you consent
              to the processing of data about you by Google in the manner and for the purposes set out above. You can also
             prevent Google from collecting information (including your IP address) via cookies and processing this information
              by downloading this browser plugin and installing it: https://tools.google.com/dlpage/gaoptout.</br>
            
            
            
            <h2>How will we use the information we collect from you?</h2>
            
            <p>We collect and use your personal data on secured servers. We ask third organisms
                 to check and certify our confidentiality principles.Information that we collect 
                 from you is used to process your order and to manage your account. We may also
                 use your information to email you about other products or services that we think
                 may be of interest to you. In processing your order we may send your information
                 to credit reference and fraud prevention agencies, or to third companies 
                 (restaurants and delivering companies). From time to time we may send your 
                 information to third parties which we consider may have goods or services which are 
                 of interest to you. If you do not wish to be contacted by third parties please email
                 us at foodonwheelz01@gmail.com.</p></br>
            
            <h2>Access to your information</h2>
            
            <p>At any time, you can request a copy of the information we hold on you. Simply contact 
               us at foodonwheelz01@gmail.com. We will ask you a small charge in order to process your
               request.</p></br>
            
            <h2>Other Websites</h2>
            
           <p>Our website may have links to other websites. This privacy policy only applies to this website.
             You should therefore read the privacy policies of the other websites when you are using those sites.</p></br>

             </div>
             </div>
             </div>
             </div>
             </div>
             </section>
            
    
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
    