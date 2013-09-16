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

        <link rel="stylesheet" href="css/screen.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="wrapper">
            <div class="container">

                <div class="cart-lt">
                    <div class="cart-title">
                        <p>Enter Billing Address</p>
                    </div>
                    <div>
                        <p>
                            Please enter your contact information and billing address below. Your name and billing must be entered exactly as they appear on your credit card statement to avoid any delays in the authorization process.
                        </p>
                        <form class="customer-info">
                            <fieldset>
                                <label for="firstname-id"><span>*</span>First Name</label>
                                <input name="firstname" type="text" id="firstname-id" />
                            </fieldset>
                            <fieldset>
                                <label for="lastname-id"><span>*</span>Last Name</label>
                                <input name="lastname" type="text" id="lastname-id" />
                            </fieldset>
                            <fieldset>
                                <label for="email-id"><span>*</span>Email</label>
                                <input name="email" type="text" id="email-id" placeholder="name@email.com" />
                            </fieldset>
                            <fieldset>
                                <label for="password-id"><span>*</span>Password</label>
                                <input name="password" type="password" id="password-id" />
                                <p>must be at least 6 characters long</p>
                            </fieldset>
                            <fieldset>
                                <label for="confirmpass-id"><span>*</span>Confirm Password</label>
                                <input name="confirmpass" type="password" id="confirmpass-id" />
                            </fieldset>

                            <hr />
                            
                            <fieldset>
                                <label for="country"><span>*</span>Country</label>
                                <select name="country" id="country-id">
                                    <option value="select-country">Select Country</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <label for="address1-id"><span>*</span>Address 1</label>
                                <input name="address1" type="text" id="address1-id" />
                            </fieldset>
                            <fieldset>
                                <label for="address2-id">Address 2</label>
                                <input name="address2" type="text" id="address2-id" />
                            </fieldset>
                            <fieldset>
                                <label for="city-id"><span>*</span>City</label>
                                <input name="city" type="text" id="city-id" />
                            </fieldset>
                            <fieldset>
                                <label for="state-id"><span>*</span>State / Province</label>
                                <input name="state" type="text" id="state-id" />
                            </fieldset>
                            <fieldset>
                                <label for="zip-id"><span>*</span>Zip / Postal Code</label>
                                <input name="zip" type="text" id="zip-id" />
                            </fieldset>
                            <fieldset>
                                <label for="phone-id"><span>*</span>Telephone</label>
                                <input name="phone" type="text" id="phone-id" />
                            </fieldset>
                            <fieldset>
                                <label for="age-id"><span>*</span>Confirm Your Age</label>
                                <input name="age" type="checkbox" id="age-id" />
                                <p>Yes, I am at least 18 years of age. <a href="">Why required?</a></p>
                            </fieldset>
                            <ul>
                                <li><span>*</span>Ship all the items in my order to:</li>
                                <li><input name="billing-address" type="radio" value="" />The Above Billing Address (International Shipping not available)</li>
                                <li><input name="new-address" type="radio" value="" />Another Address (I will provide in next step)</li>
                                <li><input name="newsletter" type="checkbox" value="" />Yes, send me newsletters and notify me of sales and promotions</li>
                            </ul>
                            <div class="form-action">
                                <input name="checkout" type="button" value="Checkout" />
                            </div>
                        </form>

                    </div>
                </div>

                <aside class="cart-support">
                    <div class="support-bx">
                        <p class="support-bx-title">Returning Customer</p>
                        <p>
                            If you are a returning customer, please enter your e-mail and password below to enjoy a faster checkout.
                        </p>
                        <form>
                            <fieldset>
                                <label for="custemail">Email</label>
                                <input name="custemail" type="text" id="custemail-id" />
                            </fieldset>
                            <fieldset>
                                <label for="custpass">Password</label>
                                <input name="custpass" type="text" id="custpass-id" />
                            </fieldset>
                            <input name="signin" type="button" />
                        </form>
                        <a href="">Forgot your password?</a>
                        <div social-signin>
                            <p>Sign in using one of these Social Networks.</p>
                            <ul>
                                <li><a href="">Twitter</a></li>
                                <li><a href="">Facebook</a></li>
                                <li><a href="">Google+</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="support-bx">
                        <p class="support-bx-title">Cart Summary</p>
                        <dl class="cart-mini-summary">
                            <dt>1 Dangling Earrings</dt>
                            <dd>$00.00</dd>
                            <dt>1 Dangling Earrings</dt>
                            <dd>$00.00</dd>
                            <dt class="cart-mini-summary">Total Items:</dt>
                            <dd>$000.00</dd>
                        </dl>
                    </div>
                </aside>

            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
