
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
            <span class="item_img"><img src="images/<?php echo $item_image_iq[$_SESSION['cart']['order']['image_iq']['id']]['thumb']; ?>"  height="97" alt=""></span>
    		<div class="item_desc">
		        <span class="item_name"><?php echo $item_image_iq[$_SESSION['cart']['order']['image_iq']['id']]['name']; ?></span> 
	        </div>
    	</td>
    	<td class="right price" valign="top">$<?php echo number_format($item_image_iq[$_SESSION['cart']['order']['image_iq']['id']]['price']); ?></td>
    	<td class="right" valign="top"><input type="text" name="qty_image_iq" value="<?php echo($_SESSION['cart']['order']['image_iq']['qty']) ?>" maxlength="2" size="1" class="qty"><br /><input type="submit" name="action_update_iq" value="Update" class="btn-update"></td>
    	<td class="right price" valign="top">$<?php echo(number_format($item_image_iq[$_SESSION['cart']['order']['image_iq']['id']]['price'] * $_SESSION['cart']['order']['image_iq']['qty'])) ?></td>
    </tr>
    <?php } ?>
    <!-- Image Iq item row /-->

    <!-- Software item row -->
    <?php if($_SESSION['cart']['order']['software']['id']){ ?>
    <tr>
        <td class="first">
            <span class="item_img"><img src="images/<?php echo $item_software[$_SESSION['cart']['order']['software']['id']]['thumb']; ?>"  height="97" alt=""></span>
            <div class="item_desc">
                <span class="item_name"><?php echo $item_software[$_SESSION['cart']['order']['software']['id']]['name']; ?></span> 
            </div>
        </td>
        <td class="right price" valign="top">$<?php echo number_format($item_software[$_SESSION['cart']['order']['software']['id']]['price']); ?></td>
        <td class="right" valign="top"><input type="text" name="qty_software" value="<?php echo($_SESSION['cart']['order']['software']['qty']) ?>" maxlength="2" size="1" class="qty"><br /><input type="submit" name="action_update_software" value="Update" class="btn-update"></td>
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


<div class="submit">
    <input type="submit" class="btn-buy" name="submit" value="Continue" />
</div>