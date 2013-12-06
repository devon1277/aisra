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
                <section class="co-left">
                    <h1>Shipping Options</h1>
                    <div>
                        <p>
                            Select Shipping Service. Some products are shipped directly from the country they are from while other are shipped from within the USA.
                        </p>
                        <dl>
                            <dt><strong>USA:</strong></dt>
                            <dd><input type="radio" name="overnight" value=""> <strong>Overnight</strong> - x to xx days - $xx.xx</dd>
                            <dd><input type="radio" name="2days" value=""> <strong>2 Businesss Days</strong> - x to xx days - $xx.xx</dd>
                            <dd><input type="radio" name="standard" value=""> <strong>Standard Ground</strong> - x to xx days - $xx.xx</dd>
                        </dl>
                        <dl>
                            <dt><strong>India:</strong></dt>
                            <dd><input type="radio" name="priority" value=""> <strong>Priority Mail - x to xx days - $xx.xx</strong></dd>
                            <dd><input type="radio" name="standard" value=""> <strong>Standard - x to xx days - $xx.xx</strong></dd>
                        </dl>
                        <a href="" class="btn-green">Continue Checkout <i class="icon-arrow-right"></i></a>
                    </div>
                </section>                
                <aside class="co-right">
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
                    <section class="co-shipad">
                        <ul>
                            <li>Shipping Address</li>
                            <li><a href="">Edit</a></li>
                        </ul>
                        <div>
                            <ul>
                                <li>First &amp; Last Name</li>
                                <li>Address 1</li>
                                <li>Address 2</li>
                                <li>City, State, Zip</li>
                                <li>Country</li>
                                <li>Ph: 000-000-0000</li>
                            </ul>
                        </div>
                    </section>
                    <section class="co-billad">
                        <ul>
                            <li>Billing Address</li>
                            <li><a href="">Edit</a></li>
                        </ul>
                        <div>
                            <ul>
                                <li>First &amp; Last Name</li>
                                <li>Address 1</li>
                                <li>Address 2</li>
                                <li>City, State, Zip</li>
                                <li>Country</li>
                                <li>Ph: 000-000-0000</li>
                            </ul>
                        </div>
                    </section>
                    <section>
                        <div>
                            <p>Payment Options</p>
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
