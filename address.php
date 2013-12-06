<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Aisra.com</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/screen.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="wrapper">
            
            <?php include("includes/header.php"); ?>
            
            <?php include("includes/nav.php"); ?>

            <div class="container checkout-pgs">   
                <?php include("includes/breadcrumbs.php"); ?>
                <div class="co-left co-billaddress">
                    <h1>Enter Billing Address</h1>
                    <p>
                        Please enter your contact information and billing address below. Your name and billing address must be entered exactly as they appear on your credit card statement to avoid any delays in the authorization process.
                    </p>
                    <p class="required">
                        *Indicates required fields
                    </p>
 
                    <div>
                        <dl>
                            <dt><span>*</span>Country</dt>
                            <dd>
                                <select name="" id="">
                                    <option value="">USA</option>
                                </select>
                            </dd>
                            <dt><span>*</span>Address 1:</dt>
                            <dd><input type="text" /></dd>
                            <dt>Address 2:</dt>
                            <dd><input type="text" /></dd>
                            <dt><span>*</span>City:</dt>
                            <dd><input type="text" /></dd>
                            <dt><span>*</span>State/Province:</dt>
                            <dd>
                                <select name="" id="">
                                    <option value="">Please Select</option>
                                </select>
                            </dd>
                            <dt><span>*</span>Zip/Postal Code:</dt>
                            <dd><input type="text" /></dd>
                            <dt><span>*</span>Confirm Your Age:</dt>
                            <dd><input type="checkbox" id=""> Yes, I am at least 18 years of age. <a href="">Why Required</a></dd>
                            <dt>
                                <span>*</span>Ship all the items in my order to:
                                <ul>
                                    <li><input type="radio" name="aboveaddress" value="" /> The Above Billing Address (international shipping not available)</li>
                                    <li><input type="radio" name="anotheraddress" value="" /> Another Address (that I will provide in the next step)</li>
                                </ul>
                            </dt>
                        </dl>
                        <p>
                            <input type="checkbox" id="" /> Yes, send me newsletters and notify me of sales and promotions.
                        </p>
                    </div>
                </div>                
                <aside class="co-right">
                    <section class="co-returning">
                        <ul>
                            <li>Returning Customer</li>
                        </ul>
                        <div>
                            <p>
                                If you are a returning customer, please enter your e-mail and password below to enjoy a faster checkout.
                            </p>
                            <ul>
                                <li>Email:</li>
                                <li><input type="text" /></li>
                            </ul>
                            <ul>
                                <li>Password:</li>
                                <li><input type="password" /></li>
                            </ul>
                            <a href="">Sign In</a>
                            <a href="">Forgot Your Password?</a>
                        </div>
                    </section>

                    <section class="co-cart-sum">
                        <ul>
                            <li>Cart Summary</li>
                        </ul>
                        <div>
                            <ul>
                                <li>1 Dangling Earings</li>
                                <li><strong>$00.00</strong></li>
                            </ul>
                            <ul>
                                <li>1 Dangling Earings</li>
                                <li><strong>$00.00</strong></li>
                            </ul>
                            <ul class="co-total">
                                <li>Total 2 Items</li>
                                <li><strong>$000.00</strong></li>
                            </ul>
                        </div>
                    </section>
            
                </aside>

            </div>

            <?php include("includes/footer.php"); ?>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>
