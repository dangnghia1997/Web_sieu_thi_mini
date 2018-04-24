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
                    {foreach from=$danh_muc_cha  item=arr}
                    
						<li class="dropdown">
							<a href="public/#" class="dropdown-toggle" data-toggle="dropdown">{$arr->CategoryName}<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
                                    	{foreach from=$array_con  item=child}
                                        	{foreach from=$child item= c}
                                            	{if ($c->CategoryParentID == $arr->CategoryID)}
                                                    <li><a href="products.php">{$c->CategoryName}</a></li>
                                                    
                                        		{/if}
                                        	{/foreach}
                                        {/foreach}
									</ul>
								</div>                  
							</div>	
						</li>
						
					{/foreach}
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
        
		{if (isset($view))}
        	{include file="$view"}
        {/if}
        
		<div class="clearfix"></div>
	</div>