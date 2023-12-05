<?php 
session_start();

// if not found session of cart
// redirect to store page
if(!$_SESSION['cart']){
	header("Location: index.php");
	exit;
}

require_once(dirname(__FILE__).'/variables.php');


/// Update qty and total price of Image IQ
if($_POST['action_update_iq'] == 'Update'){
    if(is_numeric($_POST['qty_image_iq'])){
        $_SESSION['cart']['order']['image_iq']['qty'] = $_POST['qty_image_iq'];
        $_SESSION['cart']['total_price'] = $item_image_iq[$_SESSION['cart']['order']['image_iq']['id']]['price'] * $_POST['qty_image_iq']  +  $item_software[$_SESSION['cart']['order']['software']['id']]['price'] * $_SESSION['cart']['order']['software']['qty'];
    }
}

/// Update qty and total price of Software
if($_POST['action_update_software'] == 'Update'){
    if(is_numeric($_POST['qty_software'])){
        $_SESSION['cart']['order']['software']['qty'] = $_POST['qty_software'];
        $_SESSION['cart']['total_price'] = $item_image_iq[$_SESSION['cart']['order']['image_iq']['id']]['price'] * $_SESSION['cart']['order']['image_iq']['qty']  +  $item_software[$_SESSION['cart']['order']['software']['id']]['price'] * $_POST['qty_software'];
    }
}

/// Verify Order
if($_POST['submit'] == 'Continue' || $_SESSION['step'] == 'confirm'){
   
    $_SESSION['step'] = 'confirm';


    /*------------ Verify Order -----------*/
    if ($_POST['submit'] == 'VERIFY ORDER') {

        /*------------ Validate Form -----------*/
        if($_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $form_error[] = 'Please provide a valid email address.';
        }

        if($_POST['contact_phone'] == ''){
            $form_error[] = 'Please, specify valid value : Contact Phone.';
        }

        if($_POST['card_first_name'] == ''){
            $form_error[] = 'First name is required.';    
        }

        if($_POST['card_last_name'] == ''){
            $form_error[] = 'Last name is required.';      
        }

        if($_POST['card_type'] == ''){
            $form_error[] = 'Card Type is required.';      
        }

        if($_POST['card_number'] == ''){
            $form_error[] = 'Card Number is required.';  
        }

        if($_POST['card_exp_month'] == ''){
            $form_error[] = 'Expiration month is required.';  
        }

        if($_POST['card_exp_year'] == ''){
            $form_error[] = 'Expiration year is required.';  
        }

        if($_POST['csc'] == ''){
            $form_error[] = 'Card Security Code (CSC) is required.';  
        }

        if($_POST['billing_name'] == ''){
            $form_error[] = 'Billing Name is required.';  
        }

        if($_POST['billing_address1'] == ''){
            $form_error[] = 'Billing Address1 is required.';  
        }

        if($_POST['billing_country'] == ''){
            $form_error[] = 'Billing country is required.';  
        }

        if($_POST['billing_state'] == '' && $_POST['billing_country'] == 'US'){
            $form_error[] = 'Billing State is required.';  
        }

        if($_POST['billing_city'] == ''){
            $form_error[] = 'Billing City is required.';  
        }

        if($_POST['billing_postal'] == ''){
            $form_error[] = 'Billing Postal is required.';  
        }

        if($_POST['shipping_name'] == ''){
            $form_error[] = 'Shipping Name is required.';  
        }

        if($_POST['shipping_address1'] == ''){
            $form_error[] = 'Shipping Address1 is required.';  
        }

        if($_POST['shipping_country'] == ''){
            $form_error[] = 'Shipping Country is required.';  
        }

        if($_POST['shipping_city'] == ''){
            $form_error[] = 'Shipping City is required.';  
        }

        if($_POST['shipping_state'] == '' && $_POST['shipping_country'] == 'US'){
            $form_error[] = 'Shipping State is required.';  
        }

        if($_POST['shipping_postal'] == ''){
            $form_error[] = 'Shipping Postal is required.';  
        }

        // Convert post to session
        foreach ($_POST as $key => $value) {
            $_SESSION['form'][$key] = $value; 
        }

        /// Redirect to checkout page
        if(!$form_error){   

            $_SESSION['step'] = 'checkout';

            header("Location: cart_checkout.php");
            exit;
        }



    }

    

}else{
    $_SESSION['step'] = '';
}





 //echo '<pre>'; print_r($_SESSION); echo '</pre>';


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta name="Identifier-URL" CONTENT="http://www.atiz.com"> 
<title>Store</title>
<meta name="Description" content="" />
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<link rel="stylesheet" type="text/css" href="http://www.atiz.com/core_js/fancybox/jquery.fancybox.css" />
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,700" /> 
<?php require_once(dirname(dirname(__FILE__)).'/inc/include_js.php');?>
<script type="text/javascript" src="http://www.atiz.com/core_js/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript">

$(function(){
  
    /*
     * Show state field when user choose USA country
     */ 
    
    $('#billing_country').change(function(){
        if($(this).val() == 'US'){
            $('#label-billing-state').show();
        }else{
            $('#label-billing-state').hide();
        }
    });
    
    
    $('#shipping_country').change(function(){
        if($(this).val() == 'US'){
            $('#label-shipping-state').show();
        }else{
            $('#label-shipping-state').hide();
        }
    });


    /*
     *  Shipping different than billing
     */
     
     $('#shippingSameThanBilling').click(function(){
         
         if($(this).is(':checked')){
             $('#shipping_name').val($('#billing_name').val());
             $('#shipping_address1').val($('#billing_address1').val());
             $('#shipping_address2').val($('#billing_address2').val());
             $('#shipping_country').val($('#billing_country').val());
             $('#shipping_city').val($('#billing_city').val());
             $('#shipping_state').val($('#billing_state').val());
             $('#shipping_postal').val($('#billing_postal').val());
         }else{
             $('#shipping_name').val('');
             $('#shipping_address1').val('');
             $('#shipping_address2').val('');
             $('#shipping_country').val('');
             $('#shipping_city').val('');
             $('#shipping_state').val('');
             $('#shipping_postal').val('');
         }
         
     });


    $('a#what-csc').fancybox();
	
});

</script>



<?php require_once(dirname(dirname(__FILE__)).'/header.php');?>



<div id="page">

<h2>Store</h2>

<?php if(isset($form_error)){ ?>
    <div class="errorm">

        <p>
            <?php foreach ($form_error as $key => $value) {  echo '- '.$value.'<br />';  } ?>
        </p>

    </div> 
<?php } ?>

<form id="cart" action="" method="post" accept-charset="utf-8">

<?php

    if($_SESSION['step'] != 'confirm'){ 
        require('table_cart.php'); 
    }else{
        require('table_cart_form.php'); 
    } 
?>

</form>



</div> <!-- .page /-->



<?php require_once(dirname(dirname(__FILE__)).'/footer.php');?>
</body></html>