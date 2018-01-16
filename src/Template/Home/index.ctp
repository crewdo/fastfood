    <link href="/public/css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <div class="banner">
        <div class="container">
            <div class="banner-text">           
                <div class="col-sm-5 banner-left wow fadeInLeft animated" data-wow-delay=".5s">
                    <h2>Ăn uống thả ga với Ngày FastFoody</h2>
                    <h3>Sắp tới</h3>
                    <h4>Món mới Quá Đã</h4>
                    <div class="count main-row">
                        <ul id="example">
                            <li><span class="hours">00</span><p class="hours_text">Giờ</p></li>
                            <li><span class="minutes">00</span><p class="minutes_text">Phút</p></li>
                            <li><span class="seconds">00</span><p class="seconds_text">Giây</p></li>
                        </ul>
                            <div class="clearfix"> </div>

                    <script src="public/js/jquery.countdown.min.js" type="text/javascript" charset="utf-8" ></script>
                            <script type="text/javascript">
                                $('#example').countdown({
                                    date: '12/24/2020 15:59:59',
                                    offset: -8,
                                    day: 'Day',
                                    days: 'Days'
                                }, function () {
                                    alert('Done!');
                                });
                            </script>
                    </div>

                </div>
                <div class="col-sm-7 banner-right wow fadeInRight animated" data-wow-delay=".5s">   <div class="intro-banner">Món ăn hot hôm nay!</div>     
                    <section class="slider grid">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <h4>-30%</h4>
                                    <img src="public/images/b1.png" alt="">
                                </li>
                                <li>
                                    <h4>-25%</h4>
                                    <img src="public/images/b3.png" alt="">
                                </li>
                                <li>
                                    <h4>-32%</h4>
                                    <img src="public/images/b2.png" alt="">
                                </li>
                            </ul>
                        </div>
                    </section>
               
                
                        <script src="public/js/jquery.flexslider.js" type="text/javascript"></script>
                    <script type="text/javascript">
                        $(window).load(function(){
                          $('.flexslider').flexslider({
                            animation: "pagination",
                            start: function(slider){
                              $('body').removeClass('loading');
                            }
                          });
                        });
                    </script>
                    <!--End-slider-script-->
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>  
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
                        <a href="/home/showProduct/<?php echo $pro->id ?>"><img src="<?php  foreach ($products_images as $img)
                        {
                            if($img->product_id == $pro->id)
                            {
                                echo $img->link;
                            }
                            }
                            ?>" class="img-responsive" alt=""/></a>
                        <div class="new-text">
                            <ul>
                            <li><a href="/home/showProduct/<?php echo $pro->id ?>">Xem Nhanh </a></li>
								<li><input type="number" class="item_quantity" min="1" value="1"></li>
								<li><a class="item_add" href="">Thêm Vào Giỏ</a></li>

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
                    <a href="/home/showProduct/<?php echo $good->product_id ?>"><img src="<?php  foreach ($products_images as $img)
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