<?=view('frontend/inc/header');?>

        <!-- masthead end -->

        <!--Page Header-->
        <div class="page-header title-area">
            <div class="header-title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h1 class="page-title">About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12 site-breadcrumb">
                            <nav class="breadcrumb">
                                <a class="home" href="<?= base_url() ?>"><span>Home</span></a>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span>About Us</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Header end-->

        <!--About us-->
        <section class="aboutsec-2 secpaddbig">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="abotimglft">
                            <img src="<?= base_url('public/assets/template/images/resources/about2.jpg') ?>" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <div class="abotinforgt">
                            <div class="fh-section-title clearfix text-left version-dark paddbtm30">
                                <h2>Who We Are</h2>
                            </div>
                            <p style="text-align: justify;">Kalami Goods is a trusted global provider of transport and logistics solutions, delivering reliable and efficient services across shipping, aviation, oil & gas, and industrial sectors. We add value to every interaction with our clients through professional handling, timely deliveries, and tailored solutions.</p>
                            <p style="text-align: justify;">We prioritize our customers, employees, and partners, nurturing long-term relationships while maintaining the highest standards of safety, compliance, and operational excellence. Our mission is to make logistics seamless, cost-effective, and globally accessible.</p>
                            <!-- <img class="paddtop20" src="images/icon/signature-1.png" alt="" /> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About us end-->

        <!-- Feature sec -->
        <section class="features-3 bluebg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="fh-feature-box "><span class="chars">M</span>
                            <h4 class="box-title">Our Mission</h4>
                            <div class="desc"><?= getappdata('mission') ?></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="fh-feature-box "><span class="chars">V</span>
                            <h4 class="box-title">Our Vision</h4>
                            <div class="desc"><?= getappdata('vision') ?></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="fh-feature-box "><span class="chars">C</span>
                            <h4 class="box-title">Core Values</h4>
                            <div class="desc"><?= getappdata('values') ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature sec end -->

        <!-- featured sec -->
        <section class="whychoos-3 secpadd">
            <div class="container">
                <div class="fh-section-title clearfix  text-center version-dark paddbtm30">
                    <h2>Why Choose Us</h2>
                </div>
                <div class="row">
                  <?php 
                        if(!empty($industries)) {
                            foreach($industries as $industry) {
                                ?>

                    <div class="col-md-4 col-sm-6">
                        <div class="fh-icon-box  style-2 version-dark  icon-center">
                             <span class="fh-icon"><img style="padding: 10px;" src="<?= validImg($industry->image) ?>" /></i></span>
                            <h4 class="box-title"><span><?= $industry->title ?></span></h4>
                            <div class="desc">
                                <p><?= $industry->note ?></p>
                            </div>
                        </div>
                    </div>
                    <?php 
                            }
                          }
                    ?>
                    
                </div>
            </div>
        </section>
        <!-- featured sec end -->

       
        <!--Our Team section end-->

             <?=view('frontend/inc/footer');?>
