<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faq JavaScript</title>
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="#">
        <title>Food on Wheels</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animsition.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/faq.css" rel="stylesheet">
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
                <!-- /.navbar -->
            </header>


    <div class="faq">
        <h1 class="title">
            Frequenty Asked Questions
        </h1>
        <main class="accordion">
            <div class="faq-img">
                <img src="img/faq.svg" alt="" class="accordion-img">
            </div>
            <div class="content-accordion">
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                            Do we have special offers?
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>Yes. On certain days we have special offers which can be accessed via the webiste.</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                            How do I cancel my order?
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>Please refer to our return and cancellation policy.</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                           How will my orders be delivered?
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>Orders are delivered directly by our deliverers. We will 
                        share the contact details and amount payable for all deliveries
                         via email and SMS</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                            When is the order delivered?
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>Our suppliers deliver the food within 30 minutes of the order
                         being placed. Please check details at the product page</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                            Is delivery free?
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>Yes. There are no delivery or handling charges.</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                            How do I check for meals available?
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>Please scroll to the meals section to check for categories of meals that we offer.</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                            How do I delete my account?
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>Currently it's not yet available but we are working on it to release this feature soon. Sorry for any <br>
                            inconvenience, should there be any unresolved issues kindly let us know via foodonwheelz01@gmail.com<br>
                            and we promise to offer you a good solution</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                            How much time do Ihave to return a meal to Food on Wheels?
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>Meals ordered via Food on Wheels are viable for return within 12 - 15 hrs after purchase</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                           In which locations do you offer delivery?
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>We offer delivery in the following areas:<br>
                        CBD, Tatton, Buruburu, Gate, Maringo, Ruwenzori, Barret, Taifa and Uganda</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                           How do I place an order?
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>Go to meals select a category, and it to your cart and then proceed to check-out</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                           What do I do if my meal is shipped to the wrong address?
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>You might want to change your delivery location to another place after you placed your order<br>
                            But we don't support that. So please specify the right address when you check out your order,
                             or cancel it before you make the payment within 30 minutes</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="faq.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodonwheels.min.js"></script> -->
</body>
</html>