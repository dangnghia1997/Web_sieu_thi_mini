<?php
/* Smarty version 3.1.30, created on 2018-04-21 09:31:28
  from "D:\wamp64\www\Web_lam_chung\smarty\templates\banner_top.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adb04f038c667_75934966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d3ef00a4412c8bceb7e5cb461dddba9902f6d98' => 
    array (
      0 => 'D:\\wamp64\\www\\Web_lam_chung\\smarty\\templates\\banner_top.tpl',
      1 => 1524302879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adb04f038c667_75934966 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="products.php">Branded Foods</a></li>
						<li><a href="public/household.html">Households</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="public/#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="public/vegetables.html">Vegetables</a></li>
										<li><a href="public/vegetables.html">Fruits</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
						<li><a href="public/kitchen.html">Kitchen</a></li>
						<li><a href="public/short-codes.html">Short Codes</a></li>
						<li class="dropdown">
							<a href="public/#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="public/drinks.html">Soft Drinks</a></li>
										<li><a href="public/drinks.html">Juices</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="public/pet.html">Pet Food</a></li>
						<li class="dropdown">
							<a href="public/#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="public/frozen.html">Frozen Snacks</a></li>
										<li><a href="public/frozen.html">Frozen Nonveg</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="public/bread.html">Bread & Bakery</a></li>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l_banner_nav_right_banner">
								<h3>Make your <span>food</span> with Spicy.</h3>
								<div class="more">
									<a href="public/products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner1">
								<h3>Make your <span>food</span> with Spicy.</h3>
								<div class="more">
									<a href="public/products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner2">
								<h3>upto <i>50%</i> off.</h3>
								<div class="more">
									<a href="public/products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="public/css/flexslider.css" type="text/css" media="screen" property="" />
				<?php echo '<script'; ?>
 defer src="public/js/jquery.flexslider.js"><?php echo '</script'; ?>
>
				<?php echo '<script'; ?>
 type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  <?php echo '</script'; ?>
>
			<!-- //flexSlider -->
		</div>
		<div class="clearfix"></div>
	</div><?php }
}
