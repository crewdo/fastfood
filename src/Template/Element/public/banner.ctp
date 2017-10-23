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
				<div class="col-sm-7 banner-right wow fadeInRight animated" data-wow-delay=".5s">	<div class="intro-banner">Món ăn hot hôm nay!</div>		
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
					<!--FlexSlider-->
				
						<<script src="public/js/jquery.flexslider.js" type="text/javascript"></script>
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