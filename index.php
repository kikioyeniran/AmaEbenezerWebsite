<?php
include("includes/header.php")
?>

<!-- start banner Area -->
<section class="banner-area">
	<div class="container">
		<div class="row fullscreen align-items-center justify-content-between">
			<div class="col-lg-6 col-md-6 banner-left">
				<h6>Hello! I'm </h6>
				<h1>Ama Ebenezer</h1>
				<p>
					I'm always excited to meet new people and share knowledge. Let's connect!
				</p>
				<a href="#" class="primary-btn text-uppercase">Explore</a>
			</div>
			<div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
				<img class="img-fluid" src="img/ebenezer4.png" alt="">
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start home-about Area -->
<!-- <section class="home-about-area pt-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">
							<img class="img-fluid" src="img/about-img.png" alt="">
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">
							<h6>About Me</h6>
							<h1 class="text-uppercase">Personal Details</h1>
							<p>
								Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
							</p>
							<a href="#" class="primary-btn text-uppercase">View Full Details</a>
						</div>
					</div>
				</div>
			</section> -->
<!-- End home-about Area -->

<!-- Start services Area -->
<section class="services-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content  col-lg-7">
				<div class="title text-center">
					<h1 class="mb-10">My Offered Services</h1>
					<p>At about this time of year, some months after New Year’s resolutions have been made and kept, or made and neglected.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-services">
					<span class="lnr lnr-pie-chart"></span>
					<a href="#">
						<h4>Web Design</h4>
					</a>
					<p>
						“It is not because things are difficult that we do not dare; it is because we do not dare that they are difficult.”
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-services">
					<span class="lnr lnr-laptop-phone"></span>
					<a href="#">
						<h4>Web Development</h4>
					</a>
					<p>
						If you are an entrepreneur, you know that your success cannot depend on the opinions of others. Like the wind, opinions.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-services">
					<span class="lnr lnr-camera"></span>
					<a href="#">
						<h4>Photography</h4>
					</a>
					<p>
						Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-services">
					<span class="lnr lnr-picture"></span>
					<a href="#">
						<h4>Clipping Path</h4>
					</a>
					<p>
						Hypnosis quit smoking methods maintain caused quite a stir in the medical world over the last two decades. There is a lot of argument.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-services">
					<span class="lnr lnr-tablet"></span>
					<a href="#">
						<h4>Apps Interface</h4>
					</a>
					<p>
						Do you sometimes have the feeling that you’re running into the same obstacles over and over again? Many of my conflicts.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-services">
					<span class="lnr lnr-rocket"></span>
					<a href="#">
						<h4>Graphic Design</h4>
					</a>
					<p>
						You’ve heard the expression, “Just believe it and it will come.” Well, technically, that is true, however, ‘believing’ is not just thinking that.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- Start testimonial Area -->
<section class="testimonial-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Client’s Feedback About Me</h1>
					<p>It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="active-testimonial">
				<?php
				$query2 = "SELECT * FROM testimonies";
				$result = $mysqli->query($query2) or die($mysqli->error);
				while ($row = $result->fetch_assoc()) {
					?>
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="img-fluid" src="admin/images/<?php echo $row['picture']; ?>" alt="">
						</div>
						<div class="desc">
							<p><?php echo $row['testimony']; ?></p>
							<h4><?php echo $row['name']; ?></h4>
							<p><?php echo $row['portfolio']; ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<!-- End testimonial Area -->

<!-- Start price Area -->
<!-- <section class="price-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Choose Your Plan</h1>
								<p>When someone does something that they know that they shouldn’t do, did they.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">01</h1>
								<h4>Economy</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£199.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">02</h1>
								<h4>Business</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£299.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">03</h1>
								<h4>Premium</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£399.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">04</h1>
								<h4>Exclusive</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£499.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</section> -->
<!-- End price Area -->

<!-- Start recent-blog Area -->
<!-- <section class="recent-blog-area section-gap">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 pb-30 header-text">
							<h1>Latest posts from our blog</h1>
							<p>
								You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving and expanding the business
							</p>
						</div>
					</div>
					<div class="row">
						<div class="single-recent-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="img/b1.jpg" alt="">
							</div>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
							<a href="#">
								<h4>Break Through Self Doubt
								And Fear</h4>
							</a>
							<p>
								Dream interpretation has many forms; it can be done be done for the sake of fun, hobby or can be taken up as a serious career.
							</p>
						</div>
						<div class="single-recent-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="img/b2.jpg" alt="">
							</div>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
							<a href="#">
								<h4>Portable Fashion for
								young women</h4>
							</a>
							<p>
								You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving.
							</p>
						</div>
						<div class="single-recent-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="img/b3.jpg" alt="">
							</div>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
							<a href="#">
								<h4>Do Dreams Serve As
								A Premonition</h4>
							</a>
							<p>
								So many of us are demotivated to achieve anything. Such people are not enthusiastic about anything. They don’t want to work involved.
							</p>
						</div>


					</div>
				</div>
			</section> -->
<!-- end recent-blog Area -->


<?php
include("includes/footer.php")
?>