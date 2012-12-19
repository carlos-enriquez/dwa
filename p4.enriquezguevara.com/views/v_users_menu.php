<h1>Welcome <?=$user->first_name?> <?=$user->last_name?></h1>
<script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

	$(document).ready(function(){
 			window.onload = function(){ 
			$(".section1 p").slideUp();$(".section1 form").slideUp();$(".section1 div").slideUp();
			$(".section2 p").slideUp();$(".section2 form").slideUp();$(".section2 div").slideUp();
			$(".section3 p").slideUp();$(".section3 form").slideUp();$(".section3 div").slideUp();
			$(".section4 p").slideUp();$(".section4 form").slideUp();$(".section4 div").slideUp();
			$(".section5 p").slideUp();$(".section5 form").slideUp();$(".section5 div").slideUp();
			$(".section6 p").slideUp();$(".section6 form").slideUp();$(".section6 div").slideUp();

		}
	
	
		//this is accordion panels
		$(".section1 h2").click(function(){
			$(".section1 p").slideDown();$(".section1 form").slideDown();$(".section1 div").slideDown();
			$(".section2 p").slideUp();$(".section2 form").slideUp();$(".section2 div").slideUp();
			$(".section3 p").slideUp();$(".section3 form").slideUp();$(".section3 div").slideUp();
			$(".section4 p").slideUp();$(".section4 form").slideUp();$(".section4 div").slideUp();
			$(".section5 p").slideUp();$(".section5 form").slideUp();$(".section5 div").slideUp();
			$(".section6 p").slideUp();$(".section6 form").slideUp();$(".section6 div").slideUp();
		});
		$(".section2 h2").click(function(){
			$(".section2 p").slideDown();$(".section2 form").slideDown();$(".section2 div").slideDown();
			$(".section1 p").slideUp();$(".section1 form").slideUp();$(".section1 div").slideUp();
			$(".section3 p").slideUp();$(".section3 form").slideUp();$(".section3 div").slideUp();
     		$(".section4 p").slideUp();$(".section4 form").slideUp();$(".section4 div").slideUp();
			$(".section5 p").slideUp();$(".section5 form").slideUp();$(".section5 div").slideUp();
			$(".section6 p").slideUp();$(".section6 form").slideUp();$(".section6 div").slideUp();
		});
		$(".section3 h2").click(function(){
			$(".section3 p").slideDown();$(".section3 form").slideDown();$(".section3 div").slideDown();
			$(".section2 p").slideUp();$(".section2 form").slideUp();$(".section2 div").slideUp();
			$(".section1 p").slideUp();$(".section1 form").slideUp();$(".section1 div").slideUp();
			$(".section4 p").slideUp();$(".section4 form").slideUp();$(".section4 div").slideUp();
			$(".section5 p").slideUp();$(".section5 form").slideUp();$(".section5 div").slideUp();
			$(".section6 p").slideUp();$(".section6 form").slideUp();$(".section6 div").slideUp();
		});
		$(".section4 h2").click(function(){
			$(".section4 p").slideDown();$(".section4 form").slideDown();$(".section4 div").slideDown();
			$(".section2 p").slideUp();$(".section2 form").slideUp();$(".section2 div").slideUp();
			$(".section1 p").slideUp();$(".section1 form").slideUp();$(".section1 div").slideUp();
			$(".section3 p").slideUp();$(".section3 form").slideUp();$(".section3 div").slideUp();
			$(".section5 p").slideUp();$(".section5 form").slideUp();$(".section5 div").slideUp();
			$(".section6 p").slideUp();$(".section6 form").slideUp();$(".section6 div").slideUp();
		});
		$(".section5 h2").click(function(){
			$(".section5 p").slideDown();$(".section5 form").slideDown();$(".section5 div").slideDown();
			$(".section2 p").slideUp();$(".section2 form").slideUp();$(".section2 div").slideUp();
			$(".section3 p").slideUp();$(".section3 form").slideUp();$(".section3 div").slideUp();
			$(".section4 p").slideUp();$(".section4 form").slideUp();$(".section4 div").slideUp();
			$(".section1 p").slideUp();$(".section1 form").slideUp();$(".section1 div").slideUp();
			$(".section6 p").slideUp();$(".section6 form").slideUp();$(".section6 div").slideUp();
		});
		$(".section6 h2").click(function(){
			$(".section6 p").slideDown();$(".section6 form").slideDown();$(".section6 div").slideDown();
			$(".section2 p").slideUp();$(".section2 form").slideUp();$(".section2 div").slideUp();
			$(".section3 p").slideUp();$(".section3 form").slideUp();$(".section3 div").slideUp();
			$(".section4 p").slideUp();$(".section4 form").slideUp();$(".section4 div").slideUp();
			$(".section5 p").slideUp();$(".section5 form").slideUp();$(".section5 div").slideUp();
			$(".section1 p").slideUp();$(".section1 form").slideUp();$(".section1 div").slideUp();
		});
		
		
		
	});//thisis the outside clossing for jquery function
