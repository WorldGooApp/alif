<div class="col-sm-9 padding-rights">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
                            <?php foreach($cats as $item){?>
								<img src="<?=THEME?>images/home/<?=$item['img'];?>" alt="" />
								<?}?>
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="modal fade" id="card" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  							<div class="modal-dialog" role="document">
    							<div class="modal-content">
      								<div class="modal-header">
        								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        								<h4 class="modal-title" id="myModalLabel">Modal title</h4>
      								</div>
      								<div class="modal-body">
      								</div>
      								<div class="modal-footer">
        								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        								<button type="button" name="submit" class="btn btn-primary">Save changes</button>
      								</div>
    							</div>
  							</div>
						</div>
						
						<form action="" method="post" enctype="multipart/form-data">
						<input type="hidden" name="img" value="<?=$item['img'];?>">
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="<?=THEME?>images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><input type="hidden" name="name" value="<?=$item['name']?>" /><?=$item['name']?></h2>
								<p>Web ID:<input type="hidden" name="web_id" value="<?=$item['web_id']?>" /><?=$item['web_id']?></p>
								<p>Your name:<input type="text" name="user_name" /></p>
								<img src="<?=THEME?>images/product-details/rating.png" alt="" />
								<span>
									<span >US $<input type="hidden" name="price" value="<?=$item['price']?>" /><?=$item['price']?></span>
									<label>Quantity:</label>
									<input type="text" value="3" />
									<button type="submit" name="add_card"  class="btn btn-fefault cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> E-SHOPPER</p>
								<a href=""><img src="<?=THEME?>images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
							
						</div>
					</div><!--/product-details-->
						</form>
			
		