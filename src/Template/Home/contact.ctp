	<!--contact-->
	<div class="contact">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title"> Địa chỉ <span> FastFoody </span></h3>	
			</div>
			<iframe class="wow zoomIn animated animated" data-wow-delay=".5s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.0663118485872!2d106.77974201418326!3d10.882561060202944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d885564f40f1%3A0x69ba5a55a3ec0e6f!2zS8O9IHTDumMgeMOhIEtodSBCIMSQ4bqhaSBo4buNYyBRdeG7kWMgZ2lhIFRQLiBIQ00!5e0!3m2!1sen!2s!4v1508115599789" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>	
	</div>
	<div class="address"><!--address-->
		<div class="container">
			<div class="address-row">
				<div class="col-md-6 address-left wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="address-grid">
						<h4 class="wow fadeIndown animated" data-wow-delay=".5s"> Lời nhắn  </h4>
						<form>
							<input class="wow fadeIndown animated" data-wow-delay=".6s" type="text" placeholder="Tên" required="">
							<input class="wow fadeIndown animated" data-wow-delay=".7s" type="text" placeholder="Email" required="">
							<input class="wow fadeIndown animated" data-wow-delay=".8s" type="text" placeholder="Chủ Đề" required="">
							<textarea class="wow fadeIndown animated" data-wow-delay=".8s" placeholder="Lời Nhắn" required=""></textarea>
							<input class="wow fadeIndown animated" data-wow-delay=".9s" type="submit" value="Gửi">
						</form>
					</div>
				</div>
				<div class="col-md-6 address-right">
					<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
						<h4>Địa Chỉ</h4>
						<p><?php echo $information->address ?> </p>
					</div>
					<div class="address-info address-mdl wow fadeInRight animated" data-wow-delay=".7s">
						<h4> Điện Thoại </h4>
						<p><?php echo $information->phone ?></p>
						<p><?php echo $information->phone_nd ?></p>
					</div>
					<div class="address-info wow fadeInRight animated" data-wow-delay=".6s">
						<h4>Mail</h4>
						<p><a href="mailto:<?php echo $information->email?> "> <?php echo $information->email ?></a></p>
					</div>
				</div>
			</div>	
		</div>	
	</div>
	<!--//contact-->