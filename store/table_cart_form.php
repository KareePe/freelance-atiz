

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
            <span class="item_img"><img src="images/<?php echo $item_image_iq[$_SESSION['cart']['order']['image_iq']['id']]['thumb']; ?>" height="97" alt=""></span>
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
            <span class="item_img"><img src="images/<?php echo $item_software[$_SESSION['cart']['order']['software']['id']]['thumb']; ?>" height="97" alt=""></span>
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


<!-- form info -->

<div class="info">

    <div class="contact_info">
        
        <h4 class="h-info">Contact Info</h4>
    
        <div class="form">
            <label id="label-email" for="email">
                <p class="note"><span>Email Address</span> – For your receipt and shipping updates.</p>
                <input id="email" maxlength="99" name="email" class="text" type="text" size="40" value="<?php echo($_SESSION['form']['email']) ?>">
                </label>
                
                <label id="label-contact-phone" for="contact_phone">
                        <p class="note"><span>Phone Number</span> – For shipping updates.</p>
                        <input id="contact_phone" maxlength="99" name="contact_phone" class="text" type="text" size="40" value="<?php echo($_SESSION['form']['contact_phone']) ?>">
                </label>
        </div>
        
        
    </div>

    <div class="payment">
        <h4 class="h-payment">Payment Info <span>Secure transaction</span></h4>
        
        <div class="form">
        
            <p style="padding-bottom:10px"><img src="images/card-type.png" width="280" height="40" alt="Credit Card"></p>
            
            <label id="card_first_name_label" for="card_first_name">
                <h5>First Name</h5>
                <input id="card_first_name" maxlength="20" name="card_first_name" class="text" type="text" size="30" value="<?php echo($_SESSION['form']['card_first_name']) ?>">
            </label>    
            
            <label id="card_last_name_label" for="card_last_name">
                <h5>Last Name</h5>
                <input id="card_last_name" maxlength="20" name="card_last_name" class="text" type="text" size="30" value="<?php echo($_SESSION['form']['card_last_name']) ?>">
            </label>    
                
        
        
            <label for="card_type" style="clear:both">
                <h5>Card Type</h5>
                <select id="card_type" name="card_type" class="decorared" style="width:320px; height:38px">
                    <option value="">Select Card Type</option>
                    <option value="visa"<?php if($_SESSION['form']['card_type'] == 'visa'){ ?> selected="selected"<?php } ?>>Visa</option>
                    <option value="mastercard"<?php if($_SESSION['form']['card_type'] == 'mastercard'){ ?> selected="selected"<?php } ?>>MasterCard</option>
                    <option value="amex"<?php if($_SESSION['form']['card_type'] == 'amex'){ ?> selected="selected"<?php } ?>>American Express</option>
                    <option value="discover"<?php if($_SESSION['form']['card_type'] == 'discover'){ ?> selected="selected"<?php } ?>>Discover</option>

                </select>
            </label>
        
            <label for="card_number">
                <h5>Card Number</h5>
                <input id="card_number" maxlength="20" name="card_number" class="text" autocomplete="off" type="text" size="40" value="">
            </label>
            
            <label id="cardExpMonthLabel" for="card_exp_month" class="left inline">
                <h5>Expiration month</h5>
                <select id="card_exp_month" name="card_exp_month" class="decorared" style="height:36px">
                    <option value=""> </option>
                    <option value="1"<?php if($_SESSION['form']['card_exp_month'] == 1){ ?> selected="selected"<?php } ?>>01 Jan</option>
                    <option value="2"<?php if($_SESSION['form']['card_exp_month'] == 2){ ?> selected="selected"<?php } ?>>02 Feb</option>
                    <option value="3"<?php if($_SESSION['form']['card_exp_month'] == 3){ ?> selected="selected"<?php } ?>>03 Mar</option>
                    <option value="4"<?php if($_SESSION['form']['card_exp_month'] == 4){ ?> selected="selected"<?php } ?>>04 Apr</option>
                    <option value="5"<?php if($_SESSION['form']['card_exp_month'] == 5){ ?> selected="selected"<?php } ?>>05 May</option>
                    <option value="6"<?php if($_SESSION['form']['card_exp_month'] == 6){ ?> selected="selected"<?php } ?>>06 Jun</option>
                    <option value="7"<?php if($_SESSION['form']['card_exp_month'] == 7){ ?> selected="selected"<?php } ?>>07 Jul</option>
                    <option value="8"<?php if($_SESSION['form']['card_exp_month'] == 8){ ?> selected="selected"<?php } ?>>08 Aug</option>
                    <option value="9"<?php if($_SESSION['form']['card_exp_month'] == 9){ ?> selected="selected"<?php } ?>>09 Sep</option>
                    <option value="10"<?php if($_SESSION['form']['card_exp_month'] == 10){ ?> selected="selected"<?php } ?>>10 Oct</option>
                    <option value="11"<?php if($_SESSION['form']['card_exp_month'] == 11){ ?> selected="selected"<?php } ?>>11 Nov</option>
                    <option value="12"<?php if($_SESSION['form']['card_exp_month'] == 12){ ?> selected="selected"<?php } ?>>12 Dec</option>
                </select>
            </label>
            
            <label id="cardExpYearLabel" for="card_exp_year" class="left inline">
                <h5>Expiration year</h5>
                <select id="card_exp_year" name="card_exp_year" class="decorared" style="height:36px">
                    <option value=""> </option>
                    <?php for($i=date('Y'); $i <= date('Y') + 10 ; $i++){ ?>
                        <option value="<?php echo $i ?>" <?php if($_SESSION['form']['card_exp_year'] == $i){ ?> selected="selected"<?php } ?>><?php echo $i ?></option>
                    <?php } ?>  
                </select>
            </label>

            <label for="csc" style="clear:both">
                <h5>Card Security Code (CSC)</h5>
                <input id="csc" maxlength="4" name="csc" class="text" autocomplete="off" type="text" size="4" value=""> <a id="what-csc" href="#popover_content_wrapper"><img id="card_security_code" src="https://scandock.com/assets/images/icon-csc.png"></a>
            </label>
            
            <div id="popover_content_wrapper" style="display:none">
                <img id="card_security_code" src="images/csc.jpg">
            </div>
        
        </div>
        
    </div>
    

    <div class="address">
        
        <!-- Billing Address-->
        <div class="billing_address">
        
            <h4 class="h-billing">Billing Address</h4>
        
            <div class="form">
            
                <label id="label-billing-name" for="billing_name">
                    <h5>Full Name or Company Name</h5>
                    <input id="billing_name" maxlength="99" name="billing_name" class="text" type="text" size="40" value="<?php echo($_SESSION['form']['billing_name']) ?>">
                </label>
                
                <label id="label-billing-address1" for="billing_address1">
                    <h5>Street Address 1</h5>
                    <input id="billing_address1" maxlength="99" name="billing_address1" class="text" type="text" size="40" value="<?php echo($_SESSION['form']['billing_address1']) ?>">
                </label>
                
                <label id="label-billing-address2" for="billing_address2">
                    <h5>Street Address 2 (optional)</h5>
                    <input id="billing_address2" maxlength="99" name="billing_address2" class="text" type="text" size="40" value="<?php echo($_SESSION['form']['billing_address2']) ?>">
                </label>
                
                <label id="label-billing-country" for="billing_country">
                    <h5>Country</h5>

                    <select id="billing_country" name="billing_country" class="decorared" style=" width:315px; height:36px">
                        <option value="">Select Country</option>
                        <?php 
                                    
                            foreach($country_list as $k => $v){
                                    
                                    $country_name = ucwords(strtolower($v));
                                    
                         ?>
                                    
                        <option value="<?php echo $k ?>" <?php if($k == $_SESSION['form']['billing_country']){ ?> selected="selected" <?php } ?>><?php echo $country_name ?></option>
                                    
                            <?php if($k == 'CA'){ ?>
                                <option>=================</option>
                            <?php } ?>
                                    
                        <?php } ?>
                    </select>
                    
                </label>
                
                 <label id="label-billing-state" for="billing_state"  <?php if($_SESSION['form']['billing_country'] != 'US'){ ?>style="display:none"<?php } ?>>
                    <h5 id="billing-state-label">State</h5>
                    <select id="billing_state" name="billing_state" class="decorared" style=" width:315px">
                      <option value="">Select State</option>
                                   <?php 
                                    
                                        foreach($state_list as $k => $v){
                                    
                                        $state_name = ucwords(strtolower($v));
                                    
                                    ?>
                                    
                                    <option value="<?php echo $k ?>" <?php if($k == $_SESSION['form']['billing_state']){ ?> selected="selected" <?php } ?>><?php echo $state_name ?></option>
                                    
                                    <?php } ?>       
                    </select>
                </label>
                
                <label id="label-billing-city" for="billing_city">
                    <h5 id="billing-city-label">City</h5>
                    <input id="billing_city" maxlength="99" name="billing_city" class="text" type="text" size="40" value="<?php echo($_SESSION['form']['billing_city']) ?>">
                </label>
                
               
                
                <label id="label-billing-postal" for="billing_postal">
                    <h5 id="billing-postal-label">Zip Code</h5>
                    <input id="billing_postal" maxlength="25" style="width: 150px" name="billing_postal" class="text" type="text" size="25" value="<?php echo($_SESSION['form']['billing_postal']) ?>">
                </label>
            
            
            </div>
        
        </div>
        
        <!-- Shipping  Address /-->
        <div class="shipping_address">
        
            <h4 class="h-shipping">Shipping Address</h4>
           <div class="different_billing">
                
             <input type="checkbox" name="shippingSameThanBilling" value="on" class="checkbox" id="shippingSameThanBilling" style="width:25px"> The billing address is same as shipping address
            </div>
            <div class="form">
            
                <label id="label-shipping-name" for="shipping_name">
                    <h5>Full Name or Company Name</h5>
                    <input id="shipping_name" maxlength="99" name="shipping_name" class="text" type="text" size="40" value="<?php echo($_SESSION['form']['shipping_name']) ?>">
                </label>
                
                <label id="label-shipping-address1" for="shipping_address1">
                    <h5>Street Address 1</h5>
                    <input id="shipping_address1" maxlength="99" name="shipping_address1" class="text" type="text" size="40" value="<?php echo($_SESSION['form']['shipping_address1']) ?>">
                </label>
                
                <label id="label-shipping-address2" for="shipping_address2">
                    <h5>Street Address 2 (optional)</h5>
                    <input id="shipping_address2" maxlength="99" name="shipping_address2" class="text" type="text" size="40" value="<?php echo($_SESSION['form']['shipping_address2']) ?>">
                </label>
                
               <label id="label-shipping-country" for="shipping_country">
                    <h5>Country</h5>

                    <select id="shipping_country" name="shipping_country" class="decorared" style=" width:315px; height:36px">
                        <option value="">Select Country</option>
                        <?php 
                                    
                            foreach($country_list as $k => $v){
                                    
                                    $country_name = ucwords(strtolower($v));
                                    
                         ?>
                                    
                        <option value="<?php echo $k ?>" <?php if($k == $_SESSION['form']['shipping_country']){ ?> selected="selected" <?php } ?>><?php echo $country_name ?></option>
                                    
                            <?php if($k == 'CA'){ ?>
                                <option>=================</option>
                            <?php } ?>
                                    
                        <?php } ?>
                    </select>

                </label>

                <label id="label-shipping-state" for="shipping_state" <?php if($_SESSION['form']['shipping_country'] != 'US'){ ?>style="display:none"<?php } ?>>
                    <h5 id="shipping-state-label">State</h5>
                    <select id="shipping_state" name="shipping_state" class="decorared" style=" width:315px">
                      <option value="">Select State</option>
                                   <?php 
                                    
                                        foreach($state_list as $k => $v){
                                    
                                        $state_name = ucwords(strtolower($v));
                                    
                                    ?>
                                    
                                    <option value="<?php echo $k ?>" <?php if($k == $_SESSION['form']['shipping_state']){ ?> selected="selected" <?php } ?>><?php echo $state_name ?></option>
                                    
                                    <?php } ?>       
                    </select>
                </label>
                
                                
                <label id="label-shipping-city" for="shipping_city">
                   <h5 id="shipping-city-label">City</h5>
                   <input id="shipping_city" maxlength="99" name="shipping_city" class="text" type="text" size="40" value="<?php echo($_SESSION['form']['shipping_city']) ?>">
                </label>
                
                <label id="label-shipping-postal" for="shipping_postal">
                   <h5 id="shipping-postal-label">Zip Code</h5>
                   <input id="shipping_postal" name="shipping_postal" class="text" type="text" size="40" value="<?php echo($_SESSION['form']['shipping_postal']) ?>" style="width:150px">
                </label>
            
            </div>
        
        </div>
        <!-- Shipping Address /-->
        
    
    </div>
    
    

</div>

<!-- form info /-->


<div class="submit">
    <input type="submit" class="btn-buy" name="submit" value="VERIFY ORDER" />
</div>