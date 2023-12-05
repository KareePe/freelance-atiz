<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta name="Identifier-URL" CONTENT="http://www.atiz.com"> 
<title>Store</title>
<meta name="Description" content="" />
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,700" /> 
<style type="text/css">
.dialog{ font-size: 1.4em }
.dialog h2{ color:#333; font-family:Arial, Helvetica, sans-serif; padding-bottom:0 !important }
.dialog h3{ color:#4f5254; font-family:Arial, Helvetica, sans-serif }
.dialog p{ color:#818385; padding-top:10px; line-height:1.6 }

</style>

<?php require_once(dirname(dirname(__FILE__)).'/inc/include_js.php');?>
<?php require_once(dirname(dirname(__FILE__)).'/header.php');?>

<div id="page">

<h2>Store</h2>


<div class="dialog">
    <h3>Your order number is: #<?php echo $_GET['order_no'] ?></h3>

    <p>Thank you for your order. An email confirmation was also automatically sent to the email address. 
    <br />If you have any questions about your order, please email <a href="mailto:info@atiz.com">info@atiz.com</a> or call us at +1 (800) 501 - 6035</p>

</div>

</div> <!-- .page /-->



<?php require_once(dirname(dirname(__FILE__)).'/footer.php');?>
</body></html>