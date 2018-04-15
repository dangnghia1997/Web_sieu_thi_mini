<div class="gallery">
		<div class="text-center">
			<h2>SẢN PHẨM NỔI BẬT</h2>
			<h4>Những mặt hàng đang giảm giá tốt nhất giành cho bạn</h4>

		</div>
		<div class="container">	
			<!-- <div class="col-md-3">
				<figure class="effect-marley">
					<img src="smarty/public/img/8.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Hàng ngon</h4>
						<p>mon hang ua chuong nhat</p>				
					</figcaption>			
				</figure>
			</div> -->
			{foreach $danh_sach_san_pham_giam_gia as $san_pham}	
			<div class="col-md-3">
				<figure class="effect-marley">
					<a href="#"><img src="smarty/public/images/product/full/{$san_pham->Image}" class="img-responsive" width="100%" /></a>
					<figcaption>
						<h4>{$san_pham->ProductName}</h4>
						<p>
							<span style="text-decoration: line-through;">
								{number_format($san_pham->Price)} VND						
							</span> 
							|  {number_format($san_pham->Price - ($san_pham->Price * ($san_pham->Discount/ 100)))} vnd
						</p>				
					</figcaption>	
				</figure>
			</div>
			{/foreach}
		</div>
	</div>