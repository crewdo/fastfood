<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.html">Fast <b>Foody</b> <span class="tag">Quá ngon và Nhanh chóng </span> </a></h4>
					
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
					<h3>Phổ Biến</h3>
					<ul>
						<li><a href="/about">Thông Tin</a></li>
						<li><a href="/products">Sản phẩm</a></li>
						<li><a href="/contact">Liên Hệ </a></li>	
						<li><a href="cart">Giỏ Hàng</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
					<h3>Đăng Ký</h3>
					<p> Đăng ký nhanh </p>
					<form>
						<input type="text" placeholder="Nhập Email của Bạn" required="">
						<input type="submit" value="OK">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//footer-->		
	<!--search jQuery-->
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>


<?= $this->Html->script([
'/public/js/main.js',
'/public/js/bootstrap.js',
]) ?>
</body>
</html>