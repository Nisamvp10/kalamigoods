<?=view('frontend/inc/header');?>

        <!-- masthead end -->

        <!--Page Header-->
        <div class="page-header title-area">
            <div class="header-title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h1 class="page-title">Services</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12 site-breadcrumb">
                            <nav class="breadcrumb">
                                <a class="home" href="index.html"><span>Home</span></a>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span>Services</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Header end-->

        <!-- services sec -->
        <div class="allservsec">
            <div class="container">
                <div class="fh-service  style-bordered">
                    <div class="service-list row">
                      <?php 
                        if(!empty($services)) {
                            foreach($services as $service) {
                                ?>

                                <div class="item-service  col-xs-12 col-sm-6 col-md-4">
                                    <div class="service-content">
                                        <div class="entry-thumbnail">
                                            <a class="link" href="<?= base_url('service/'.$service->slug) ?>"></a>
                                            <a href="<?= base_url('service/'.$service->slug) ?>"><span class="icon"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
                                            <img src="<?= validImg($service->image) ?>" alt="">
                                        </div>
                                        <div class="summary">
                                            <h2 class="entry-title"><a href="<?= base_url('service/'.$service->slug) ?>"><?= $service->title ?></a></h2>
                                            <p style="text-align: justify;"><?= $service->short_note ?></p>
                                            <a href="<?= base_url('service/'.$service->slug) ?>" class="read-more">Read More...</a>
                                        </div>
                                    </div>
                                </div>
                        <?php 
                            }
                          }
                          ?>

                       
                    </div>
                </div>
            </div>
        </div>
        <!-- services sec end -->

        <!--services Welcome sec -->
        <div class="servwesec secpadd">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="uthead lftredbrdr">
                            <p>Trusted Logistics and Supply Chain Solutions</p>
                        </div>
                        <div class="mdltxtnrow">
                            Kalami Goods is a global logistics partner delivering <span class="main-color">reliable and cost-effective solutions.</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p>Kalami Goods is a trusted name in logistics, specializing in oil & gas, industrial transport, warehousing, and international freight services. Our expertise ensures seamless operations tailored to your business needs.</p>
                        <p>With a strong global network, we bring your goods safely to destinations worldwide, offering efficient customs clearance, supply chain management, and end-to-end logistics support without delays.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome sec   end-->

        <!-- featured sec -->
        <section class="features-1 bluebg">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="frs1box">
                        <div class="fh-icon-box style-3 version-dark hide-button icon-left">
                            <span class="fh-icon"><i class="flaticon-internet"></i></span>
                            <h4 class="box-title"><span>Fast worldwide delivery</span></h4>
                            <div class="desc">
                                <p style="text-align: justify;">We ensure timely global deliveries with efficient shipping networks by air, sea, and land.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="frs1box">
                        <div class="fh-icon-box style-3 version-dark hide-button icon-left">
                            <span class="fh-icon"><i class="flaticon-shield"></i></span>
                            <h4 class="box-title"><span>Safe and Secure Services</span></h4>
                            <div class="desc">
                                <p style="text-align: justify;">Your cargo is handled with advanced safety measures, reliable tracking, and complete care.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="frs1box">
                        <div class="fh-icon-box style-3 version-dark hide-button icon-left">
                            <span class="fh-icon"><i class="flaticon-technology"></i></span>
                            <h4 class="box-title"><span>24/7 customer support</span></h4>
                            <div class="desc">
                                <p style="text-align: justify;">Our support team is available around the clock to assist you with every shipment need.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- featured sec end -->

        <!-- about sec-->
        <section class="aboutsec-3 secpadd">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="abotimglft">
                            <img src="<?= base_url('public/assets/template/images/resources/about2.jpg');?>" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="abotinforgt">
                            <div class="fh-section-title f30 clearfix  text-left version-dark paddbtm30">
                                <h2>The Complete Solution</h2>
                            </div>
                            <p style="text-align: justify;">We specialize in providing comprehensive logistics and supply solutions, including oil & gas equipment, aviation supplies, ship channeling, and end-to-end freight services across air, sea, and land. Our warehousing and distribution facilities are designed to ensure safe, reliable, and efficient storage with complete supply chain support.</p>

                            <p style="text-align: justify;">From commercial and residential moving to heavy factory equipment handling, we deliver tailored solutions that match every client’s unique requirements. With a commitment to quality, safety, and timely delivery, we serve as a trusted partner for businesses across diverse industries.</p>

                            <a href="#" class="fh-button button  fh-btn margtop30">More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about end-->

        <!-- Three steps-->
        <section class="three_steps secpadd graybg">
            <div class="container">
                <div class="fh-section-title clearfix f30  text-center version-dark margbtm40">
                    <h2>Three Step Processing</h2>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="fh-icon-box style-2 version-dark icon-center service-process">
                            <span class="fh-icon"><i class="flaticon-box-1"></i></span>
                            <h4 class="box-title"><span>Receive From Shipper</span></h4>
                            <div class="desc">
                                <p style="text-align: justify;">We carefully receive cargo, equipment, or goods from the shipper, ensuring proper documentation, handling, and secure storage before transit begins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="fh-icon-box style-2 version-dark icon-center service-process">
                            <span class="fh-icon"><i class="flaticon-delivery-truck"></i></span>
                            <h4 class="box-title"><span>Safe & Secure Shipment</span></h4>
                            <div class="desc">
                                <p style="text-align: justify;">Through our reliable air, sea, and land logistics network, we guarantee safe, secure, and timely transportation of goods with real-time tracking and monitoring.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="fh-icon-box style-2 version-dark icon-center service-process">
                            <span class="fh-icon"><i class="flaticon-box-2"></i></span>
                            <h4 class="box-title"><span>Handover to Receiver</span></h4>
                            <div class="desc">
                                <p style="text-align: justify;">Upon arrival, we smoothly deliver and hand over the shipment to the receiver, ensuring accuracy, safety, and complete customer satisfaction.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Three steps end-->

     <?=view('frontend/inc/footer');?>