</script>


    
<section class="section1">
                <h2><a href="#">COLD SANDWICHES</a></h2>
         <p style="display: none;">
        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="carlitoselbuho@hotmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Cold Sandwich">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="tax_rate" value="0.070">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
<table>
<input type="hidden" name="on0" value="Size">Size<select name="os0">
	<option value="Small">Small $4.99 USD</option>
	<option value="Large">Large $6.99 USD</option>
</select>
<input type="hidden" name="on1" value="Kind">Kind<select name="os1">
	<option value="Italian">Italian </option>
	<option value="Ham">Ham </option>
	<option value="Turkey">Turkey </option>
	<option value="Roast Beef">Roast Beef </option>
	<option value="Chx Salad">Chx Salad </option>
	<option value="Tuna Salad">Tuna Salad </option>
</select> 


<input type="hidden" name="on2" value="Bread">Bread<select name="os2">
 <option value="SUBROLL" selected>SUBROLL </option>
                        <option value="WHITE" >WHITE BREAD</option>
                        <option value="WHEAT" >WHEAT BREAD</option>
                        <option value="BUN" >BUN ROLL</option>
                        <option value="WRAP" >WRAP TORTILLA</option>>
</select>
<input type="hidden" name="on3" value="Bread">Bread<select name="os3">
  <option value="NO TOASTED" selected>NO TOASTED </option>
                        <option value="TOASTED" >TOASTED</option>
                        <option value="PANINI" >PANINI STYLE</option>
</select> 
<input type="hidden" name="on4" value="Cheese">Cheese<select name="os4">
  <option value="NO CHEESE" selected>NO CHEESE </option>
                        <option value="AMERICAN" >AMERICAN </option>
                        <option value="PROVOLONE" >PROVOLONE</option>
                        <option value="SWISS" >SWISS </option>
                        <option value="CHEDDAR" >CHEDDAR </option>
</select> 

</table>
 <div id='cubo1'>

            <input type="checkbox" name="option1" value="MAYO">MAYO<BR>
            <input type="checkbox" name="option1" value="KETCHUP" >KETCHUP<BR>
            <input type="checkbox" name="option1" value="MUSTARD|MUSTARD|0" >MUSTARD<BR>
            <input type="checkbox" name="option1" value="HOTS|HOT|0" >HOT RELISH<BR>
            <input type="checkbox" name="option1" value="HOTSR|HOTR|0" >HOT RINGS<BR>
            </div>
            <div id='cubo1'>	
            <input type="checkbox" name="option1" value="LETTUCE|LETTUCE|0">LETTUCE<BR>
            <input type="checkbox" name="option1" value="TOMATO|TOMATO|0" >TOMATO<BR>
            <input type="checkbox" name="option1" value="PICKLES|PICKLES|0" >PICKLES<BR>
            <input type="checkbox" name="option1" value="ONION|ONION|0" >ONIONS<BR>
            <input type="checkbox" name="option1" value="AVOCADO|AVOCADO|0.50" >AVOCADO (add $0.50)<BR>
            </div>
            <div id='cubo1'>	
                     <input type="checkbox" name="option1" value="XCH|XCH|.50">EXTRA CHEESE (add $0.50)<br>
            <input type="checkbox" name="option1" value="XMT|XMT|1">EXTRA MEAT (add $1.00)<br>
            <input type="checkbox" name="option1" value="EGG|EGG|.50">ADD EGG (add $0.50)<br>
            <input type="checkbox" name="option1" value="BACON|BACON|1">ADD BACON (add $1.00)<br>
            </div>
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="option_select0" value="Small">
<input type="hidden" name="option_amount0" value="4.99">
<input type="hidden" name="option_select1" value="Large">
<input type="hidden" name="option_amount1" value="6.99">
<input type="hidden" name="option_index" value="0">
<div id='cubo6'>
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></div>
</form> </p>
 </section>
     
  <section class="section2">
    	<h2><a href="#">HOTS SANDWICHES</a></h2>
         <p style="display: none;">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="carlitoselbuho@hotmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Hots Sandwich">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="tax_rate" value="0.070">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
