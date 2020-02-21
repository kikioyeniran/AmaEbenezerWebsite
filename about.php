<?php
include("includes/header.php")
?>

<!-- start banner Area -->
<section class="banner-area relative blog-home-banner" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content blog-header-content col-lg-12">
				<h1 class="text-white">
					I am Ama Ebenezer
				</h1>
				<p class="text-white">
					There is a moment in the life of any aspiring astronomer that it is time to buy that first
				</p>
				<a href="blog-single.html" class="primary-btn">View More</a>
			</div>
		</div>
	</div>
</section>

<!-- Start home-about Area -->
<section class="home-about-area section-gap">
	<?php
	$query2 = "SELECT * FROM about WHERE id = 1 LIMIT 1";
	$result = $mysqli->query($query2) or die($mysqli->error);
	$row = $result->fetch_assoc();
	?>
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-lg-6 col-md-6 home-about-left">
				<img class="img-fluid" src="admin/images/<?php echo $row['picture']; ?>" alt="">
			</div>
			<div class="col-lg-5 col-md-6 home-about-right">
				<h6>About Me</h6>
				<h1 class="text-uppercase">Personal Details</h1>
				<p><?php echo $row['profile']; ?></p>
				<a href="#" class="primary-btn text-uppercase">View Full Details</a>
			</div>
			<div class="col-lg-12 pt-60">

				<h4 class="pt-30">Expertise</h4>
			</div>
		</div>
		<div class="row skillbar-wraps">
			<div class="col-lg-6 skill-left">
				<div class="single-skill">
					<p>
						Microsoft Office 85%
					</p>
					<div class="skill" data-width="85"></div>
				</div>
				<div class="single-skill">
					<p>
						Negotiation 90%
					</p>
					<div class="skill" data-width="90"></div>
				</div>
				<div class="single-skill">
					<p>
						Writing 70%
					</p>
					<div class="skill" data-width="70"></div>
				</div>
			</div>
			<div class="col-lg-6 skill-right">
				<div class="single-skill">
					<p>
						Public Speaking 85%
					</p>
					<div class="skill" data-width="95"></div>
				</div>
				<div class="single-skill">
					<p>
						Team Work 85%
					</p>
					<div class="skill" data-width="85"></div>
				</div>

			</div>
		</div>
	</div>
</section>

<!-- Start timeline Area -->
<section class="timeline pb-120">
	<div class="text-center">
		<div class="menu-content pb-70">
			<div class="title text-center">
				<h1 class="mb-10">My Qualifications and Education</h1>
				<p>Who are in extremely love with eco friendly system.</p>
			</div>
		</div>
	</div>
	<ul>
		<li>
			<div class="content">
				<h4>
					<time>Bs.c INDUSTRIAL PHYSICS (Electronics & IT Applications)</time>
				</h4>
				<p><b>Covenant University</p>
				<p><b>Second Class Upper Division</b> </p>
			</div>
		</li>

		<li>
			<div class="content">
				<!-- <img class="img-fluid mx-auto d-block mb-30" src="img/about/c-logo.png" alt=""> -->
				<h4>
					<time>Environmental Impact Assessment (EIA)- Department of Petroleum Resources (08/2019)</time>
				</h4>
				<p>Certiﬁcate of Completion; Screening, IEE, Scoping, Full Scale Assessment Review and Decision, Monitoring and Follow-up</p>
			</div>
		</li>
		<li>
			<div class="content">
				<h4>
					<time>British Project Management Professional (BPMA) (10/2019)</time>
				</h4>
				<p><b>Completed all 49 Processes and Training Under Novelle Centre; With Certiﬁcate Expected OCTOBER 2019. Training Feb, 2019</b> </p>
				<!-- <p><b>Result:</b> 3.40 (In the Scale of 4.00)</p> -->
			</div>
		</li>
		<li>
			<div class="content">
				<!-- <img class="img-fluid mx-auto d-block mb-30" src="img/about/c-logo.png" alt=""> -->
				<h4>
					<time>Google Digital Skills Training (02/2018)</time>
				</h4>
				<p><b>Awarded Certiﬁcate of completion in “Basic Digital Skills Training” Haptics Nigeria, Sponsored by Google</b> </p>
			</div>
		</li>
		<li>
			<div class="content">
				<!-- <img class="img-fluid mx-auto d-block mb-30" src="img/about/c-logo.png" alt=""> -->
				<h4>
					<time>HEALTH, SAFETY & ENVIRONMENT 1,2, 3- British International Organization (09/2019)</time>
				</h4>
				<p><b>Certiﬁed Training in Occupational Health, Safety and Environment; Environmental, Training in February 2019</b> </p>
				<!-- <p><b>Result:</b> 4.94 (In the Scale of 5.00)</p> -->
			</div>
		</li>
	</ul>
</section>

<section class="timeline pb-120">
	<div class="text-center">
		<div class="menu-content pb-70">
			<div class="title text-center">
				<h1 class="mb-10">My Experience</h1>
				<p>Who are in extremely love with eco friendly system.</p>
			</div>
		</div>
	</div>
	<ul>
		<li>
			<div class="content">
				<h4>
					<time>Contract Staﬀ (Trainee in Procurement and Operations)</time>
				</h4>
				<p><b>PANAL PAKER PPS LIMITED </b>Port Harcourt, Nigeria</p>
				<p>Oil and Gas, Procurement of OCTGs, Waste Mangement, Engineering Services</p>
				<p> Jan 2019 - OCt 2019</p>
			</div>
		</li>

		<li>
			<div class="content">
				<!-- <img class="img-fluid mx-auto d-block mb-30" src="img/about/c-logo.png" alt=""> -->
				<h4>
					<time>Intern/time>
				</h4>
				<p><b>Scientiﬁc Equipment Development Institute Enugu (SEDI-E)</b> Enugu, Nigeria</p>
				<p>Government Research and Construction Institute.</p>
				<p>Feb 2017 - August 2017</p>
			</div>
		</li>
		<li>
			<div class="content">
				<h4>
					<time>PERSONAL PROJECTS (VOLUNTEER) </time>
				</h4>
				<p><b>Volunteer, UN Teach SDG’s Enugu, Nigeria Covenant University Chapter (05/2018 – 07/2018)</b> </p>
				<p>Raised over 30,000 free Books for students in rural areas with little or no access to Quality Books and ran sensitization on Energy conservation with environmental sustainability.</p>
				<p>Sensitization on the 17 SDG's. </p>
				<p>Community Impact Service and Aid to needy.</p>
				<!-- <p><b>Result:</b> 3.40 (In the Scale of 4.00)</p> -->
			</div>
		</li>
	</ul>
</section>
<!-- End timeline Area -->
<!-- End home-about Area -->

<?php
include("includes/footer.php")
?>