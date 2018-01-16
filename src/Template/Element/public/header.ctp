<!DOCTYPE html>
<html>
<head>
<title>Ăn vặt</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>

<?= $this->Html->meta(
'favicon.ico',
'/public/images/favicon.ico',
array('type'=>'icon')
) ?>

<?= $this->Html->css([
'/public/css/bootstrap.css',
'/public/css/style.css',
'/public/css/animate.min.css',
'/public/css/custom.css',

])?>

<?= $this->Html->script([
'/public/js/jquery-1.11.1.min.js',
'/public/js/modernizr.custom.js',
'/public/js/simpleCart.min.js',
'/public/js/wow.min.js',
'/public/js/move-top.js',
'/public/js/easing.js',

])?>

	<script>
	 new WOW().init();
	</script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->
	<?= $this->Element('public/menu') ?>
	<!--//header-->