<table>
<input type="hidden" name="on0" value="Size">Size<select name="os0">
	<option value="Small">Small $5.99 USD</option>
	<option value="Large">Large $7.99 USD</option>
</select>
<input type="hidden" name="on1" value="Kind">Kind<select name="os1">
	            <option value="STEAK" selected>STEAK</option>
                        <option value="CHICKEN" >CHICKEN</option>
                        <option value="HAMBURGER" >HAMBURGER</option>
                        <option value="STEAK TIPS" >STEAK TIPS</option>
                        <option value="PASTRAMI" >PASTRAMI</option>
            
</select> 


<input type="hidden" name="on2" value="Bread">Bread<select name="os2">
 <option value="SUBROLL" selected>SUBROLL </option>
                        <option value="WHITE" >WHITE BREAD</option>
                        <option value="WHEAT" >WHEAT BREAD</option>
                        <option value="BUN" >BUN ROLL</option>
                        <option value="WRAP" >WRAP TORTILLA</option>>
</select>
<input type="hidden" name="on3" value="Bread">Bread<select name="os3">
  <option value="NO TOASTED" selected>NO TOASTED </option>
                        <option value="TOASTED" >TOASTED</option>
                        <option value="PANINI" >PANINI STYLE</option>
</select> 
<input type="hidden" name="on4" value="Cheese">Cheese<select name="os4">
  <option value="NO CHEESE" selected>NO CHEESE </option>
                        <option value="AMERICAN" >AMERICAN </option>
                        <option value="PROVOLONE" >PROVOLONE</option>
                        <option value="SWISS" >SWISS </option>
                        <option value="CHEDDAR" >CHEDDAR </option>
</select> 

</table>

            <div id='cubo1'>	
            <input type="checkbox" name="option1" value="MAYO|MAYO|0">MAYO<BR>
            <input type="checkbox" name="option1" value="KETCHUP|KETCHUP|0" >KETCHUP<BR>
            <input type="checkbox" name="option1" value="MUSTARD|MUSTARD|0" >MUSTARD<BR>
            <input type="checkbox" name="option1" value="HOTS|HOT|0" >HOT RELISH<BR>
            <input type="checkbox" name="option1" value="HOTSR|HOTR|0" >HOT RINGS<BR>
            </div>
            <div id='cubo1'>	
            <input type="checkbox" name="option1" value="LETTUCE|LETTUCE|0">LETTUCE<BR>
            <input type="checkbox" name="option1" value="TOMATO|TOMATO|0" >TOMATO<BR>
            <input type="checkbox" name="option1" value="PICKLES|PICKLES|0" >PICKLES<BR>
            <input type="checkbox" name="option1" value="ONION|ONION|0" >ONIONS<BR>
            <input type="checkbox" name="option1" value="AVOCADO|AVOCADO|0.50" >AVOCADO (add $0.50)<BR>
            </div>
            <div id='cubo1'>	
            <input type="checkbox" name="option1" value="XCH|XCH|.50">EXTRA CHEESE (add $0.50)<br>
            <input type="checkbox" name="option1" value="XMT|XMT|1">EXTRA MEAT (add $1.00)<br>
            <input type="checkbox" name="option1" value="EGG|EGG|.50">ADD EGG (add $0.50)<br>
            <input type="checkbox" name="option1" value="BACON|BACON|1">ADD BACON (add $1.00)<br>
            </div>
            <div id='cubo1'>	
            <input type="checkbox" name="option1" value="GO|GO|.50">GRILLED ONIONS (add $0.50)<br>
            <input type="checkbox" name="option1" value="GP|GP|.50">GRILLED PEPPERS (add $0.50)<br>
            <input type="checkbox" name="option1" value="GM|GM|.50">GRILLED MUSHROOMS (add $0.50)<br>

            </div>
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="option_select0" value="Small">
<input type="hidden" name="option_amount0" value="5.99">
<input type="hidden" name="option_select1" value="Large">
<input type="hidden" name="option_amount1" value="7.99">
<input type="hidden" name="option_index" value="0">
<div id='cubo6'>
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></div>
</form> </p>
 </section>
     <section class="section3">
                <h2><a href="#">PARM SANDWICHES</a></h2> <p style="display: none;">
           <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="carlitoselbuho@hotmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Parm Sandwich">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="tax_rate" value="0.070">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
