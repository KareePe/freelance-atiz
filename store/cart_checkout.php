<?php 
session_start();

// if not found session of cart
// redirect to store page
if(!$_SESSION['cart']){
	header("Location: index.php");
	exit;
}elseif ($_SESSION['step'] != 'checkout') {
    header("Location: cart.php");
    exit;
}

require_once(dirname(__FILE__).'/variables.php');

if ($_POST['submit'] == 'CONFIRM ORDER') {

    /// DB Config
    require_once(dirname(dirname(__FILE__)).'/inc/db.php');

    #########################  Insert data to store_order table  ######################### 

    $order_number = generate_order_no();

    $data_order = array(
                            'order_no'              => $order_number ,
                            'email'                 => $_SESSION['form']['email'] ,
                            'telephone'             => $_SESSION['form']['contact_phone'] ,
                            'tax'                   => '' ,
                            'total_paid'            => $_SESSION['cart']['total_price'] + 500  ,
                            'shipping_fullname'     => $_SESSION['form']['shipping_name'] ,
                            'shipping_address_1'    => $_SESSION['form']['shipping_address1'] ,
                            'shipping_address_2'    => $_SESSION['form']['shipping_address2'] ,
                            'shipping_city'         => $_SESSION['form']['shipping_city'] ,
                            'shipping_postcode'     => $_SESSION['form']['shipping_postal'] ,
                            'shipping_state'        => $_SESSION['form']['shipping_state'] ,
                            'shipping_country_code' => $_SESSION['form']['shipping_country'] ,
                            'shipping_method'       => '' ,
                            'shipping_cost'         => 500.00,
                            'shipping_date'         => '' ,
                            'payment_fullname'      => $_SESSION['form']['billing_name'] ,
                            'payment_address_1'     => $_SESSION['form']['billing_address1'] ,
                            'payment_address_2'     => $_SESSION['form']['billing_address2'] ,
                            'payment_city'          => $_SESSION['form']['billing_city'] ,
                            'payment_postcode'      => $_SESSION['form']['billing_postal'] ,
                            'payment_state'         => $_SESSION['form']['billing_state'] ,
                            'payment_country_code'  => $_SESSION['form']['billing_country'] ,
                            'payment_method'        => '' ,
                            'payment_type'          => '' ,
                            'payment_status'        => '' ,
                            'paypal_id'             => '' ,
                            'paypal_state'          => '' ,
                            'paypal_transaction_id' => '' ,
                            'ip'                    => getIp(),
                            'created_at'            => date('Y-m-d H:i:s', time()) ,
                            'updated_at'            => date('Y-m-d H:i:s', time()) ,
                        );

    $insert_id_order = insert('store_order', $data_order);

    #####################  Insert data to store_order_product table  #######################
    foreach ($_SESSION['cart']['order'] as $key => $product) {

        if($product['id'] != ''){

            $product_id = ($key == 'image_iq') ? $item_image_iq[$product['id']]['id'] : $item_software[$product['id']]['id'];
    
            $data_order_product = array(
                                            'order_id'         => $insert_id_order, 
                                            'product_id'       => $product_id,
                                            'product_quantity' => $product['qty'],
                                            'created_at'       => date('Y-m-d H:i:s', time()) 
                                       ); 

            insert('store_order_product', $data_order_product);
        }
    }
    ######################################################################################## 



    session_destroy();

    header("Location: finish.php?order_no=".$order_number );
    exit;
    
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
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,700" /> 
<?php require_once(dirname(dirname(__FILE__)).'/inc/include_js.php');?>
<script type="text/javascript">

$(function(){
  

	
});

</script>

<style type="text/css">
h5,.note{ font-weight: bold !important;} 
.left{ float: left; width: 140px}
</style>



<?php require_once(dirname(dirname(__FILE__)).'/header.php');?>



<div id="page">

<h2>Store</h2>



<form id="cart" action="" method="post" accept-charset="utf-8">
<table id="tb_cart" cellpadding="6" cellspacing="0" style="width:100%" border="0">

<tbody>
    <tr>
      <th style="text-align:left">Items</th>
      <th class="right">Item Price</th>
      <th class="right">Quantity</th>
      <th class="right">Sub-Total</th>
    </tr>

    <!-- Image Iq item row -->
    <?php if($_SESSION['cart']['order']['image_iq']['id']){ ?>
    <tr>
        <td class="first">
            <span class="item_img"><img src="images/<?php echo $item_image_iq[$_SESSION['cart']['order']['image_iq']['id']]['thumb']; ?>" height="97" alt="Scandock"></span>
            <div class="item_desc">
                <span class="item_name"><?php echo $item_image_iq[$_SESSION['cart']['order']['image_iq']['id']]['name']; ?></span> 
            </div>
        </td>
        <td class="right price" valign="top">$<?php echo number_format($item_image_iq[$_SESSION['cart']['order']['image_iq']['id']]['price']); ?></td>
        <td class="right" valign="top"><?php echo($_SESSION['cart']['order']['image_iq']['qty']) ?></td>
        <td class="right price" valign="top">$<?php echo(number_format($item_image_iq[$_SESSION['cart']['order']['image_iq']['id']]['price'] * $_SESSION['cart']['order']['image_iq']['qty'])) ?></td>
    </tr>
    <?php } ?>
    <!-- Image Iq item row /-->

    <!-- Software item row -->
    <?php if($_SESSION['cart']['order']['software']['id']){ ?>
    <tr>
        <td class="first">
            <span class="item_img"><img src="images/<?php echo $item_software[$_SESSION['cart']['order']['software']['id']]['thumb']; ?>" height="97" alt="Scandock"></span>
            <div class="item_desc">
                <span class="item_name"><?php echo $item_software[$_SESSION['cart']['order']['software']['id']]['name']; ?></span> 
            </div>
        </td>
        <td class="right price" valign="top">$<?php echo number_format($item_software[$_SESSION['cart']['order']['software']['id']]['price']); ?></td>
        <td class="right" valign="top"><?php echo($_SESSION['cart']['order']['software']['qty']) ?></td>
        <td class="right price" valign="top">$<?php echo(number_format($item_software[$_SESSION['cart']['order']['software']['id']]['price'] * $_SESSION['cart']['order']['software']['qty'])) ?></td>
    </tr>
    <?php } ?>
    <!-- Software item row /-->

    <!-- Shipping cost -->
    <tr>
      <td colspan="2" style="border-right:none; border-top:1px solid #D8D8D8">&nbsp;</td>
      <td class="right price" style=" border-top:1px solid #D8D8D8">Shipping cost</td>
      <td id="shipping_cost" class="right price" style=" border-top:1px solid #D8D8D8">$500</td>
    </tr>
    <!-- Shipping cost /-->

    <!-- Total Price -->
    <tr class="tr_total_price">
      <td colspan="2" style="border-right:none; border-top:1px solid #D8D8D8">&nbsp;</td>
      <td class="right" style=" border-top:1px solid #D8D8D8"><strong>Total</strong></td>
      <td id="total_price" class="right" style=" border-top:1px solid #D8D8D8"><strong>$<?php echo(number_format($_SESSION['cart']['total_price'] + 500)) ?></strong></td>
    </tr>
    <!-- Total Price /-->
</tbody>
</table>

<div class="info">

    <div class="contact_info">
        
        <h4 class="h-info">Contact Info</h4>
    
        <div class="form">
            <label id="label-email" for="email">
                <p class="note"><span>Email Address</span> – For your receipt and shipping updates.</p>
                <?php echo($_SESSION['form']['email']) ?>
                </label>
                
                <label id="label-contact-phone" for="contact_phone">
                        <p class="note"><span>Phone Number</span> – For shipping updates.</p>
                        <?php echo($_SESSION['form']['contact_phone']) ?>
                </label>
        </div>
        
        
    </div>

    <div class="payment" style="padding-bottom:20px">
        <h4 class="h-payment">Payment Info <span>Secure transaction</span></h4>
        
        <div class="form">
            
            <label  class="left inline" for="card_first_name" style="clear:both; margin-right:50px">
                <h5>First Name</h5>
                <?php echo($_SESSION['form']['card_first_name']) ?>
            </label>    
            
            <label for="card_last_name">
                <h5>Last Name</h5>
                <?php echo($_SESSION['form']['card_last_name']) ?>
            </label>    
                
        
        
            <label for="card_type" class="left inline" style="clear:both; margin-right:50px">
                <h5>Card Type</h5>

                <?php echo $credit_card_name[$_SESSION['form']['card_type']] ?>

            </label>
        
            <label for="card_number">
                <h5>Card Number</h5>
                XXXX-XXXX-XXXX-<?php echo substr($_SESSION['form']['card_number'],-4) ?>
                
            </label>

            <label class="left inline" for="card_exp_month" style="clear:both; margin-right:50px">
                <h5>Expiration</h5>
                <?php echo date('M',mktime(0,0,0,$_SESSION['form']['card_exp_month'],1,2011)).'/'. $_SESSION['form']['card_exp_year'] ?>
                
            </label>
            
            <label for="csc">
                <h5>Card Security Code (CSC)</h5>
                <?php echo($_SESSION['form']['csc']) ?>
            </label>
            
            
        
        </div>
        
    </div>
    

    <div class="address">
        
        <!-- Billing Address-->
        <div class="billing_address">
        
            <h4 class="h-billing">Billing Address</h4>
        
            <div class="form">
            
                <label id="label-billing-name" for="billing_name">
                    <h5>Full Name or Company Name</h5>
                    <?php echo($_SESSION['form']['billing_name']) ?>
                </label>
                
                <label id="label-billing-address1" for="billing_address1">
                    <h5>Street Address 1</h5>
                    <?php echo($_SESSION['form']['billing_address1']) ?>
                </label>

                <?php if($_SESSION['form']['billing_address2'] != ''){ ?>
                
                <label id="label-billing-address2" for="billing_address2">
                    <h5>Street Address 2 (optional)</h5>
                    <?php echo($_SESSION['form']['billing_address2']) ?>
                </label>

                <?php } ?>
                
                <label id="label-billing-country" for="billing_country">
                    <h5>Country</h5>

                    <?php echo(ucwords(strtolower($country_list[$_SESSION['form']['billing_country']]))) ?>

                </label>
                
                 <label id="label-billing-state" for="billing_state"  <?php if($_SESSION['form']['billing_country'] != 'US'){ ?>style="display:none"<?php } ?>>
                    <h5 id="billing-state-label">State</h5>
                    <?php echo($state_list[$_SESSION['form']['billing_state']]) ?>
                    
                </label>
                
                <label id="label-billing-city" for="billing_city">
                    <h5 id="billing-city-label">City</h5>
                    <?php echo($_SESSION['form']['billing_city']) ?>
                </label>
                
               
                
                <label id="label-billing-postal" for="billing_postal">
                    <h5 id="billing-postal-label">Zip Code</h5>
                    <?php echo($_SESSION['form']['billing_postal']) ?>
                </label>
            
            
            </div>
        
        </div>
        
        <!-- Shipping  Address /-->
        <div class="shipping_address">
        
            <h4 class="h-shipping">Shipping Address</h4>

            <div class="form">
            
                <label id="label-shipping-name" for="shipping_name">
                    <h5>Full Name or Company Name</h5>
                    <?php echo($_SESSION['form']['shipping_name']) ?>
                </label>
                
                <label id="label-shipping-address1" for="shipping_address1">
                    <h5>Street Address 1</h5>
                    <?php echo($_SESSION['form']['shipping_address1']) ?>
                </label>
                
                <?php if($_SESSION['form']['shipping_address2'] != ''){ ?>
                <label id="label-shipping-address2" for="shipping_address2">
                    <h5>Street Address 2 (optional)</h5>
                    <?php echo($_SESSION['form']['shipping_address2']) ?>
                </label>
                <?php } ?>
                
               <label id="label-shipping-country" for="shipping_country">
                    <h5>Country</h5>
                    <?php echo(ucwords(strtolower($country_list[$_SESSION['form']['shipping_country']]))) ?>
                    
                </label>

                <label id="label-shipping-state" for="shipping_state" <?php if($_SESSION['form']['shipping_country'] != 'US'){ ?>style="display:none"<?php } ?>>
                    <h5 id="shipping-state-label">State</h5>
                    <?php echo($state_list[$_SESSION['form']['shipping_state']]) ?>
                </label>
                            
                <label id="label-shipping-city" for="shipping_city">
                   <h5 id="shipping-city-label">City</h5>
                   <?php echo($_SESSION['form']['shipping_city']) ?>
                </label>
                
                <label id="label-shipping-postal" for="shipping_postal">
                   <h5 id="shipping-postal-label">Zip Code</h5>
                   <?php echo($_SESSION['form']['shipping_postal']) ?>
                </label>
            
            </div>
        
        </div>
        <!-- Shipping Address /-->
        
    
    </div>
    
    

</div>

<!-- form info /-->


<div class="submit">
    <input type="submit" class="btn-buy" name="submit" value="CONFIRM ORDER" />
</div>

</form>



</div> <!-- .page /-->



<?php require_once(dirname(dirname(__FILE__)).'/footer.php');?>
</body></html>