     <?=view('frontend/inc/header');?>


        <!-- masthead end -->

        <!--Page Header-->
        <div class="page-header title-area">
            <div class="header-title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h1 class="page-title">Contact</h1>
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
                                <span>Contact</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Header end-->

        <!--contact pagesec-->
        <section class="contactpagesec secpadd">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="fh-section-title clearfix f25 text-left version-dark paddbtm40">
                            <h2>Contact Details</h2>
                        </div>
                        <p class="margbtm30">If you have any questions about what we offer for consumers or for business, you can always email us or call us via the below details. We’ll reply within 24 hours.</p>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="fh-contact-box type-address "><i class="flaticon-pin"></i>
                                    <h4 class="box-title">Visit our office</h4>
                                    <div class="desc">
                                        <p>Office 1302, Tower-2, World Trade, Dubai</p>
                                    </div>
                                </div>
                                <div class="fh-contact-box type-email "><i class="flaticon-business"></i>
                                    <h4 class="box-title">Mail Us at</h4>
                                    <div class="desc">
                                        <p> info@kalamigoods.com
                                        </p>
                                    </div>
                                </div>
                                <div class="fh-contact-box type-phone "><i class="flaticon-phone-call "></i>
                                    <h4 class="box-title">Call us on</h4>
                                    <div class="desc">
                                        <p>Office: +971568638394
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                
                                <!-- <div class="fh-contact-box type-social "><i class="flaticon-share"></i>
                                    <h4 class="box-title">We are social</h4>
                                    <ul class="clearfix">
                                        <li class="facebook">
                                            <a href="#" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="googleplus">
                                            <a href="#" target="_blank">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#" target="_blank">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#" target="_blank">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="opening-hours vc_opening-hours">
                            <h3>WORKING HOURS</h3>
                            <p>Pleasure and praising pain was born and will give you a complete happiness.</p>
                            <ul>
                                <li>Monday <span class="hour">9:00 am – 17.00 pm</span></li>
                                <li>Tuesday<span class="hour">9:00 am – 18.00 pm</span></li>
                                <li>Wednesday <span class="hour">9:00 am – 18.00 pm</span></li>
                                <li>Thurs &amp; Friday<span class="hour">10:00 am – 16.00 pm</span></li>
                                <li>Sat &amp; Sunday <span class="hour main-color">Closed</span></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!--contact end-->

        <!--contact form -->
        <section class="contactpagform graybg secpadd">
            <div class="container">
                <div class="fh-section-title clearfix f25 text-center version-dark paddbtm40">
                    <h2>Leave Your Message</h2>
                </div>
                <p class="paddbtm40 text-center">If you have any questions about the services we provide simply use the form below. We try and respond to all
                    <br>queries and comments within 24 hours.</p>
                <form method="post" action="ajax/mail.php" id="contact-form" novalidate="novalidate">
                    <div class="fh-form fh-form-3">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p class="field">
                                    <input name="name" placeholder="Your Name*" type="text">
                                </p>
                                <p class="field">
                                    <input name="email" placeholder="Email Address*" type="email">
                                </p>
                                <p class="field">
                                    <input name="phone" placeholder="Phone" type="text">
                                </p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p class="field single-field">
                                    <textarea name="message" cols="40" rows="10" placeholder="Your Message..."></textarea>
                                </p>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <p class="field submit">
                                    <button class="fh-btn" type="submit">Submit</button>
                                </p>
                            </div>
                            <div id="loading" style="display:none"><img src="images/ajax-loader.png" alt="loading" /></div>
                            <div class="contact-form-message"></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--contact form  end -->

        <!--google map-->
        <div class="google-map-area">
            <div class="google-map" id="contact-google-map" data-map-lat="51.545527" data-map-lng="-0.133272" data-icon-path="images/icon/maker3.png" data-map-title="Chester" data-map-zoom="13" data-markers='{
							"marker-1": [51.545527, -0.133272, "<h4>Cargo Hub</h4><p>Camden Borough </p>"]
						}' style="height:500px;width:100%;">
            </div>
        </div>
        <!--google map end-->
     <?=view('frontend/inc/footer');?>
