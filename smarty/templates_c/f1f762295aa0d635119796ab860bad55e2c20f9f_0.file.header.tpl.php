<?php
/* Smarty version 3.1.30, created on 2018-04-24 08:13:10
  from "D:\wamp64\www\Web_lam_chung\smarty\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adee71694c099_37916151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1f762295aa0d635119796ab860bad55e2c20f9f' => 
    array (
      0 => 'D:\\wamp64\\www\\Web_lam_chung\\smarty\\templates\\header.tpl',
      1 => 1524557588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adee71694c099_37916151 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="public/products.html">Ưu đãi hôm nay !</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Tìm một sản phẩm..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tìm một sản phẩm...';}" required>
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header">  
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="Xem giỏ hàng" class="button" />
                </fieldset>
            </form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="public/#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="public/login.html">Đăng Nhập</a></li> 
								<li><a href="public/login.html">Đăng Ký</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="public/mail.html">LIÊN HỆ</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<?php echo '<script'; ?>
>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	<?php echo '</script'; ?>
>
<!-- //script-for sticky-nav -->

	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="public/index.html"><span>Bách Hóa-Mini</span> Mart</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="public/events.html">Sản phẩm HOT</a><i>/</i></li>
					<li><a href="public/products.html">Giảm giá</a><i>/</i></li>
                    <li><a href="public/about.html">Về chúng tôi</a><i>    <!--/</i></li> -->
					<!--<li><a href="public/services.html">Services</a></li> -->
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+84) 1224 588 770</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="public/mailto:store@grocery.com">bachhoamini@gmail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header --><?php }
}
