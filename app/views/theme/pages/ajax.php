
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="?view=index">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
            
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
                        <td class="image">№</td>
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<form action="" method="post">
							<?
							if($_SESSION['cart']){
								foreach($_SESSION['cart']  as $id =>$qty){
									$row = cab($id);
							?>
							
						<tr>
							<td class="cart_product">
								<a href="?view=details&id=<?=$row['id']?>"><img src="<?=THEME?>images/shop/<?=$row['img'];?>" width="100" height="80" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="?view=details&id=<?=$row['id']?>"><?=$row['name']?></a></h4>
								<p id="id">Товарный ID: <?=$row['id']?></p>
							</td>
							<td class="cart_price">
								<p><?=$row['price']?> сум</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
								<button class="cart_quantity_down" onclick="minus_cart(<?=$id?>)">-</button>
								<input  type="text"  value="<? echo $qty ?>"  size="1">
								<button class="cart_quantity_up" onclick="plus_cart(<?=$id?>)">+</button>
								</div>
							<td class="cart_total">
								<p class="cart_total_price"><?=$row['price'] * $qty?> сум</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" onclick="delete_cart(<?=$id?>)"><i class="fa fa-times"></i></a>
								
							</td>							
						</tr>
						<?} } else{
							echo "Очистка все корзины";
						}?>
						</tr>
						</form>
					</tbody>
				</table>
			</div>
		</div>
	</section>
    
			