<table>
<input type="hidden" name="on0" value="Size">Size<select name="os0">
	<option value="Small">Small $5.99 USD</option>
	<option value="Large">Large $7.99 USD</option>
</select>
<input type="hidden" name="on1" value="Kind">Kind<select name="os1">
	             		<option value="MEATBALL" selected>MEATBALL PARM</option>
                        <option value="CHIX PARM" >CHICKEN PARM</option>
                        <option value="VEAL" >VEAL PARM</option>
                        <option value="SAUSAGE" >SAUSAGE PARM</option>
</select> 


<input type="hidden" name="on2" value="Bread">Bread<select name="os2">
                     <option value="SUB|SUBROLL|0" disabled="disabled" selected>SUBROLL </option>
</select>
<input type="hidden" name="on3" value="Bread">Bread<select name="os3">
  <option value="NO TOASTED" selected>NO TOASTED </option>
                        <option value="TOASTED" >TOASTED</option>
                      
</select> 
<input type="hidden" name="on4" value="Cheese">Cheese<select name="os4">
  <option value="NO CHEESE" selected>NO CHEESE </option>
                        <option value="AMERICAN" >AMERICAN </option>
                        <option value="PROVOLONE" >PROVOLONE</option>
                        <option value="SWISS" >SWISS </option>
                        <option value="CHEDDAR" >CHEDDAR </option>
</select> 

</table>

             <div id='cubo1'>	
            <input type="checkbox" name="option1" value="MAYO|MAYO|0">MAYO<BR>
            <input type="checkbox" name="option1" value="KETCHUP|KETCHUP|0" >KETCHUP<BR>
            <input type="checkbox" name="option1" value="MUSTARD|MUSTARD|0" >MUSTARD<BR>
            <input type="checkbox" name="option1" value="HOTS|HOT|0" >HOT RELISH<BR>
            <input type="checkbox" name="option1" value="HOTSR|HOTR|0" >HOT RINGS<BR>
            </div>
            <div id='cubo1'>	
            <input type="checkbox" name="option1" value="LETTUCE|LETTUCE|0">LETTUCE<BR>
            <input type="checkbox" name="option1" value="TOMATO|TOMATO|0" >TOMATO<BR>
            <input type="checkbox" name="option1" value="PICKLES|PICKLES|0" >PICKLES<BR>
            <input type="checkbox" name="option1" value="ONION|ONION|0" >ONIONS<BR>
            <input type="checkbox" name="option1" value="AVOCADO|AVOCADO|0.50" >AVOCADO (add $0.50)<BR>
            </div>
            <div id='cubo1'>	
            <input type="checkbox" name="option1" value="XCH|XCH|.50">EXTRA CHEESE (add $0.50)<br>
            <input type="checkbox" name="option1" value="XMT|XMT|1">EXTRA MEAT (add $1.00)<br>
            <input type="checkbox" name="option1" value="NOSAUCE|NOSAUCE|0">NO MARINADA<br>
            <input type="checkbox" name="option1" value="SICE|SIDE|1">SIDE MARINADA<br>
            </div>
                <div id='cubo1'>	
            <input type="checkbox" name="option1" value="GO|GO|.50">GRILLED ONIONS (add $0.50)<br>
            <input type="checkbox" name="option1" value="GP|GP|.50">GRILLED PEPPERS (add $0.50)<br>
            <input type="checkbox" name="option1" value="GM|GM|.50">GRILLED MUSHROOMS (add $0.50)<br>

            </div>
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="option_select0" value="Small">
<input type="hidden" name="option_amount0" value="5.99">
<input type="hidden" name="option_select1" value="Large">
<input type="hidden" name="option_amount1" value="7.99">
<input type="hidden" name="option_index" value="0">
<div id='cubo6'>
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></div>
</form> </p>
 </section>
 
      <section class="section4">
    	<h2><a href="#">DINNERS</a></h2> <P>(All dinners are served with 1 side and salad)</P>
		<p style="display: none;">
    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="carlitoselbuho@hotmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Dinner">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="tax_rate" value="0.070">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
<table>
<input type="hidden" name="on0" value="MEAT">MEAT<select name="os0">
					    <option value="STEAK TIPS" selected>STEAK TIPS</option>
                        <option value="CHICKEN BREAST" >CHICKEN BREAST</option>
                        <option value="HAMBURGER" >HAMBURGER</option>
                        <option value="SALMON" >SALMON FILET</option>
                        <option value="FISH HADDOCK" >FISH HADDOCK</option>
                        <option value="CHICKEN KABOK" >CHICKEN KABOK</option>
                        <option value="BEEF KABOK" >BEEF KABOK</option>
