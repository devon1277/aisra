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
                    <div>
                        <div>
                            <p>
                        Please enter your contact information and billing address below. Your name and billing address must be entered exactly as they appear on your credit card statement to avoid any delays in the authorization process.
                    </p>
                    <p class="required">
                        *Indicates required fields
                    </p>
                        </div>
                          <div class="co-fields-wrap">
                            <div class="co-fields co-fields-lt">
                                <fieldset>
                                  <label for="firstname"><span>*</span>First Name:</label>
                                  <input type="text" placeholder="" name="firstname" id="firstname" />
                                </fieldset>
                                <fieldset>
                                  <label for="address1"><span>*</span>Last Name:</label>
                                  <input type="text" placeholder="" name="lastname" id="lastname" />
                                </fieldset>
                                <fieldset>
                                  <label for="emailaddress"><span>*</span>Email Address:</label>
                                  <input type="text" name="emailaddress" id="emailaddress" />
                                </fieldset>
                                <fieldset>
                                  <label for="password"><span>*</span>Password:</label>
                                  <input type="password" name="password" id="password" />
                                </fieldset>
                                <fieldset>
                                  <label for="confirmpass"><span>*</span>Confirm Password:</label>
                                  <input type="password" name="confirmpass" id="confirmpass" />
                                </fieldset>
                          </div>
                          <div class="co-social co-fields-rt">
                            <a href="" class="co-fbbtn"><img src="img/fb-connect-btn.jpg" alt="Facebook Connect" /></a>
                            <p>
                              Make it easier by connecting your FB account. We will automatically fill in some of these fields for you.
                            </p>
                          </div>
                        </div>
                        <div class="co-fields">
                            <hr />
                            <fieldset>
                              <label for="country"><span>*</span>Country</label>
                              <select name="country" id="">
                                <option value="">USA</option>
                              </select>
                            </fieldset>
                            <fieldset>
                              <label for="address1"><span>*</span>Address 1:</label>
                              <input type="text" name="address1" id="address1" />
                            </fieldset>
                            <fieldset>
                              <label for="address2">Address 2:</label>
                              <input type="text" name="address2" id="address2" />
                            </fieldset>
                            <fieldset>
                              <label for="city"><span>*</span>City:</label>
                              <input type="text" name="city" id="city" />
                            </fieldset>
                            <fieldset>
                              <label for="country"><span>*</span>State/Province</label>
                              <select name="country" id="">
                                <option value="">Please Select</option>
                              </select>
                            </fieldset>
                            <fieldset>
                              <label for="zipcode"><span>*</span>Zip/Postal Code:</label>
                              <input type="text" name="zipcode" id="zipcode" />
                            </fieldset>
                            <fieldset>
                              <label for="phone"><span>*</span>Telephone:</label>
                              <input type="text" name="phone" id="phone" />
                            </fieldset>
                            <fieldset>
                              <label for=""><span>*</span>Confirm your age:</label>
                              <p><input type="checkbox" /> Yes, I am at least 18 years of age. <a href="">Why Required?</a></p>
                            </fieldset>
                            <fieldset class="long">
                                <label for=""><span>*</span><strong>Ship all the items in my order to:</strong></label>
                                <ul>
                                    <li><input type="radio" name="aboveaddress" value="" /> The Above Billing Address (international shipping not available)</li>
                                    <li><input type="radio" name="anotheraddress" value="" /> Another Address (that I will provide in the next step)</li>
                                </ul>
                            </fieldset>
                            <p class="newsletter">
                              <input type="checkbox" id="" /> Yes, send me newsletters and notify me of sales and promotions.
                            </p>
                            <div class="cofields-btn">
                              <button class="btn-red-flat btn-lg">
                                Continue Checkout <i class="icon-circle-arrow-right"></i>
                              </button>
                            </div>
                        </div>
                    </div>
                </div>                
                <aside class="co-right">
                    <section class="co-returning">
                        <ul>
                            <li>Returning Customer</li>
                        </ul>
                        <div class="co-fields-signin">
                            <p>
                                If you are a returning customer, please enter your e-mail and password below to enjoy a faster checkout.
                            </p>
                            <fieldset>
                              <label for="email">Email:</label>
                              <input type="text" id="email" />
                            </fieldset>
                            <fieldset>
                              <label for="emailpassword">Password:</label>
                              <input type="password" id="emailpassword" />
                            </fieldset>
                            <div>
                              <button class="btn-red">Sign In</button>
                              <br />
                              <a href="">Forgot Your Password?</a>
                            </div>
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
                            <div class="sslsymbol"><img src="img/sslsymbol.jpg" alt="" /></div>
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
