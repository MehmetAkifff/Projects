<?php include "includes/header.php" ;
    $aboutsor=$db->prepare("select * from about");
    $aboutsor->execute();
    $aboutgetir=$aboutsor->fetch(PDO::FETCH_ASSOC);

    $teamsor=$db->prepare("select * from team");
    $teamsor->execute();

    $yorumsor=$db->prepare("select * from yorum");
    $yorumsor->execute();
    
?>
<!-- //w3l-header -->
<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">

            <h2>About Us</h2>
            <p><a href="index.php">Home</a> &nbsp; / &nbsp; About</p>

        </div>
    </div>
</section>
<div class="w3l-about-us best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <div class="maghny-gd-1">
            <div class="row about-text">
                <div class="col-lg-6">
                    <h3 class="title-big"><?php echo $aboutgetir['about_baslik1'] ?></h3>
                </div>
                <div class="col-lg-6">
                    <p><?php echo $aboutgetir['about_aciklama1'] ?></p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="maghny-gd-1 col-lg-4 col-md-6">
                    <div class="maghny-grid">
                        <figure class="effect-lily border-radius">
                            <img class="img-fluid" src="<?php echo $aboutgetir['about_img1'] ?>">
                            <figcaption class="w3set-hny">
                                <div>
                                    <h4>Top Restaurant <span> Hotels</span></h4>
                                    <p>Breakfast and Dinner</p>
                                </div>

                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="maghny-gd-1 col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="maghny-grid">
                        <figure class="effect-lily border-radius">
                            <img class="img-fluid" src="<?php echo $aboutgetir['about_img2'] ?>">
                            <figcaption class="w3set-hny">
                                <div>
                                    <h4>Spa and Wellness <span> Hotels</span></h4>
                                    <p>Open Daily </p>
                                </div>

                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="maghny-gd-1 col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="maghny-grid">
                        <figure class="effect-lily border-radius">
                            <img class="img-fluid" src="<?php echo $aboutgetir['about_img3'] ?>">
                            <figcaption class="w3set-hny">
                                <div>
                                    <h4>Best Luxury Rooms <span> Hotels</span></h4>
                                    <p>Cool view </p>
                                </div>

                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="w3-about-2" id="features">
    <div class="w3-services-ab py-5">
        <div class="container py-lg-4 py-md-3">
            <div class="title-section">

                <div class="title-line">
                </div>
            </div>
            <div class="row w3-services-grids">
                <div class="col-lg-9 w3-services-right-grid pl-lg-5 mx-auto">
                    <h4 class="mb-md-5 mb-4">Doing the right thing, at the right time</h4>
                    <div class="fea-gd-vv row">
                        <div class="col-md-6">
                            <div class="float-lt feature-gd">
                                <div class="icon"> <span class="fa fa-file-text-o" aria-hidden="true"></span></div>
                                <div class="icon-info">
                                    <h5>Welcome Drink</h5>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed eiusmod tempor
                                        incididunt </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-4">
                            <div class="float-mid feature-gd">
                                <div class="icon"> <span class="fa fa-trophy" aria-hidden="true"></span></div>
                                <div class="icon-info">
                                    <h5>Bike Rental</h5>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed eiusmod tempor
                                        incididunt </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 pt-md-2">
                            <div class="float-rt feature-gd">
                                <div class="icon"> <span class="fa fa-clone" aria-hidden="true"></span></div>
                                <div class="icon-info">
                                    <h5>WIFI Areas</h5>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed eiusmod tempor
                                        incididunt </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 pt-md-2">
                            <div class="float-lt feature-gd">
                                <div class="icon"> <span class="fa fa-bullseye" aria-hidden="true"></span></div>
                                <div class="icon-info">
                                    <h5>Swimming Pool</h5>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed eiusmod tempor
                                        incididunt </p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team -->
<section class="team py-5" id="team">
	<div class="container py-lg-4 py-sm-3">
        <h3 class="title-big text-center mb-md-5 mb-4">Our Team</h3>
		<div class="row inner-sec-w3layouts-w3pvt-lauinfo">
            <?php while ($teamgetir=$teamsor->fetch(PDO::FETCH_ASSOC)) {
               
         ?>
			<div class="col-md-3 col-6">
				<div class="team-grids text-center">
					<img src="<?php echo $teamgetir['team_resim']; ?>" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4><?php echo $teamgetir['team_adsoyad'] ?></h4>
							<h6><?php echo $teamgetir['team_gorev'] ?></h6>
						</div>
					</div>
				</div>
				<div class="social-icons-section text-center">
					<a class="fac" href="#url">
						<i class="fa fa-facebook"></i>
					</a>
					<a class="twitter" href="#url">
						<i class="fa fa-twitter"></i>
					</a>
				</div>
			</div>
        <?php } ?>
			
			
		</div>
	</div>
</section>
<!-- team -->
<section class="w3l-stats">
    <div class="main-w3 py-5">
        <div class="container py-lg-3">
            <div class="row align-items-center">
                <div class="col-lg-6 title">
                    <h3 class="title-big">We have a great funfact! Relax & Enjoy your Holiday</h3>
                    <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, soluta impedit.
                        Consequatur,
                        quasi mollitia? Adipisci exercitationem amet dolore expedita repudiandae voluptatem impedit ipsa
                        vero
                        repellendus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio molestiae ex aut
                        possimus atque explicabo nostrum recusandae ab quisquam at!</p>
                </div>
                <div class="col-lg-6 main-cont-wthree-fea text-center">
                    <div class="row">
                        <div class="col-6 pr-2 mt-4">
                            <div class="grids-speci1">
                                <span class="fa fa-users"></span>
                                <h3 class="title-spe"><?php echo $aboutgetir['about_veri1'] ?></h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6 pl-2 mt-4">
                            <div class="grids-speci1">
                                <span class="fa fa-camera"></span>
                                <h3 class="title-spe"><?php echo $aboutgetir['about_veri2'] ?></h3>
                                <p>Luxury Rooms</p>
                            </div>
                        </div>
                        <div class="col-6 pr-2 mt-4">
                            <div class="grids-speci1">
                                <span class="fa fa-briefcase"></span>
                                <h3 class="title-spe"><?php echo $aboutgetir['about_veri3'] ?></h3>
                                <p>Employers</p>
                            </div>
                        </div>
                        <div class="col-6 pl-2 mt-4">
                            <div class="grids-speci1">
                                <span class="fa fa-comments"></span>
                                <h3 class="title-spe"><?php echo $aboutgetir['about_veri4'] ?></h3>
                                <p>Services</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="w3l-testimonials">
    <!-- main-slider -->
    <div class="testimonials py-5">
        <div class="container text-center py-lg-3">
            <div class="heading text-center mx-auto">
                <h3 class="title-big text-center">GÖRÜŞLERİMİZ</h3>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="owl-testimonial owl-carousel owl-theme">
                        <?php while($yorumgetir=$yorumsor->fetch(PDO::FETCH_ASSOC)){ ?>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="<?php echo $yorumgetir['yorum_img'] ?>" class="img-fluid rounded" alt="client image">
                                </div>
                                <div class="message"><?php echo $yorumgetir['yorum_yorum'] ?></div>
                                <div class="name"><?php echo $yorumgetir['yorum_adsoyad'] ?></div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main-slider -->
</section>
<?php include "includes/footer.php" ?>