</select>
<input type="hidden" name="on1" value="MARINATED">MARINATED<select name="os1">
	             		<option value="BUFFALO" selected>BUFFALO </option>
                        <option value="BARBACUE">BARBACUE </option>
                        <option value="TERIYAKI">TERIYAKI </option>
                        <option value="RED GLAZED" >RED GLAZED</option>

</select> 


<input type="hidden" name="on2" value="SALAD">SALAD<select name="os2">
  <option value="CEASAR|CEASAR|0" selected>SIDE CEASAR</option>
                        <option value="GARDEN" >SIDE GARDEN</option>
                        <option value="GREEK" >SIDE GREEK</option></select>
<input type="hidden" name="on4" value="SIDE">SIDE<select name="os4">
 <option value="RICE|RICE|0" selected>RICE </option>
                        <option value="MASH POTATO" >MASHED POTATO</option>
                        <option value="STEAMED VEGGIES" >STEAMED VEGGIES</option>
                        <option value="COLESLAW" >COLESLAW</option>
                        <option value="FRUIT" >FRUIT</option>
                        <option value="FRENCH FRIES" >FRENCH FRIES</option>
                        <option value="SWEET POTATO" >SWEET POTATO</option>
                        <option value="ONION RINGS">ONION RINGS</option></select> 

</table>

           
            <div id='cubo1'>	
            <input type="checkbox" name="option1" value="MAYO|MAYO|0">SIDE MAYO<BR>
            <input type="checkbox" name="option1" value="KETCHUP|KETCHUP|0" >SIDE KETCHUP<BR>
            <input type="checkbox" name="option1" value="MUSTARD|MUSTARD|0" >SIDE MUSTARD<BR>
            <input type="checkbox" name="option1" value="HOTS|HOT|0" >SIDE HOT RELISH<BR>
            <input type="checkbox" name="option1" value="HOTSR|HOTR|0" >SIDE HOT RINGS<BR>
            </div>
            <div id='cubo1'>	
            <input type="checkbox" name="option1" value="BUF|BUF|0">SIDE BUFFALO<BR>
            <input type="checkbox" name="option1" value="BBQ|BBQ|0" >SIDE BBQ<BR>
            <input type="checkbox" name="option1" value="TER|TER|0" >SIDE TERIYAKI<BR>
            <input type="checkbox" name="option1" value="HM|HM|0" >SIDE HONEY MUSTARD<BR>
            <input type="checkbox" name="option1" value="AVOCADO|AVOCADO|0.50" >AVOCADO (add $0.50)<BR>
            </div>
            <div id='cubo1'>	
            <input type="checkbox" name="option1" value="XCH|XCH|.50">EXTRA CHEESE (add $0.50)<br>
            <input type="checkbox" name="option1" value="XMT|XMT|1">EXTRA MEAT (add $1.00)<br>
            <input type="checkbox" name="option1" value="NOSAUCE|NOSAUCE|0">NO MARINADA<br>
            <input type="checkbox" name="option1" value="SICE|SIDE|1">SIDE MARINADA<br>
            </div>
                <div id='cubo1'>	
            <input type="checkbox" name="option1" value="GO|GO|.50">GRILLED ONIONS (add $0.50)<br>
            <input type="checkbox" name="option1" value="GP|GP|.50">GRILLED PEPPERS (add $0.50)<br>
            <input type="checkbox" name="option1" value="GM|GM|.50">GRILLED MUSHROOMS (add $0.50)<br>

            </div>
            
        
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="option_select0" value="STEAK TIPS">
<input type="hidden" name="option_amount0" value="8.99">
<input type="hidden" name="option_select1" value="CHICKEN BREAST">
<input type="hidden" name="option_amount1" value="7.99">
<input type="hidden" name="option_select2" value="HAMBURGER">
<input type="hidden" name="option_amount2" value="7.99">
<input type="hidden" name="option_select3" value="SAKMON FILLET">
<input type="hidden" name="option_amount3" value="10.99">
<input type="hidden" name="option_select4" value="FISH HADDOCK">
<input type="hidden" name="option_amount4" value="9.99">
<input type="hidden" name="option_select5" value="CHICKEN KABOK">
<input type="hidden" name="option_amount5" value="8.49">
<input type="hidden" name="option_select6" value="BEEF KABOK">
<input type="hidden" name="option_amount6" value="9.49">

