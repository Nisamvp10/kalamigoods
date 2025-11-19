<?= view('frontend/inc/header') ;?> 

<body>
<?= view('frontend/inc/nav');?>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main id="primary" class="site-main">
        <div class="space-for-header"></div>
        <!-- start: Banner Slider -->

        <section class="tj-slider-section">
          <div class="swiper hero-slider">
            <div class="swiper-wrapper">
              <?php
              if(!empty($banner)) {
                foreach($banner as $slider) {?>
                <div class="swiper-slide tj-slider-item">
                  <div class="slider-bg-image" data-bg-image="<?=($slider->image ? $slider->image : base_url('uploads/default.png'));?>"></div>
                  <div class="container">
                    <div class="slider-wrapper slider-height">
                      <div class="slider-content">
                        <h1 class="slider-title"><?=($slider->title ? $slider->title: '');?></h1>
                        <div class="slider-desc"><?=($slider->subtitle ? $slider->subtitle: '');?></div>
                        <div class="slider-btn">
                          <a class="tj-primary-btn" href="<?=base_url('service-us');?>">
                            <span class="btn-text"><span>Get Started</span></span>
                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php 
                }
              }
              //Unbreakable Security Unmatched <span>Confidence.</span>
              //We provide cutting-edge cybersecurity services and technologies. Our solutions safeguard your digital assets.
              ?>

             


            </div>
            <div class="hero-navigation d-inline-flex wow fadeIn" data-wow-delay="1.5s">
              <div class="slider-prev">
                <span class="anim-icon">
                  <i class="tji-arrow-left"></i>
                  <i class="tji-arrow-left"></i>
                </span>
              </div>
              <div class="slider-next">
                <span class="anim-icon">
                  <i class="tji-arrow-right"></i>
                  <i class="tji-arrow-right"></i>
                </span>
              </div>
            </div>
          </div>
          <!-- <div class="swiper hero-thumb wow fadeIn" data-wow-delay="2s">
            <div class="swiper-wrapper">
              <div class="swiper-slide thumb-item">
                <img src="assets/images/hero/slider-thumb-1.webp" alt="Thumbnail">
              </div>
              <div class="swiper-slide thumb-item">
                <img src="assets/images/hero/slider-thumb-2.webp" alt="Thumbnail">
              </div>
              <div class="swiper-slide thumb-item">
                <img src="assets/images/hero/slider-thumb-3.webp" alt="Thumbnail">
              </div>
            </div>
          </div> -->
          <div class="circle-text-wrap wow fadeInUp" data-wow-delay="1s">
            <span class="circle-text" data-bg-image="<?=base_url('public/assets/template/assets/images/hero/circle-text.webp');?>"></span>
            <a class="circle-icon" href="javascript:void(0)"><i class="tji-arrow-down-big"></i></a>
          </div>
        </section>
        <!-- end: Banner Slider -->

        <!-- start: why techens -->
        <section class="tj-about-section section-gap" id="j-about">
          <div class="container">
            <div class="row row-gap-4">
              <div class="row d-flex align-items-stretch row-gap-4">
                <div class="col-lg-4 col-md-6 order-lg-1 order-3">
                  <div class="countup-item style-2 wow fadeInUp h-100" data-wow-delay=".1s">
                    <span class="count-icon">
                      <img src="<?=base_url('public/assets/template/assets/images/icons/hand.svg');?>">
                    </span>
                    <span class="steps">01.</span>
                    <div class="count-inner why-techens-content">
                      <h3>Connect</h3>
                      <p>We establish clear contact with  clients which is vital for a long term relationship.</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-8 col-md-6 col-sm-12 order-lg-2 order-1">
                  <div class="about-content-area-2 wow fadeInUp h-100" data-wow-delay=".3s">
                    <div class="video-img wow fadeInRight" data-wow-delay=".7s">
                      <img src="<?=base_url('public/assets/template/assets/images/video-thump.jpg');?>" alt="Image">
                      <a class="video-btn video-popup" data-autoplay="true" data-vbtype="video"
                        data-maxwidth="1200px" href="<?=base_url('public/assets/template/assets/images/techens-global-1.mp4');?>">
                        <span><i class="tji-play"></i></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row d-flex align-items-stretch row-gap-4">
               <div class="col-lg-4 col-md-6 order-lg-4 order-4 d-flex">
                <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".5s">
                  <span class="count-icon">
                    <!-- <i class="tji-complete"></i> -->
                    <img src="<?=base_url('public/assets/template/assets/images/icons/understand.svg');?>">
                  </span>
                  <span class="steps">02.</span>
                    <div class="count-inner why-techens-content">
                        <h3>Understand.</h3>
                        <p>Our experts analyze requirements of the client which we cinsider as sovereign.</p>
                    </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 order-lg-4 order-4 d-flex">
                <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".5s"> 
                  <span class="count-icon">
                    <!-- <i class="tji-complete"></i> -->
                    <img src="<?=base_url('public/assets/template/assets/images/icons/satisfy.svg');?>">
                  </span>
                  <span class="steps">03.</span>
                    <div class="count-inner why-techens-content">
                        <h3> Satisfy</h3>
                        <p>Our team take care to make sure that the Return On Investment of the project is satisfying to clients finance.</p>
                    </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 order-lg-4 order-4 d-flex">
                <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".5s">
                    <span class="count-icon">
                    <!-- <i class="tji-complete"></i> -->
                    <img src="<?=base_url('public/assets/template/assets/images/icons/our-responsible.svg');?>">
                  </span>
                    <span class="steps">04.</span>
                    <div class="count-inner why-techens-content">
                        <h3>Trust Maintain</h3>
                        <p> The best teaming relatiinship is key for succesful security. Our vision is to maintain the relationship for ever.</p>
                    </div>
                </div>
            </div>
            </div>

            </div>
          </div>
        </section>
        <!-- end: why techens -->

        <!-- start: About Section -->
        <section class="h9-about-section section-bottom-gap">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="sec-heading style-1 h9-sec-heading">
                  <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                      <!-- <i class="tji-box"></i> -->
                       <img src="<?=base_url('public/assets/template/assets/images/icons/short-about.svg');?>">
                      our Mission</span>
                  <h2 class="sec-title title-highlight">Safeguard our client's trust with innovation, integrity and focus on protecting their digital properties.
                    
                    <!-- <span>We Cherish</span> And Respect Our Clients & Partners. Every Project Is A Labor Of Love! -->
                  </h2>
                </div> 
                <div class="h9-about-area">
                  <div class="about-img-area h9-about-img wow fadeInLeft" data-wow-delay=".3s">
                    <div class="about-img overflow-hidden">
                      <img data-speed=".8" src="<?=base_url('public/assets/template/assets/images/technes-img/short-about-us.jpg');?>" alt="">
                    </div>
                  </div>
                  <div class="h9-about-content">
                    <p class="desc wow fadeInUp" data-wow-delay=".4s">We are a leading provider of cutting-edge cybersecurity services and technologies designed to safeguard your digital assets and protect your business from evolving cyber threats. With our expertise and dedication to excellence, we offer comprehensive solutions tailored to meet your specific needs and ensure the highest level of security for your organization.</p>
                    <div class="h9-about-funfact wow fadeInUp" data-wow-delay=".6s">
                        <div class="countup-item">
                            <div class="inline-content">
                                <span class=""></span>
                                <span class="count-plus">10M+</span>
                            </div>
                            <span class="count-text">Threats Neutralized Daily</span>
                        </div>
                        <div class="countup-item">
                            <div class="inline-content">
                                <span class=""></span>
                                <span class="count-plus">24/7</span>
                            </div>
                            <span class="count-text">Security Operations Monitoring</span>
                        </div>
                        <div class="countup-item">
                            <div class="inline-content">
                                <span class=""></span>
                                <span class="count-plus">95%</span>
                            </div>
                            <span class="count-text">Faster Breach Detection Time</span>
                        </div>
                    </div>
                    <div class="about-btn-area-2 wow fadeInUp" data-wow-delay=".7s">
                      <a class="tj-secondary-btn" href="<?=base_url('service-us');?>">
                        <span class="btn-text"><span>Explore More</span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                      </a>
                      <!-- <a class="video-btn video-popup" data-autoplay="true" data-vbtype="video" data-maxwidth="1200px"
                        href="#">
                        <span class="play-btn"><i class="tji-play"></i></span>
                        <span class="video-text">Play our reels</span>
                      </a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: About Section -->


        <!-- start: Service Section -->
        <section class="tj-service-section overflow-hidden section-gap">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-12">
                <div class="sec-heading text-left">
                  <span class="sub-title text-white wow fadeInUp text-left" data-wow-delay=".3s"><i class="tji-box"></i>Our
                    Solutions</span>
                  <h2 class="sec-title text-white title-anim text-left">Solutions to Secure <br>Your <span>Business.</span></h2>
                </div>
              </div>
              <div class="col-md-4 col-12 service-button">
                <div class="about-btn-area-2 wow fadeInUp" data-wow-delay=".7s">
                      <a class="tj-primary-btn" href="<?=base_url('service-us');?>">
                        <span class="btn-text"><span>Explore More</span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                      </a>
                    </div>
              </div>
            </div>
          </div>
          <div class="container-fluid p-0">
            <div class="row">
              <div class="col-12">
                <div class="service-wrapper wow fadeInUp" data-wow-delay=".4s">
                  <div class="swiper service-slider">
                    <div class="swiper-wrapper">
                    <?php
                    if(!empty($services)) {
                      foreach($services as $servicerow) {
                        ?>
                        <div class="swiper-slide">
                        <div class="service-item style-1">
                          <div class="service-img">
                            <img src="<?=($servicerow->image ? $servicerow->image : base_url('uploads/default.png') );?>" alt="">
                          </div>
                          <div class="service-icon ">
                            <img src="<?=($servicerow->icon ? $servicerow->icon: base_url('uploads/default.png'))?>" class="w-100 h-100 ">
                            <!-- <i class="tji-service-1"></i> -->
                          </div>
                          <div class="service-content">
                            <h4 class="title"><a href="<?=($servicerow->slug ? base_url('service/'.$servicerow->slug)  :'#');?>"><?=($servicerow->title ? $servicerow->title  :'');?> </a></h4>
                            <p class="desc"><?=($servicerow->short_note ? $servicerow->short_note  :'');?></p>
                            <a class="text-btn" href="<?=($servicerow->slug ? base_url('service/'.$servicerow->slug)  :'#');?>">
                              <span class="btn-text"><span>Learn More</span></span>
                              <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                          </div>
                        </div>
                      </div>
                        <?php
                      }
                    }?>
                      
                      
                    </div>
                    <div class="swiper-pagination-area"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-shape-1">
            <img src="<?=base_url('public/assets/template/assets/images/shape/pattern-2.svg');?>" alt="">
          </div>
          <div class="bg-shape-2">
            <img src="<?=base_url('public/assets/template/assets/images/shape/pattern-3.svg');?>" alt="">
          </div>
        </section>
        <!-- end: Service Section -->
         
        
        <!-- start: We Cherish & Respect Our Clients Section -->
        <section class="tj-about-section section-gap">
          <div class="container">
      
                  <div class="row tj-choose-section">
              <div class="col-12">
                <div class="sec-heading text-center">
                  <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                    <!-- <i class="tji-box"></i> -->
                     <img src="<?=base_url('public/assets/template/assets/images/icons/vision.svg');?>">
                    Our Vision</span>
                  <h2 class="sec-title title-anim ">Join Hands with Techens Global for a <span> Noble Vision </span></h2>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xl-6 col-lg-6 order-lg-1 order-2">
                <div class="about-img-area wow fadeInLeft" data-wow-delay=".2s">
                  <div class="about-img overflow-hidden">
                    <img data-speed="0.8" src="<?=base_url('public/assets/template/assets/images/technes-img/your-vision.jpg');?>" alt="">
                  </div>
                  <div class="box-area width-custom-box-area">
                    <div class="customers-box">
                      <div class="customers">
                        <ul>
                          <li class="wow fadeInLeft" data-wow-delay=".5s"><img src="<?=base_url('public/assets/template/assets/images/technes-img/client-1.png');?>"
                              alt=""></li>
                          <li class="wow fadeInLeft" data-wow-delay=".6s"><img src="<?=base_url('public/assets/template/assets/images/technes-img/client-2.png');?>"
                              alt=""></li>
                          <li class="wow fadeInLeft" data-wow-delay=".7s"><img src="<?=base_url('public/assets/template/assets/images/technes-img/client-3.png');?>"
                              alt=""></li>
                          <li class="wow fadeInLeft" data-wow-delay=".8s"><span><i class="tji-plus"></i></span></li>
                        </ul>
                      </div>
                      <div class="customers-number wow fadeInUp" data-wow-delay=".5s">30K</div>
                      <h6 class="customers-text wow fadeInUp" data-wow-delay=".5s">Happy customer we have world-wide.</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 order-lg-2 order-1">
                <div class="about-content-area style-1 wow fadeInLeft" data-wow-delay=".2s">
                  <div class="vision-content">
                    <h3> Our vision is to reach to the club of the TOP 10 cyber security companies in the world.</h3>
                    <p> With in the last few years of establishing and with the excellent effort of 100+ team members  we have crossed  100 + corporate clients and multi crore turn over.</p>
                    <div class="wow fadeInUp" data-wow-delay=".7s">
                      <a class="tj-secondary-btn" href="<?=base_url('service-us');?>">
                        <span class="btn-text"><span>Explore More</span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: We Cherish & Respect Our Clients Section -->
         <!-- start: Countup Section -->
        <div class="tj-countup-section">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="countup-wrap">
                  <div class="countup-item">
                    <div class="inline-content">
                      <span class="odometer countup-number" data-count="<?=getappdata('c1');?>"></span>
                      <span class="count-plus">%</span>
                    </div>
                    <span class="count-text"><?=getappdata('ct1');?>.</span>
                    <span class="count-separator" data-bg-image="<?=base_url('public/assets/template/assets/images/shape/separator.svg');?>"></span>
                  </div>
                  <div class="countup-item">
                    <div class="inline-content">
                      <span class="odometer countup-number" data-count="<?=getappdata('c2');?>"></span>
                      <span class="count-plus">+</span>
                    </div>
                    <span class="count-text"><?=getappdata('ct2');?></span>
                    <span class="count-separator" data-bg-image="<?=base_url('public/assets/template/assets/images/shape/separator.svg');?>"></span>
                  </div>
                  <div class="countup-item">
                    <div class="inline-content">
                      <span class="odometer countup-number" data-count="<?=getappdata('c3');?>"></span>
                      <span class="count-plus">+</span>
                    </div>
                    <span class="count-text"><?=getappdata('ct3');?></span>
                    <span class="count-separator" data-bg-image="<?=base_url('public/assets/template/assets/images/shape/separator.svg');?>"></span>
                  </div>
                  <div class="countup-item">
                    <div class="inline-content">
                      <span class="odometer countup-number" data-count="<?=getappdata('c4');?>"></span>
                      <span class="count-plus">+</span>
                    </div>
                    <span class="count-text"><?=getappdata('ct4');?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end: Countup Section -->

        <!-- start: News & Events Section -->
        <section class="tj-about-section">
          <div class="container-fluid news-bg">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="sec-heading-wrap">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                      <!-- <i class="tji-box"></i> -->
                      <img src="<?=base_url('public/assets/template/assets/images/icons/news.svg');?>">
                      News & Events</span>
                    <div class="heading-wrap-content">
                      <div class="sec-heading">
                        <h2 class="sec-title title-anim">Updates & <span>Announcements</span></h2>
                        <p class="wow fadeInUp" data-wow-delay=".5s">Find the most recent announcements, changes, and highlights here, and stay up to date with everything important happening right now.</p>
                        
                         <div class="about-content-area-2 wow fadeInUp h-100" data-wow-delay=".3s">
                          <div class="video-img wow fadeInRight" data-wow-delay=".7s">
                            <img src="<?=base_url('public/assets/template/assets/videos/video-bbg.png');?>" alt="Image">
                            <a class="video-btn video-popup" data-autoplay="true" data-vbtype="video"
                              data-maxwidth="1200px" href="<?=base_url('public/assets/template/assets/videos/output_progressive_9d3dbd77-c82c-4fff-bedb-2c98d2344e30.mp4');?>">
                              <span><i class="tji-play"></i></span>
                            </a>
                          </div>
                        </div>

                        <div class="wow fadeInUp mt-3" data-wow-delay=".7s">
                          <a class="tj-secondary-btn" href="<?=base_url('news');?>">
                            <span class="btn-text"><span>Explore More</span></span>
                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                          </a>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                  <?php 
                  if(!empty($news)) {
                    foreach($news as $events) {
                      ?>
                      <div class="row">
                        <div class="news-main-container">
                          <div class="news-label">
                            <h3><?=($events->type ? $events->type : '') ;?></h3>
                            <span></span>
                            <h3><?=($events->created_at ? date('M-d-Y',strtotime($events->created_at)): '') ;?></h3>
                          </div>
                          
                          <div class="news-content-main-box">
                            <div class="news-content">
                            <h3><?=($events->title ? $events->title : '') ;?></h3>
                            <p><?= ($events->short_note ? character_limiter($events->short_note, 200, '...') : '') ;?></p>
                          </div>
                          <div class="wow fadeInUp" data-wow-delay=".7s">
                            <a class="tj-primary-btn no-padding" href="<?=base_url('news-details/'.$events->slug);?>">
                              <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                          </div>
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
      </section>
      <!-- ends: News & Events Section -->

      <!-- start: Working process Section -->
        <section class="h5-working-process section-gap">
          <div class="container">
            <div class="row">
              <!-- <div class="col-12">
                <div class="sec-heading sec-heading-centered">
                 <span class="sub-title wow fadeInUp text-white" data-wow-delay=".3s"><i class="tji-box"></i>Our Process</span>
                  <h2 class="sec-title text-anim  text-white">How We Deal with Cyber Security ?</h2>
                </div>
              </div> -->

              <div class="col-12">
                <div class="sec-heading text-center">
                  <span class="sub-title wow fadeInUp text-white" data-wow-delay=".3s">
                    <!-- <i class="tji-box"></i> -->
                     <img src="<?=base_url('public/assets/template/assets/images/icons/process.svg');?>">
                    Our Process
                  </span>
                  <h2 class="sec-title title-anim text-white">How We Deal with Cyber <span>Security ?</span></h2>
                </div>
              </div>
              
            </div>
          </div>

          <div class="h5-working-process-inner">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="working-process-area h5-working-process-wrapper">
                    <div class="process-item h5-working-process-item wow bounceInUp" data-wow-delay=".3s">
                      <h5 class="h5-working-process-indicator">Step 01</h5>
                      <div class="process-step">
                        <span>01</span>
                      </div>
                      <div class="process-content">
                        <h4 class="title">Monitor</h4>
                        <p class="desc">
                          <!-- The best way to stay ahead of threats is to think like an attacker. Techens helps you identify, monitor, and fix risks instantly—preparing you for both the expected and unexpected. -->
                           Cyber threats are continuous, fast changing and uses latest techniques. We adopt continous monitoring and fast track fixing.
                        </p>
                      </div>
                    </div>
                    <div class="process-item h5-working-process-item wow bounceInUp" data-wow-delay=".4s">
                      <h5 class="h5-working-process-indicator">Step 02</h5>
                      <div class="process-step">
                        <span>02</span>
                      </div>
                      <div class="process-content">
                        <h4 class="title">Alert</h4>
                        <p class="desc">
                          <!-- We provide fast, accurate protection against known and unknown threats—beyond traditional security to keep your critical data safe. -->
                           Quick and accurate alerts is our channel of stopping the threats. This proactive approach ensures that potential cyber threats are neutralized before they can cause any damage.
                        </p>
                      </div>
                    </div>
                    <div class="process-item h5-working-process-item wow bounceInUp" data-wow-delay=".5s">
                      <h5 class="h5-working-process-indicator">Step 03</h5>
                      <div class="process-step">
                        <span>03</span>
                      </div>
                      <div class="process-content">
                        <h4 class="title">Resolve</h4>
                        <p class="desc">
                          Quick fixes to stop damages and application of long term solutions to stop repetation of same instances.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="bg-shape-1">
            <img src="<?=base_url('public/assets/template/assets/images/shape/pattern-2.svg');?>" alt="">
          </div>
          <div class="bg-shape-2">
            <img src="<?=base_url('public/assets/template/assets/images/shape/pattern-3.svg');?>" alt="">
          </div>
          <div class="bg-shape-3">
            <img src="<?=base_url('public/assets/template/assets/images/shape/shape-blur.svg');?>" alt="">
          </div>
          <div class="bg-shape-4">
            <img src="<?=base_url('public/assets/template/assets/images/shape/shape-blur.svg');?>" alt="">
          </div>
        </section>
        <!-- end: Working process Section -->



        <!-- start: Choose Section -->
        <section id="choose" class="tj-choose-section section-gap">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="sec-heading text-center">
                  <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                    <!-- <i class="tji-box"></i> -->
                     <img src="<?=base_url('public/assets/template/assets/images/icons/expertise.svg');?>">
                    Our Expertise</span>
                  <h2 class="sec-title title-anim">Driven by Knowledge, Backed by <span>Experience.</span></h2>
                  <p class="wow fadeInUp" data-wow-delay=".5s">Techensglobal multi-disciplinary 24/7 operation provide support, control, oversight and comprehensive management for your on-premises and cloud infrastructure</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="our-expertise-container">
              <?php
                if(!empty($expertise)){
                  foreach($expertise as $exp){ ?>
                  <div class="expertise-logo">
                    <img src="<?=($exp->image ? $exp->image :  base_url('uploads/default.png'));?>" alt="<?=($exp->title ? $exp->title :'');?>">
                  </div>
                <?php 
                  }
                }
                ?>
              </div>
            </div>
            
          </div>
        </section>
        <!-- end: Choose Section -->

        <!-- start: Testimonial Section -->
        <section class="tj-testimonial-section h7-testimonial section-gap">
          <div class="container-fluid">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-12">
                  <div class="sec-heading-wrap padding-0">
                    <span class="sub-title wow fadeInUp text-white" data-wow-delay=".3s">
                      <!-- <i class="tji-box"></i> -->
                      <img src="<?=base_url('public/assets/template/assets/images/icons/clients.svg');?>">
                      Clients feedback</span>
                    <div class="heading-wrap-content">
                      <div class="sec-heading">
                        <h2 class="sec-title title-anim text-white">Clients share how our solutions strengthened their <span>security</span></h2>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-12 service-button">
                  <div class="wow fadeInUp" data-wow-delay=".7s">
                    <div class="slider-prev">
                      <span class="anim-icon">
                        <i class="tji-arrow-left text-white"></i>
                        <i class="tji-arrow-left text-white"></i>
                      </span>
                    </div>
                    <div class="slider-next">
                      <span class="anim-icon">
                        <i class="tji-arrow-right text-white"></i>
                        <i class="tji-arrow-right text-white"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="testimonial-wrapper h7-testimonial-wrapper wow fadeInRightBig" data-wow-delay=".3s">
                  <div class="swiper swiper-container testimonial-slider">
                    <div class="swiper-wrapper">
                    <?php
                    if(!empty($feedback)){
                      foreach($feedback as $feed){ ?>
                      <div class="swiper-slide">
                        <div class="testimonial-item">
                          <div class="testimonial-author align-left">
                            <div class="author-inner">
                              <div class="author-img">
                                <img src="<?=$feed->profile ? $feed->profile : base_url('uploads/feedback/user.jpg');?>" alt="">
                              </div>
                              <div class="author-header align-left text-left">
                                <h4 class="title"><?=($feed->username ? $feed->username : '');?></h4>
                                <span class="designation"><?=($feed->designation ? $feed->designation : '');?></span>
                              </div>
                            </div>
                          </div>
                          <div class="desc text-left">
                            <p>
                              <?=($feed->note ? $feed->note : '');?>
                            </p>
                          </div>
                          <div class="star-ratings">
                            <div class="fill-ratings" style="width: 100%">
                              <span>★★★★★</span>
                            </div>
                            <div class="empty-ratings">
                              <span>★★★★★</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php 
                        }
                    }
                    ?>
                    </div>
                    <div class="swiper-pagination-area"></div>
                  </div>
                  <div class="bg-shape-3">
                    <img src="<?=base_url('public/assets/template/assets/images/shape/h7-testimonial-shape-blur.svg');?>" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-shape-1">
            <img src="<?=base_url('public/assets/template/assets/images/shape/pattern-2.svg');?>" alt="">
          </div>
          <div class="bg-shape-2">
            <img src="<?=base_url('public/assets/template/assets/images/shape/pattern-3.svg');?>" alt="">
          </div>
        </section>
        <!-- end: Testimonial Section -->


        <!-- starts: Our Partnership Section -->
        <section class="tj-about-section section-gap">
          <div class="container-fluid">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="sec-heading-wrap partner-style">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                      <!-- <i class="tji-box"></i> -->
                       <img src="<?=base_url('public/assets/template/assets/images/icons/partnership.svg');?>">
                      Our Partnership</span>
                    <div class="heading-wrap-content">
                    </div>
                    <div class="partent-count">
                      <h3>30+</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="row">
                        <div class="sec-heading">
                        <h2 class="sec-title title-anim">Driving Security and Innovation Through Partnerships with <span>Leading Brands and Businesses.</span></h2>
                        <div class="wow fadeInUp mt-30" data-wow-delay=".7s">
                          <a class="tj-secondary-btn" href="<?=base_url('contact-us');?>">
                            <span class="btn-text"><span>Became a partner</span></span>
                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                          </a>
                        </div>
                      </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="container-fluid client-container">
                <div class="row">
                  <div class="col-12">
                    <div class="swiper client-slider">
                      <div class="swiper-wrapper">
                        <?php
                        if(!empty($partnership)) {
                          foreach($partnership as $part) {  ?>
                        <div class="swiper-slide client-item">
                          <div class="client-logo">
                            <img src="<?=($part->image ? $part->image : base_url('uploads/default.png'));?>" alt="<?=($part->title ? $part->title:'');?>">
                          </div>
                        </div>
                        <?php } 
                        }
                        ?>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ends: Our Partnership Section -->



        <!-- start: Contact Section -->
        <section class="tj-contact-section section-gap">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 hide-xs">
                <div class="global-map">
                  <div class="global-map-img">
                    <img src="<?=base_url('public/assets/template/assets/images/bg/map.svg');?>" alt="Image">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contact-form style-2">
                  <div class="sec-heading">
                    <span class="sub-title text-white">
                      <!-- <i class="tji-box"></i> -->
                      <img src="<?=base_url('public/assets/template/assets/images/icons/get-in-touch.svg');?>">
                      Get in Touch</span>
                    <h2 class="sec-title title-anim">Drop Us a <span>Line.</span></h2>
                  </div>
                  <form id="contact-form-2">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-input">
                          <input type="text" name="cfName2" placeholder="Full Name *">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-input">
                          <input type="tel" name="cfPhone2" placeholder="Phone number *">
                        </div>
                      </div>

                      
                      <div class="col-sm-12">
                        <div class="form-input">
                          <input type="email" name="cfEmail2" placeholder="Email Address *">
                        </div>
                      </div>
                     
                      <div class="col-sm-12">
                        <div class="form-input message-input">
                          <textarea name="cfMessage2" id="message" placeholder="Type message *"></textarea>
                        </div>
                      </div>
                      <div class="submit-btn">
                        <button class="tj-primary-btn" type="submit">
                          <span class="btn-text"><span>Send Message</span></span>
                          <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-shape-1">
            <img src="<?=base_url('public/assets/template/assets/images/shape/pattern-2.svg');?>" alt="">
          </div>
          <div class="bg-shape-2">
            <img src="<?=base_url('public/assets/template/assets/images/shape/pattern-3.svg');?>" alt="">
          </div>
        </section>
        <!-- end: Contact Section -->
     

    
      </main>

    <?= view('frontend/inc/footer') ?>
    </div>
  </div>
  <?= view('frontend/inc/footerLink') ?>
  <script>
    const body = document.querySelector('body');
    const toggle = document.querySelector('#toggle');
    toggle.addEventListener('change', () => {
      body.classList.toggle('dark');
    });
  </script>

</body>

</html>