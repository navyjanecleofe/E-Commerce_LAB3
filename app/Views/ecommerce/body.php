<div id="top-bar" class="container">
<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>
							<li><a href="checkout.html">Checkout</a></li>					
							<li><a href="adminlog.php">Login</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
        <div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="<?= base_url(); ?>ecommerce/themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.html">Woman</a>					
								<ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul>
							</li>															
							<li><a href="./products.html">Man</a></li>			
							<li><a href="./products.html">Sport</a>
								<ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul>
							</li>							
							<li><a href="./products.html">Hangbag</a></li>
							<li><a href="./products.html">Best Seller</a></li>
							<li><a href="./products.html">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="<?= base_url(); ?>ecommerce/themes/images/carousel/banner-1.jpg" alt="" />
						</li>
						<li>
							<img src="<?= base_url(); ?>ecommerce/themes/images/carousel/banner-2.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			<br>
			<section class="header_text">
				We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates. 
				<br/>Don't miss to use our cheap abd best bootstrap templates.
			</section>
			<section class="main-content">
			<div class="row">
							<div class="span12">                                                    
								<div class="row">
									<div class="span12">
										<h4 class="title">
											<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
											<span class="pull-right">
												<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
											</span>
										</h4>
										<div id="myCarousel" class="myCarousel carousel slide">
										<div class="carousel-inner">
											<div class="active item">
												<ul class="thumbnails" style="display: flex; justify-content: center; align-items: center;">
													<?php foreach ($items as $i): ?>
													<li class="span3" style="margin: 0 10px;">
														<div class="product-box">
															<span class="sale_tag"></span>
															<a href="<?= base_url(); ?>ecommerce/themes/images/ladies/2.jpg" data-lightbox="product-images">
																<p><img src="<?= base_url(); ?>ecommerce/themes/images/ladies/2.jpg" alt="" /></p>
															</a>
															<h3><a href="product_detail.html"><?= $i['name']; ?></a></h3>
															<h4><?= $i['description']; ?></h4>
															<h4>₱<?= number_format($i['price'], 2); ?></h4>

														</div>
													</li>
													<?php endforeach; ?>
												</ul>
											</div>
										</div>
									</div>

									</div>
								</div>                      
							</div>
						</div>

						<br/>

						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="<?= base_url(); ?>ecommerce/themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="<?= base_url(); ?>ecommerce/themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="<?= base_url(); ?>ecommerce/themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="<?= base_url(); ?>ecommerce/themes/images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<?= base_url(); ?>ecommerce/themes/images/clients/35.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<?= base_url(); ?>ecommerce/themes/images/clients/1.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<?= base_url(); ?>ecommerce/themes/images/clients/2.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<?= base_url(); ?>ecommerce/themes/images/clients/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<?= base_url(); ?>ecommerce/themes/images/clients/4.png"></a>
					</div>
				</div>
			</section>
			<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    });
</script>


		