<input type="hidden" name="option_index" value="0">
<div id='cubo6'>
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></div>
</form> </p>
                       
     </section>
     
      <section class="section5">
    	<h2><a href="#">SALADS</a></h2>
        <p style="display: none;">
        
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="carlitoselbuho@hotmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Salads">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="tax_rate" value="0.070">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
<table>
<input type="hidden" name="on0" value="MEAT">MEAT<select name="os0">
					    <option value="STEAK TIPS" selected>STEAK TIPS</option>
                        <option value="CHICKEN BREAST" >CHICKEN BREAST</option>
                        <option value="TURKEY" >TURKEY</option>
                        <option value="SALMON" >SALMON FILET</option>
</select>
<input type="hidden" name="on1" value="SALAD">SALAD<select name="os1">
<option value="CEASAR|CEASAR|0" selected>CEASAR SALAD</option>
                        <option value="GARDEN|GARDEN|0" >GARDEN SALAD</option>
                        <option value="GREEK|GREEK|0" >GREEK SALAD</option>
                        <option value="SPINACH|SPINACH|0" >SPINACH SALAD</option>
                       
</select> 


<input type="hidden" name="on2" value="DRESSING">DRESSING<select name="os2">
 <option value="NOD|NO DRESSING|0" selected>NO DRESSING</option>
                        <option value="ITALIAN" >ITALIAN DRESSING</option>
                        <option value="GREEK" >GREEK DRESSING</option>
                        <option value="CEASAR" >CEASAR DRESSING</option>
                        <option value="RANCH" >RANCH DRESSING</option>
                        <option value="BLUE CHEESE" >BLUE CHEESE DRESSING</option>
                        <option value="BALSAMIC" >BALSAMIC DRESSING</option>
                        <option value="RED WINE" >RED WINE DRESSING</option>
                        
</table>
            
        
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="option_select0" value="STEAK TIPS">
<input type="hidden" name="option_amount0" value="8.99">
<input type="hidden" name="option_select1" value="CHICKEN BREAST">
<input type="hidden" name="option_amount1" value="7.99">
<input type="hidden" name="option_select2" value="TURKEY">
<input type="hidden" name="option_amount2" value="7.99">
<input type="hidden" name="option_select3" value="SAKMON FILLET">
<input type="hidden" name="option_amount3" value="10.99">

<input type="hidden" name="option_index" value="0">
<div id='cubo6'>
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></div>
</form> </p>
        
     </section>
      <section class="section6">
    	<h2><a href="#">SIDES</a></h2>
        <p style="display: none;">
                  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="carlitoselbuho@hotmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="SIDES">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="tax_rate" value="0.070">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
<table>
<input type="hidden" name="on0" value="SIDES">SIDES<select name="os0">
					    <option value="FRENCH FRIES" selected>FRENCH FRIES</option>
                        <option value="ONION RINGS" >ONION RINGS</option>
                        <option value="SWEET POT FRIES" >SWEET POT FRIES</option>
                        <option value="COLESLAW" >COLESLAW</option>
                        <option value="RICE" >RICE</option>
                        <option value="MASH POTATO" >MASH POTATO</option>
                        <option value="STEAM VEGGIES" >STEAM VEGGIES</option>
                        <option value="FRUIT" >FRUIT</option>
</select>

          </table>  
        
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="option_select0" value="FRENCH FRIES">
<input type="hidden" name="option_amount0" value="3.49">
<input type="hidden" name="option_select1" value="ONION RINGS">
<input type="hidden" name="option_amount1" value="3.79">
<input type="hidden" name="option_select2" value="SWEET POT FRIES">
<input type="hidden" name="option_amount2" value="4.29">
<input type="hidden" name="option_select3" value="COLESLAW">
<input type="hidden" name="option_amount3" value="3.49">
<input type="hidden" name="option_select4" value="RICE">
<input type="hidden" name="option_amount4" value="3.49">
<input type="hidden" name="option_select5" value="MASH POTATO">
<input type="hidden" name="option_amount5" value="3.49">
<input type="hidden" name="option_select6" value="STEAM VEGGIES">
<input type="hidden" name="option_amount6" value="4.49">
<input type="hidden" name="option_select7" value="FRUIT">
<input type="hidden" name="option_amount7" value="3.49">

<input type="hidden" name="option_index" value="0">
<div id='cubo6'>
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></div>
</form> <BR><BR><BR><BR><BR><BR><BR></p>

         </section>    

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

