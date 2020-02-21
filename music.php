<?php
include("includes/header.php")
?>


<!-- start banner Area -->
<section class="banner-area relative about-home-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content blog-header-content col-lg-12">
                <h1 class="text-white">
                    I am a Worshipper
                </h1>
                <p class="text-white">
                    There is a moment in the life of any aspiring astronomer that it is time to buy that first
                </p>
                <a href="blog-single.html" class="primary-btn">View More</a>
            </div>
        </div>
    </div>
</section>
<section class="home-about-area section-gap">
    <?php
    $query2 = "SELECT * FROM about WHERE id = 1 LIMIT 1";
    $result = $mysqli->query($query2) or die($mysqli->error);
    $row = $result->fetch_assoc();
    ?>
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 home-about-left">
                <img class="img-fluid" src="img/music.jpg" alt="">
            </div>
            <div class="col-lg-5 col-md-6 home-about-right">
                <h6>Ama Ebezer</h6>
                <h1 class="text-uppercase">My Music Ministry</h1>
                <p><?php echo $row['profile']; ?></p>
                <a href="#" class="primary-btn text-uppercase">View Full Details</a>
            </div>
        </div>
    </div>
</section>

<!-- Start recent-blog Area -->
<section class="recent-blog-area section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text">
                <h1>Worship Archive</h1>
                <p>
                    Here are links to a number of intense worship sessions I have uploaded to my YouTube page. Watch and be blessed!
                </p>
            </div>
        </div>
        <div class="row">
            <?php
            $query2 = "SELECT * FROM videos ORDER by id DESC";
            $result = $mysqli->query($query2) or die($mysqli->error);
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="single-recent-blog col-lg-4 col-md-4">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="admin/images/<?php echo $row['picture']; ?>" alt="">
                    </div>
                    <!-- <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img class="img-fluid" src="img/user.png" alt="">
                        <a href="#"><span>Mark Wiens</span></a>
                    </div>
                    <div class="meta">
                        13th Dec
                        <span class="lnr lnr-heart"></span> 15
                        <span class="lnr lnr-bubble"></span> 04
                    </div>
                </div> -->
                    <a href="#">
                        <h4><?php echo $row['title']; ?></h4>
                    </a>
                    <p><?php echo $row['description']; ?></p>
                </div>
            <?php } ?>



        </div>
    </div>
</section>
<!-- end recent-blog Area -->

<!-- Start portfolio-area Area -->
<section class="portfolio-area section-gap" id="portfolio">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Gallery</h1>
                    <p>Moments Captured.</p>
                </div>
            </div>
        </div>

        <!-- <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".vector">Vector</li>
                            <li data-filter=".raster">Raster</li>
                            <li data-filter=".ui">UI/UX</li>
                            <li data-filter=".printing">Printing</li>
                        </ul>
                    </div> -->

        <div class="filters-content">
            <div class="row grid">
                <?php
                $query2 = "SELECT * FROM gallery";
                $result = $mysqli->query($query2) or die($mysqli->error);
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="single-portfolio col-sm-4 all vector">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="admin/images/<?php echo $row['picture']; ?>" alt="">
                            </div>
                            <a href="admin/images/<?php echo $row['picture']; ?>" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                </div>
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>Ama Ebenezer</h4>
                            <!-- <div class="cat">vector</div> -->
                        </div>
                    </div>
                <?php } ?>
                <!-- <div class="single-portfolio col-sm-4 all raster">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/p2.jpg" alt="">
                        </div>
                        <a href="img/p2.jpg" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4>2D Vinyl Design</h4>
                        <div class="cat">vector</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all ui">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/p3.jpg" alt="">
                        </div>
                        <a href="img/p3.jpg" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>

                    </div>
                    <div class="p-inner">
                        <h4>Creative Poster Design</h4>
                        <div class="cat">Agency</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all printing">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/p4.jpg" alt="">
                        </div>
                        <a href="img/p4.jpg" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4>Embosed Logo Design</h4>
                        <div class="cat">Portal</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all vector">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/p5.jpg" alt="">
                        </div>
                        <a href="img/p5.jpg" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4>3D Helmet Design</h4>
                        <div class="cat">vector</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all raster">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/p6.jpg" alt="">
                        </div>
                        <a href="img/p6.jpg" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4>2D Vinyl Design</h4>
                        <div class="cat">raster</div>
                    </div>
                </div> -->
            </div>
        </div>

    </div>
</section>
<!-- End portfolio-area Area -->

<?php
include("includes/footer.php")
?>