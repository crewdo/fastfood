
 <div class="new">
        <div class="container">
            <div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
                <h3 class="title">Món Mới <span>cùng FastFoody</span></h3>
                <p>Ăn uống thỏa chí, giá cá max hợp lý </p>
            </div>
              <div class="new-info">
            <?php
            foreach ($new_products as $pro) {
               
             ?>
          
                <div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s" style="margin-left: 5px">
                    <div class="new-top">
                        <a href="/home/showProduct/<?php echo $pro->id ?>"><img src="/img/products/<?php  foreach ($products_images as $img)
                        {
                            if($img->product_id == $pro->id)
                            {
                                echo $img->link;
                            }
                            }
                            ?>" class="img-responsive" alt=""/></a>
                        <div class="new-text">
                            <ul>
                                <li><a class="item_add" href=""> Thêm vào Giỏ</a></li>
                                <li><a href="#">Xem Nhanh </a></li>
                                <li><a href="/home/showProduct/<?php echo $pro->id ?>">Chi Tiết </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="new-bottom">
                        <h5><a class="name" href="/home/showProduct/<?php echo $pro->id ?>"><?php echo $pro->name ?></a></h5>
                        <div class="rating">
                            <span class="on">☆</span>
                            <span class="on">☆</span>
                            <span class="on">☆</span>
                            <span class="on">☆</span>
                            <span>☆</span>
                        </div>  
                        <div class="ofr">
                            <p class="pric1"><del><?php echo $pro->price ?></del></p>
                            <p><span class="item_price"><?php $new_price = $pro->price*(100 - $pro->discount); echo $new_price ?></span></p>
                        </div>
                    </div>
                </div>

          <?php 
      } 
      ?>
             
          </div>
   <div class="clearfix"> </div>
            </div>
        </div>
    </div>      
    <!--//new-->
    <!--gallery-->
    <div class="gallery">
        <div class="container">
            <div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
                <h3 class="title"> Sản Phẩm<span> Bán Chạy</span></h3>
                <p>Thỏa sức ăn vặt với FastFoody</p>
            </div>
            <div class="gallery-info">
                <?php  foreach($good_products as $good)
                {
                ?>
                <div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".5s" style="margin-right: 5px;">
                    <a href="/home/showProduct/<?php echo $good->product_id ?>"><img src="/img/products/<?php  foreach ($products_images as $img)
                        {
                            if($img->product_id == $good->product_id)
                            {
                                echo $img->link;
                            }
                            }
                            ?>" class="img-responsive" alt=""/></a>
                    <div class="gallery-text simpleCart_shelfItem">
                        <h5><a class="name" href="/home/showProduct/<?php echo $good->product_id ?>"><?php echo $good->product->name ?></a></h5> 
                        <p><span class="item_price"><?php echo $good->product->price ?></span></p>
                        <!-- <h4 class="sizes">Cỡ: <a href="#">m</a> - <a href="#">l</a> </h4> -->
                        <ul>
                            <li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
                            <li><a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
                        </ul>
                    </div>
                </div>
              <?php 
                 }
              ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//gallery-->
    <!--trend-->
    <div class="trend wow zoomIn animated" data-wow-delay=".5s">
        <div class="container">
            <div class="trend-info">
                <section class="slider grid">
                    <div class="flexslider trend-slider">
                        <ul class="slides">
                            <li>
                                <div class="col-md-5 trend-left">
                                    <img src="images/t1.png" alt=""/>
                                </div>
                                <div class="col-md-7 trend-right">
                                    <h4 class="">Khuyến mãi <span> 13/10/2017</span></h4>
                                    <h5>Giảm 20% viên chiên</h5>
                                    <p>Thỏa sức ăn vặt với FastFoody - chương trình khuyến mãi giảm tới 20% cho tất cả các loại viên chiên: Cá viên, bò viên, tôm viên, etc. </p>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <div class="col-md-5 trend-left">
                                    <img src="images/t2.png" alt=""/>
                                </div>
                                <div class="col-md-7 trend-right">
                                        <h4 class="">Freeship <span> 17 - 25/10/2017</span></h4>
                                    <h5>Ăn uống thỏa thích, không lo tiền ship</h5>
                                    <p>Nhân dịp khai trương website, cửa hàng sẽ áp dụng chương trình freeship khu vực nội thành TPHCM cho hóa đơn trên 50k. Order và thưởng thức thôi nào!!! </p>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <div class="col-md-5 trend-left">
                                    <img src="images/t3.png" alt=""/>
                                </div>
                                <div class="col-md-7 trend-right">
                                    <h4 class="">20k Day <span> Thứ 3 hàng tuần</span></h4>
                                    <h5>Order liền tay, giảm ngay 20k </h5>
                                    <p>Hãy order, miễn là hóa đơn của bạn lớn hơn 100k và thanh toán vào thứ 3 hàng tuần, bạn sẽ được giảm 20k. Không tin ư? Order thử đi nào!</p>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                    
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
<!--//trend-->