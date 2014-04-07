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

                <div class="odr-notcomplete">
                    <ul>
                        <li><p>Your Order is not complete until you click</p></li>
                        <li>
                          <button class="btn-red-flat"><i class="icon-lock"></i>&nbsp;&nbsp; Submit My Order <i class="icon-circle-arrow-right"></i></button>
                        </li>
                    </ul>
                    <p><sup>**</sup>Once you click the submit button your order will be processed.</p>
                </div>

                <div class="co-left">
                  <h1>Payment Method</h1>
                    <div>
                        <p>Please note that all orders are subject to credit card approval and verification of billing address.</p>
                        <div class="payment-method">
                            <p><input name="credit-card" type="radio" value="" /> Pay with a Credit Card:</p>
                            <img src="img/card-logos.jpg" alt="Payment Method" />
                        </div>

                        <form class="payment-info">
                            <fieldset>
                                <label for="cardtype-id">Card Type:</label>
                                <select name="country" id="cardtype-id">
                                    <option value="select-card">Select Card</option>
                                    <option value="visa">Visa</option>
                                    <option value="mastercard">Mastercard</option>
                                    <option value="discover">Discover</option>
                                    <option value="americanexpress">American Express</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <label for="cardnum-id">Card Number:</label>
                                <input name="cardnum" type="text" id="cardnum-id" />
                                <label for="verification-id" class="cvv">CVV (Verification#):</label>
                                <input name="verification" type="text" id="verification-id" />
                                <a href="">What is this?</a>
                            </fieldset>
                            <fieldset>
                                <label>Expiration:</label>
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
                            <p><input name="paypal" type="radio" value="" /> Pay with PayPal:</p>
                            <img src="img/paypal.png" alt="Paypal" style="width: 100px;" />
                        </div>
                    </div> 

                    <div class="cart-summary">
                      <ul class="grid-container grid-hding">
                        <li class="grid-1">Quantity</li>
                        <li class="grid-3">Item Description</li>
                        <li class="grid-2">Item Price</li>
                        <li class="grid-2">Total Price</li>
                      </ul>
                      <ul class="grid-container">
                        <li class="grid-1">1</li>
                        <li class="grid-3 prod-co-summary">
                          <div class="grid-img"><img src="http://dummyimage.com/100x100/333333/fff.jpg" /></div>
                          <dl>
                            <dt><a href="">Product Name Here</a></dt>
                            <dd><span>Color:</span>Silver</dd>
                            <dd><span>Size:</span>Dangling</dd>
                            <dd><span>Product ID#:</span>1234</dd>
                          </dl>
                          <ul>
                            <li><strong>In Stock</strong></li>
                            <li>Leaves warehouse in 1 - 2 full days.</li>
                          </ul>
                        </li>
                        <li class="grid-2 item-price">$00.00</li>
                        <li class="grid-2 total-price">$00.00</li>
                      </ul>

                      <ul class="grid-container">
                        <li class="grid-1">1</li>
                        <li class="grid-3 prod-co-summary">
                          <div class="grid-img"><img src="http://dummyimage.com/100x100/333333/fff.jpg" /></div>
                          <dl>
                            <dt><a href="">Product Name Here</a></dt>
                            <dd><span>Color:</span>Silver</dd>
                            <dd><span>Size:</span>Dangling</dd>
                            <dd><span>Product ID#:</span>1234</dd>
                          </dl>
                          <ul>
                            <li><strong>In Stock</strong></li>
                            <li>Leaves warehouse in 1 - 2 full days.</li>
                          </ul>
                        </li>
                        <li class="grid-2 item-price">$00.00</li>
                        <li class="grid-2 total-price">$00.00</li>
                      </ul>
                      
                    </div>
                    <div class="odr-notcomplete cart-action">
                    <ul>
                        <li><p>Your Order is not complete until you click</p></li>
                        <li>
                          <button class="btn-red-flat"><i class="icon-lock"></i>&nbsp;&nbsp; Submit My Order <i class="icon-circle-arrow-right"></i></button>
                        </li>
                    </ul>
                    <p><sup>**</sup>Once you click the submit button your order will be processed.</p>
                </div>
                </div>                

                <aside class="co-right">
                    <section>
                        <ul>
                            <li>Cart Summary</li>
                        </ul>
                        <div class="co-cart-summary">
                            <dl>
                              <dt>1 Dangling Earrings In A Red And Blue Color</dt>
                              <dd>$00.00</dd>
                              <dt><strong>Shipping &amp; Handling</strong></dt>
                              <dd>$00.00</dd>
                              <dt><strong>Sales Tax</strong></dt>
                              <dd>$0.00</dd>
                            </dl>
                            <ul>
                              <li>Total Order Cost</li>
                              <li><strong>$000.00</strong></li>
                            </ul>
                        </div>
                    </section>
                    <section>
                      <ul>
                        <li>Billing Address</li>
                        <li class="edit"><a href="">Edit</a></li>
                      </ul>
                      <div>
                        <ul>
                          <li><strong>Devon Gonzales</strong></li>
                          <li>Address 1 Here, Address 2 Here</li>
                          <li>New York, NY 11414 - USA</li>
                          <li>954-000-0000</li>
                        </ul>
                      </div>
                    </section>
                    <section>
                      <ul>
                        <li>Shipping Address</li>
                        <li class="edit"><a href="">Edit</a></li>
                      </ul>
                      <div>
                        <ul>
                          <li><strong>Devon Gonzales</strong></li>
                          <li>Address 1 Here, Address 2 Here</li>
                          <li>New York, NY 11414 - USA</li>
                          <li>954-000-0000</li>
                        </ul>
                      </div>
                    </section>
                    <section>
                      <ul>
                        <li>Shipping Method</li>
                      </ul>
                      <div class="shipping-method">
                        <fieldset>
                          <input type="radio" name="overnight" value="overnight">
                          <p>
                            <strong>Overnight</strong> - 0 to 00 days - <strong>$00.00</strong>
                          </p>
                        </fieldset>
                        <fieldset>
                          <input type="radio" name="overnight" value="overnight">
                          <p>
                            <strong>2 Business Days</strong> - 0 to 00 days - <strong>$00.00</strong>
                          </p>
                        </fieldset>
                        <fieldset>
                          <input type="radio" name="overnight" value="overnight">
                          <p>
                            <strong>Standard Ground</strong> - 0 to 00 days - <strong>$00.00</strong>
                          </p>
                        </fieldset>
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
