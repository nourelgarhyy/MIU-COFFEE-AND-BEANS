<?php
include ('products.php');

    $id= $_SESSION['ID'];

$product = new product($id);
?>
<div><?php echo $product->productName; ?></div>
<div><?php echo $product->price; ?>EGP</div>

<br>
<tr>
				<td>
					Choose The Coffee Type:
				</td>
				<td>
					<select name="CoffeeType">
					    <option value=" houseBlend"> House Blend</option>
   						 <option  value=" darkRoast"> Dark Roast</option>
   						 <option value="decaf">Decaf</option>		
   						 <option value="espresso">Espresso</option>				
					</select>
				</td>
			</tr>
		<tr>
		<br>
				<td>
					Choose your preferred milk:
				</td>
				<td>
					<select name="Milk">
					    <option value="normalMilk"> Milk</option>
   						 <option  value="steamed">Steamed Milk,</option>
   						 <option value="Foam">Foam Milk</option>		
   						 <option value="soy">Soy Milk</option>				
   						  <option value="chocolate ">Chocolate</option>				
   						 
					</select>
				</td>
			</tr>
			
			 <a  href=\"Cart.php?id=$id\"> Create Receipt</a>

