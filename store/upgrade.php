<?php

header('Location: http://www.atiz.com/store');
exit;
?>

<?php 

session_start();

require_once(dirname(__FILE__).'/variables.php');



/// When press submit post
if(isset($_POST['submit']) == 'Place Order'){


    //$total_price = $item_image_iq[$_POST['product_iq']]['price'] +  $item_software[$_POST['product_software']]['price'];

    /*
        If user select product.

        Create session as name cart.
    */

    if($_GET['action'] == 'add'){
        

        /* Add product to cart */

        if($_GET['product_id'] > 0 && $_GET['product_id'] < 7){


            if(!isset($_SESSION['cart']['order'][$_GET['product_id']])){
                $_SESSION['cart']['order'][$_GET['product_id']] = array('qty' => 1 , 'product_price' => $item[$_GET['product_id']]['price']);
            }else{
                $_SESSION['cart']['order'][$_GET['product_id']]['qty'] = $_SESSION['cart']['order'][$_GET['product_id']]['qty'] + 1;
            }

            $total_price = 0;

            // Total Price 
            foreach ($_SESSION['cart']['order'] as $k => $v) {
                
                $total_price =  $total_price + ($v['qty'] * $v['product_price']);

            }

            $_SESSION['cart']['total_price'] = $total_price;


             header('location: cart.php');
            
             exit;
        }

    }   


}

//echo '<pre>'; print_r($_SESSION); echo '</pre>';
$pageId = "b01"; 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once(dirname(dirname(__FILE__)).'/header-global.php');?>
    <meta name="Identifier-URL" content="http://www.atiz.com" /> 
    <meta name="author" content="">
    <title>Store</title>
    <link href="//www.atiz.com/atiz1.ico" rel="shortcut icon" />
    <!-- Custom CSS -->
    <link href="https://www.atiz.com/store/css/main-responsive.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,700" /> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<?php require_once(dirname(dirname(__FILE__)).'/header-responsive.php');?>

<section class="top-store">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1>Contact Info</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                
                <div class="contact-person">
                    <p><span>Contact person:</span>Sarasin Booppanon</p>  
                </div>
                <div class="contact-email">
                    <p><span>Email:</span><a href="mailto:sarasin@atiz.com">sarasin@atiz.com</a></p>  
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="contact-phone">
                    <p><span>Tel: </span>+66 2683 6600</p>
                    <p><span>&nbsp;</span>+66 2683 6070-1</p>    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="software-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Software and Accessories</h3>
            </div>
        </div>
    </div>    
</section>

<section class="capture-software">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 software-img">                
                <div class="software-ss">
                    <img src="https://www.atiz.com/store/images/new-images/capture-software.png" class="img-responsive" alt="BookDrive Capture">
                </div>
                <h3>BookDrive Capture</h3>                     
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 sw-desc">
                    <div class="software-title">BookDrive Capture</div>    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 software-desc">
                        <p class="software-intro first-intro">BookDrive Capture is new major version of book scanning software from Atiz. 
                            Available only for customers purchasing Atiz products from 2015 or later.</p>
                    </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 software-desc">
                        <h4>Key features</h4>
                        <h5 class="topic-key sp-space">1. Works with Canon DSLRs and Canon RAW files (CR2 format)</h5>
                        
                        <h5 class="topic-key">2. Multi Language</h5>
                        <h5 class="topic-key">3. Smart preview</h5>
                        <p class="topic-desc">At any moment, you will see thumbnails of the past shots, full preview of the current shots as well as the magnified view of area of interest simultaneously. With just a quick glance, you are assured that images are sharp and up to the quality standard set.</p>
                        <h5 class="topic-key sp-space">4. Resume unfinished book</h5>
                        <p class="topic-desc">Go back to right where you left off to continue and finish the book. All the settings and files of the previous job will come back alive.</p>
                        <h5 class="topic-key sp-space">5. Instant crop</h5>
                        <p class="topic-desc">After images are shot, you can decide to crop them right away in BookDrive Capture software. This functionality is handy if you are not interested in post image processing. There is also a keyboard shortcut for "crop and shoot" so that the cameras proceed with the scanning with your minimum effort.</p>
                        <h5 class="topic-key">6. Metadata</h5>
                        <h5 class="topic-key">7. Timed lapse</h5>
                        <h5 class="topic-key">8. Easy insert and replace</h5>
                        
                    </div>    
                    <div class="row sell-detail">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 wp-buy">
                            <h5 class="buy-subject">Upgrade</h5>
                            <span class="note">(for existing owners of Atiz scanners)</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="submit" name="submit" class="btn-add-cart" value="BUY $1,500" />
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="GFSX7AU26TCBQ">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                            </form> 
                        </div>   
                    </div>
            </div>
        </div>
    </div>    
</section>

<section class="editor-software">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 software-img">                
                <div class="software-ss">   
                    <img src="https://www.atiz.com/store/images/new-images/editor-7-software.png" class="img-responsive" alt="BookDrive Editor Pro">
                </div>
                <h3>BookDrive Editor Pro 7</h3>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 sw-desc">
                    <div class="software-title">BookDrive Editor Pro 7</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 software-desc">
                        <p class="software-intro first-intro">BookDrive Editor Pro 7 is also our latest version for post-scan image processing software. 
                            Can be purchased separately. Will work great with images obtained from other scanners as well.</p>
                    </div>    
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 software-desc">
                        <h4>Key features</h4>
                        <h5 class="topic-key">1. Up to 60 times faster load time!</h5>
                        <p class="topic-desc">New, rewritten technique allows for much faster load time, up to 80x of previous version. 
                            You will finish projects much faster than before. </p>

                        <h5 class="topic-key sp-space">2. Designed to support super large image files from new camera models such as 5Ds. </h5>

                        <h5 class="topic-key sp-space">3. Works with new Nikon cameras and Nikon NEF format also.  </h5>
                        <h5 class="topic-key">4. New, improved Export tool with more granular options for file optimization.</h5>

                        <div class="editor-img">
                            <img src="https://www.atiz.com/store/images/new-images/editor-pro-screenshot.png" class="img-responsive" alt="BookDrive Editor Pro">    
                        </div>

                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 software-desc wp-buy">
                        <h5 class="buy-subject">Upgrade</h5>
                    <span class="note">(for existing owners of Atiz scanners)</span>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 software-desc">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">                
                            <input type="submit" name="submit" class="btn-add-cart" value="BUY $1,200" />                
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="GAEW6EHDJ62DJ">                
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                        </form> 
                    </div>    
            </div>
        </div>
    </div>    
</section>

<?php require_once(dirname(dirname(__FILE__)).'/footer-responsive.php');?>

<script type="text/javascript">
var js = jQuery.noConflict();
js(function(){
    /// Image IQ form
    js('.iq-list li').click(function(){  
        
        js('.iq-list li').removeClass('active');
        
        js(this)
            .addClass('active')
            .find('.radio').attr('checked', 'checked'); // Checked the radio button
    }); 

    /// Software License form
    js('.list').click(function(){    
        
        js('.list').removeClass('active');
        
        js(this)
            .addClass('active')
            .find('.radio').attr('checked', 'checked'); // Checked the radio button
    }); 
});

</script>

</body>
</html>