<?php
/* Smarty version 3.1.30, created on 2018-04-21 08:17:54
  from "D:\wamp64\www\Web_lam_chung\smarty\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adaf3b2a0b583_41965107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e297f0bf50ddbc2e27f2ed0783d742f04278d63' => 
    array (
      0 => 'D:\\wamp64\\www\\Web_lam_chung\\smarty\\templates\\footer.tpl',
      1 => 1524298648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adaf3b2a0b583_41965107 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>information</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="public/events.html">Events</a></li>
					<li><a href="public/about.html">About Us</a></li>
					<li><a href="public/products.html">Best Deals</a></li>
					<li><a href="public/services.html">Services</a></li>
					<li><a href="public/short-codes.html">Short Codes</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>policy info</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="public/faqs.html">FAQ</a></li>
					<li><a href="public/privacy.html">privacy policy</a></li>
					<li><a href="public/privacy.html">terms of use</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>what in stores</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="public/pet.html">Pet Food</a></li>
					<li><a href="public/frozen.html">Frozen Snacks</a></li>
					<li><a href="public/kitchen.html">Kitchen</a></li>
					<li><a href="public/products.html">Branded Foods</a></li>
					<li><a href="public/household.html">Households</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>twitter posts</h3>
				<ul class="w3_footer_grid_list1">
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span>Non numquam <a href="public/#">http://sd.ds/13jklf#</a>
						eius modi tempora incidunt ut labore et
						<a href="public/#">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span>Con numquam <a href="public/#">http://fd.uf/56hfg#</a>
						eius modi tempora incidunt ut labore et
						<a href="public/#">http://fd.uf/56hfg#</a>quo nulla.</span></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h4>100% secure payments</h4>
						<img src="public/images/card.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>connect with us</h5>
						<ul class="agileits_social_icons">
							<li><a href="public/#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="public/#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="public/#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="public/#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="public/#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2016 Grocery Store. All rights reserved | Design by <a href="public/http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<?php echo '<script'; ?>
 src="public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
<?php echo '</script'; ?>
>
<!-- here stars scrolling icon -->
	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	<?php echo '</script'; ?>
>
<!-- //here ends scrolling icon -->
<?php echo '<script'; ?>
 src="public/js/minicart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
