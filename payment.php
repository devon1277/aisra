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
                    <div class="form-action">
                        <ul>
                            <li>Your Order is not complete until you click</li>
                            <li><input name="submit-order" type="button" value="Submit My Order" /></li>
                        </ul>
                        <p><sup>**</sup>Once you click the submit button your order will be processed.</p>
                    </div>

                    <div class="cart-title">
                        <p>Enter Billing Address</p>
                    </div>
                    <div>
                        <p>Please note that all orders are subject to credit card approval and verification of billing address.</p>
                        
                        <div class="payment-method">
                            <input name="credit-card" type="radio" value="" />
                            <p>Pay with a Credit Card:</p>
                        </div>

                        <form class="payment-info">
                            <fieldset>
                                <label for="cardtype-id">Card Type</label>
                                <select name="country" id="cardtype-id">
                                    <option value="select-card">Select Card</option>
                                    <option value="visa">Visa</option>
                                    <option value="mastercard">Mastercard</option>
                                    <option value="discover">Discover</option>
                                    <option value="americanexpress">American Express</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <label for="cardnum-id">Card Number</label>
                                <input name="cardnum" type="text" id="cardnum-id" />
                                <label for="verification-id">CVV (Verification#)</label>
                                <input name="verification" type="text" id="verification-id" />
                                <a href="">What is this?</a>
                            </fieldset>
                            <fieldset>
                                <label>Expiration</label>
                                <select name="mth">
                                    <option value="mth">Select Month</option>
                                </select>
                                <select name="yr">
                                    <option value="yr">Select Year</option>
                                </select>
                            </fieldset>                            
                        </form>

                        <hr />

                        <div class="payment-method">
                            <input name="paypal" type="radio" value="" />
                            <p>Pay with PayPal:</p>
                        </div>
                    </div>

                    <div class="cart-summary">
                        <ul class="grid-container">
                            <li class="grid-1">Quantity</li>
                            <li class="grid-3">Item Description</li>
                            <li class="grid-2">Item Price</li>
                            <li class="grid-2">Total</li>
                        </ul>
                        <div class="grid-container">
                            <div class="grid-1">1</div>
                            <div class="grid-3">
                                <img src="http://dummyimage.com/100x100/333333/fff.jpg" />
                                <ul>
                                    <li><a href="">Product name will go here</a></li>
                                    <li><span>Color:</span>Silver</li>
                                    <li><span>Size</span>Dangling</li>
                                    <li><span>Product ID#</span>1234</li>
                                </ul>
                                <ul>
                                    <li><strong>In Stock</strong></li>
                                    <li>Leaves warehouse in 1 - 2 full days.</li>
                                </ul>
                            </div>
                            <div class="grid-2 item-price">
                                $00.00
                            </div>
                            <div class="grid-2 total-price">
                                $00.00
                            </div>
                        </div>

                        <div class="grid-container">
                            <div class="grid-1">1</div>
                            <div class="grid-3">
                                <img src="http://dummyimage.com/100x100/333333/fff.jpg" />
                                <ul>
                                    <li><a href="">Product name will go here</a></li>
                                    <li><span>Color:</span>Silver</li>
                                    <li><span>Size</span>Dangling</li>
                                    <li><span>Product ID#</span>1234</li>
                                </ul>
                                <ul>
                                    <li><strong>In Stock</strong></li>
                                    <li>Leaves warehouse in 1 - 2 full days.</li>
                                </ul>
                            </div>
                            <div class="grid-2 item-price">
                                $00.00
                            </div>
                            <div class="grid-2 total-price">
                                $00.00
                            </div>
                        </div>

                        <div class="form-action">
                            <ul>
                                <li>Your Order is not complete until you click</li>
                                <li><input name="submit-order" type="button" value="Submit My Order" /></li>
                            </ul>
                            <p><sup>**</sup>Once you click the submit button your order will be processed.</p>
                        </div>
                    </div>
                </div>

                <aside class="cart-support">
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

                    <div class="support-bx">
                        <p class="support-bx-title">Billing Address <span><a href="">Edit</a></span></p>
                        <ul>
                            <li>John Doe</li>
                            <li>Address 1, Address 2</li>
                            <li>City, State, Zip, Country</li>
                            <li>954-000-0000</li>
                        </ul>
                    </div>

                    <div class="support-bx">
                        <p class="support-bx-title">Shipping Address <span><a href="">Edit</a></span></p>
                        <ul>
                            <li>John Doe</li>
                            <li>Address 1, Address 2</li>
                            <li>City, State, Zip, Country</li>
                            <li>954-000-0000</li>
                        </ul>
                    </div>

                    <div class="support-bx">
                        <p class="support-bx-title">Shipping Method</p>
                        <ul class="ship-method">
                            <li>
                                <input name="overnight" type="radio" value="" />
                                <p>Overnight<br />x to xx days<br />$00.00</p>
                            </li>
                            <li>
                                <input name="days" type="radio" value="" />
                                <p>2 Business Days<br />x to xx days<br />$00.00</p>
                            </li>
                            <li>
                                <input name="standard" type="radio" value="" />
                                <p>Standard Ground<br />x to xx days<br />$00.00</p>
                            </li>
                        </ul>
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
