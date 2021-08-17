<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | E-Shopper</title>
    <link href="<?=THEME?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=THEME?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=THEME?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=THEME?>css/price-range.css" rel="stylesheet">
    <link href="<?=THEME?>css/animate.css" rel="stylesheet">
	<link href="<?=THEME?>css/main.css" rel="stylesheet">
	<link href="<?=THEME?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?=THEME?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=THEME?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=THEME?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=THEME?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=THEME?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
	<style>
	
	.png{
		display:none;
		
	}
	</style>

<body>
	<section>
		<div class="container">

			<div class="row">
				<div class="col-sm-6">
					<div class="left-sidebar">
					<div class="panel-group category-products" id="accordian"><!--category-productsr-->
					<h2 class="title text-center">Главный страница</h2>
					<div class="circle"></div>
					<div class="box"></div>
				<div class="png"><img src="<?=THEME?>images/shop/1.png" width="200" height="100" alt="" /></div>	
					</div>
						
					</div>
				</div>
				<div class="col-sm-6 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Товары </h2>
						<? foreach($blog as $item){?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									
										<img src="<?=THEME?>images/shop/<?=$item['img']?>" alt="" />
										<h2>$<?=$item['price']?></h2>
										<p><?=$item['text']?></p>
										<a href="" class="btn btn-default add-to-cart"  data-id="<?=$item['id']?>"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>#<?=$item['code_product']?></h2>
											<h2><?=$item['price']?> сум</h2>
											<p><?=$item['text']?></p>
											<a href="" class="btn btn-default  add-to-cart"  data-id="<?=$item['id']?>"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?}?>
						
						<ul class="pagination">
							<li class="active"><a href="?view=index">1</a></li>
							<li><a href="?view=index">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
				</div>
		</div>
	</section>
	<style>
.modal-dialog {
 width: 1190px;
 height:1000px !important;
}
       
.modal-header {
padding:16px 16px;
color:#FFF;
}
</style>

	<div class="modal fade" id="card" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-ajax" id="myModalLabel">Модал окно</h4>
      </div>
      <div class="modal-body">

                               
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Закрыть</button>
        <button type="button"  class="btn btn-success" onclick="index_send_email(<?=$row['id']?>)" data-dismiss="modal">Сохранить</button>
		<button type="button" class="btn btn-danger" onclick="dell_all(<?=$id?>)" data-dismiss="modal">Очистка все корзины</button>
      </div>
    </div>
  </div>
</div>
	

  
    <script src="<?=THEME?>js/jquery.js"></script>
	<script src="<?=THEME?>js/price-range.js"></script>
    <script src="<?=THEME?>js/jquery.scrollUp.min.js"></script>
	<script src="<?=THEME?>js/bootstrap.min.js"></script>
    <script src="<?=THEME?>js/jquery.prettyPhoto.js"></script>
    <script src="<?=THEME?>js/main.js"></script>
</body>
</html>