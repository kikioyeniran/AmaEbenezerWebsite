<?php
include("includes/header.php")
?>

<!-- start banner Area -->
<section class="banner-area relative services-home-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content blog-header-content col-lg-12">
                <h1 class="text-white">
                    Explore the Services I Offer
                </h1>
                <p class="text-white">
                    There is a moment in the life of any aspiring astronomer that it is time to buy that first
                </p>
                <a href="blog-single.html" class="primary-btn">View More</a>
            </div>
        </div>
    </div>
</section>
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
<!-- End services Area -->

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


<?php
include("includes/footer.php")
?>