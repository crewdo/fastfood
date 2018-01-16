<link href="/public/css/flexslider1.css" rel="stylesheet" type="text/css" media="all" />	
		<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script><!--single-page-->
		<div class="single">
			<div class="container">
				<div class="single-info">		
						<div class="col-md-6 single-top wow fadeInLeft animated" data-wow-delay=".5s">	
						<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/s1.jpg">
								<div class="thumb-image"> <img src="images/s1.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="images/s2.jpg">
								 <div class="thumb-image"> <img src="images/s2.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="images/s3.jpg">
							   <div class="thumb-image"> <img src="images/s3.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li> 
						</ul>
					</div>
						<div class="flexslider">
							<ul class="slides">
								<?php 
								foreach ($single_images as $key) {
								 ?>
								<li data-thumb="<?php  echo $key->link?>">
									<div class="thumb-image"> <img src="<?php  echo $key->link?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<?php } ?>
								
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-left simpleCart_shelfItem wow fadeInRight animated" data-wow-delay=".5s">
						<h3><?= $product->name ?></h3>
						<div class="single-rating">
							<span class="starRating">
								<input id="rating5" type="radio" name="rating" value="5" checked>
								<label for="rating5">5</label>
								<input id="rating4" type="radio" name="rating" value="4">
								<label for="rating4">4</label>
								<input id="rating3" type="radio" name="rating" value="3">
								<label for="rating3">3</label>
								<input id="rating2" type="radio" name="rating" value="2">
								<label for="rating2">2</label>
								<input id="rating1" type="radio" name="rating" value="1">
								<label for="rating1">1</label>
							</span>
							<p><?php if($product->discount > 0 ){ echo "Sản phẩm này đang giảm ".$product->discount."%"; } ?></p>
							<!-- <a href="#">Thêm Nhận Xét</a> -->
						</div>
						<h6 class="item_price"><?php $new_price = $product->price*(100 - $product->discount); echo $new_price ?></h6>			
						<p><?= $product->content; ?></p>
					<!-- 	<ul class="size">
							<h4>Kích cỡ</h4>
							<li><a href="#">M</a></li>
							<li><a href="#">L</a></li>
							
						</ul> -->
					<!-- 	<ul class="color">
							<h4>Màu</h4>
							<li><a href="#"></a></li>
							<li><a href="#" class="red"></a></li>
							<li><a href="#" class="green"></a></li>
							<li><a href="#" class="pink"></a></li>
						</ul> -->
						<div class="clearfix"> </div>
						<div class="quantity">
							<p class="qty"> Số lượng:</p><input min="1" type="number" value="1" class="item_quantity">
						</div>
						<div class="btn_form">
							<a href="#" class="add-cart item_add">Thêm Vào Giỏ</a>	
						</div>
					</div>
				   <div class="clearfix"> </div>
				</div>
				<!--collapse-tabs-->
				<div class="collpse tabs">
					<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".5s">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									  Mô Tả
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
									<?= $product->content; ?>
								</div>
							</div>
						</div>
						<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".6s">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									   Thêm Thông Tin
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									<?= $product->content; ?>
								</div>
							</div>
						</div>
						<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".7s">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Đánh giá (<?= $product->review ?>)
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
									<!-- Trà sữa uống uống rất ngon và vừa miệng. Chúc quán ngày càng thành công -->
								</div>
							</div>
						</div>
						<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".8s">
							<div class="panel-heading" role="tab" id="headingFour">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										help
									</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
								<div class="panel-body">
									<!-- Cửa hàng rất đẹp. Món trà sữa này lại cực kì hấp dẫn, giá lại rẻ. Mình sẽ share ngay cho bạn bè. -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--//collapse -->
				<!--related-products-->
				<div class="related-products">
					<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
						<h3 class="title">Sản Phẩm Liên Quan</h3>
						
					</div>
					<div class="related-products-info">

						<?php foreach ($relateds as $key) {
							?>
						<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s" style="margin-left: 5px">
						   <div class="new-top">
                        <a href="/home/showProduct/<?php echo $key->id ?>"><img src="<?php  foreach ($products_images as $img)
                        {
                            if($img->product_id == $key->id)
                            {
                                echo $img->link;
                            }
                            }
                            ?>" class="img-responsive" alt=""/></a>
                        <div class="new-text">
                            <ul>
									<li><a href="/home/showProduct/<?php echo $key->id ?>">Xem Nhanh </a></li>
								<li><input type="number" class="item_quantity" min="1" value="1"></li>
								<li><a class="item_add" href="">Thêm Vào Giỏ</a></li>
                            </ul>
                        </div>
                    </div>
							<div class="new-bottom">
								<h5><a class="name" href="/home/showProduct/<?php echo $key->id ?>"></a><?= $key->name ?></h5>
								<a href="single.html"><img src="images/g9.jpg" class="img-responsive" alt=""/></a>
								<div class="rating">
									<span class="on">☆</span>
									<span class="on">☆</span>
									<span class="on">☆</span>
									<span class="on">☆</span>
									<span>☆</span>
								</div>	
								<div class="ofr">
									<p class="pric1"><del><?php echo $key->price ?></del></p>
	                            <p><span class="item_price"><?php $new_price = $key->price*(100 - $key->discount); echo $new_price ?></span></p>
								</div>
							</div>
						</div>
						<?php

									} ?> 
						<div class="clearfix"> </div>
					</div>
				</div>
				<!--//related-products-->
			</div>
		</div>