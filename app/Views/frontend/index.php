<?=view('frontend/inc/header');?>


        <!-- masthead end -->

        <!--Main Slider-->
        <section class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider" data-version="5.0">

                <ul>
                    <!-- SLIDE  -->
                     <?php 
                     if(!empty($banner)){
                        foreach($banner as $i =>  $bannerItm) {
                            ?>
                            
                        
                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                        data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                        data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?=$bannerItm->image;?>" alt="" title="Home Page 1"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="0" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme" id="slide-<?=$i;?>-layer-9"
                            data-x="['left','left','left','left']" data-hoffset="['495','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['310','210','310','170']"
                            data-width="none" data-height="none" data-whitespace="nowrap"
                            data-visibility="['on','on','off','off']" data-type="image" data-responsive_offset="on"
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5;"><img src="<?=base_url('public/assets/template/images/main-slider/slide-bg.png');?>" alt=""
                                data-ww="['674px','674px','674px','674px']" data-hh="['398px','398px','398px','398px']"
                                width="674" height="398" data-no-retina> </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption ch_title   tp-resizeme" id="slide-<?=$i;?>-layer-1"
                            data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['350','250','350','200']"
                            data-fontsize="['55','50','45','25']" data-lineheight="['55','50','45','25']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":200,"speed":500,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 6; white-space: nowrap; letter-spacing: 0px;"><?=$bannerItm->title;?>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption ch_title   tp-resizeme" id="slide-<?=$i;?>-layer-2"
                            data-x="['left','left','left','left']" data-hoffset="['550','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['420','330','410','245']"
                            data-fontsize="['55','50','45','25']" data-lineheight="['55','50','45','25']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":200,"speed":500,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 7; white-space: nowrap; letter-spacing: 0px;">Marine & Oilfield Supply
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption ch_content   tp-resizeme" id="slide-<?=$i;?>-layer-3"
                            data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['505','415','515','340']"
                            data-fontsize="['24','24','18','18']" data-lineheight="['24','24','18','18']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":600,"speed":700,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 8; white-space: nowrap; letter-spacing: 0px;"></div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption ch_content   tp-resizeme" id="slide-<?=$i;?>-layer-4"
                            data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['540','455','540','365']"
                            data-fontsize="['24','24','18','18']" data-lineheight="['24','24','18','18']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":600,"speed":700,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 9; white-space: nowrap; letter-spacing: 0px;"> oil & gas supply solutions,
                            backed by expertise and global reach. </div>

                        <!-- LAYER NR. 6 -->
                        <a class="tp-caption ch_button rev-btn " href="#" target="_blank" id="slide-<?=$i;?>-layer-5"
                            data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['600','520','620','430']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                            data-actions='' data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"delay":800,"speed":1000,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(255,0,0);bc:rgb(255,0,0);bw:1 1 1 1;"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                            data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                            data-paddingleft="[35,35,35,35]"
                            style="z-index: 10; white-space: nowrap; letter-spacing: px;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">About
                            us </a>

                       
                    </li>
                    <?php 
                    }
                     }
                     ?>
                </ul>
            </div>
        </section>
        <!--Main Slider  end-->

        <!-- Welcome sec -->
        <div class="welcomesec secpadd">
            <div class="container">
                <div class="fh-section-title clearfix  text-center version-dark paddbtm20">
                    <h2>Welcome to<span class="main-color"> KALAMI GOODS</span></h2>
                </div>
                <p class="haeadingpara text-center paddbtm40">
                    KALAMI GOODS is more than logistics. <br />
                    Delivering excellence in Marine, Aviation, Oil & Gas, Logistics, and Moving solutions.
                </p>


               <style>
                .welservices {
                    display: flex;
                    flex-wrap: wrap;
                }

                .welservices .col-md-4 {
                    display: flex;
                }

                .fh-icon-box {
                    background: #fff;
                    padding: 20px;
                    border-radius: 10px;
                    flex: 1; /* equal height */
                }
                </style>

                <div class="welservices row">
                    <?php 
                    $i = 0;
                    if (!empty($services)) {
                        foreach ($services as $service) {

                            if ($i % 3 == 0 && $i != 0) {
                                echo '</div><div class="welservices row">';
                            }
                    ?>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="fh-icon-box icon-type-theme_icon style-1 version-dark hide-button icon-left">
                                <span class="fh-icon">
                                    <img style="padding: 10px;width:30%" src="<?= validImg($service->icon) ?>" />
                                </span>
                                <h4 class="box-title"><a href="#"><?= $service->title ?></a></h4>
                                <div class="desc">
                                    <p style="text-align: justify;"><?= $service->short_note ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                        $i++; 
                        }
                    }
                    ?>
                </div>


                  



                </div>

            </div>
        </div>
       

        <!--home counters -->
        <section class="homecounts">
            <div class="container">
                <h2 class="count-title"><span class="main-color">KALAMI GOODS</span> is a Trusted Partner in Marine,
                    Aviation, Oil & Gas, and Logistics Solutions.</h2>
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-lg-offset-2">
                        <div class="fh-counter icon-type-none">
                            <div class="counter">
                                <div class="value"><?= getappdata('c1') ?>+</div>
                                <h4><?= getappdata('ct1') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="fh-counter icon-type-none">
                            <div class="counter">
                                <div class="value"><?= getappdata('c2') ?>+</div>
                                <h4><?= getappdata('ct2') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="fh-counter icon-type-none">
                            <div class="counter">
                                <div class="value"><?= getappdata('c3') ?>+</div>
                                <h4><?= getappdata('ct3') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="fh-counter icon-type-none">
                            <div class="counter">
                                <div class="value"><?= getappdata('c4') ?>+</div>
                                <h4><?= getappdata('ct4') ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--home counters end -->

        <!--why choose us -->
        <section class="whychoose-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6  secpaddlf">
                        <div class="fh-section-title clearfix  text-left version-dark paddbtm40">
                            <h2>Why Choosing us?</h2>
                        </div>
                        <?php 
                        if(!empty($industries)) {
                            foreach($industries as $industry) {
                                ?>
                                    <div class="fh-icon-box  style-2 icon-left has-line">
                                        <span class="fh-icon"><img style="padding: 10px;" src="<?= validImg($industry->image) ?>" /></i></span>
                                        <h4 class="box-title"><span><?= $industry->title ?></span></h4>
                                        <div class="desc">
                                            <p><?= $industry->note ?></p>
                                        </div>
                                    </div>
                                <?php
                            }
                        }?>
                    
                        
                       
                       
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-md-6 quofrm1  secpaddlf">
                        <div class="fh-section-title clearfix  text-left version-dark paddbtm40">
                            <h2>CONTACT US</h2>
                        </div>
                        <form>
                            <div class="fh-form-1 fh-form">
                                <div class="row fh-form-row">
                                   
                                    <div class="col-md-6 col-xs-12 col-sm-12">
                                        <p class="field">
                                            <input name="your-name" value="" placeholder="Name*" type="text">
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-xs-12 col-sm-12">
                                        <p class="field">
                                            <input name="your-email" value="" placeholder="Email*" type="email">
                                        </p>
                                    </div>
                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                        <p class="field single-field">
                                            <textarea cols="40" placeholder="Message*"></textarea>
                                        </p>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p class="field submit">
                                            <input value="Submit" class="fh-btn" type="submit">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--why choose us end -->


        <style>
            .testimonials {
                padding: 40px 0;
                background-color: #061b38;
                color: #fff;
            }

            .testimonials-wrapper {
                display: flex;
                gap: 20px;
                overflow: hidden;
                flex-wrap: nowrap;
            }

            .testimonial-card {
                flex: 1 1 calc(33.333% - 20px);
                background-color: #0a2545;
                padding: 20px;
                border-radius: 8px;
                box-sizing: border-box;
                min-width: 300px;
            }

            .testi-star {
                margin-bottom: 10px;
            }

            .testi-des {
                margin-bottom: 15px;
                font-size: 14px;
            }

            .info {
                font-weight: bold;
            }

            .testi-name {
                display: block;
            }

            .testi-job {
                font-size: 12px;
                opacity: 0.8;
            }

            /* Make slider on mobile */
            @media screen and (max-width: 767px) {
                .testimonials-wrapper {
                    display: flex;
                    flex-wrap: nowrap;
                    overflow-x: auto;
                    scroll-snap-type: x mandatory;
                }

                .testimonial-card {
                    flex: 0 0 90%;
                    scroll-snap-align: center;
                }

                .testimonial-card:not(:last-child) {
                    margin-right: 15px;
                }

                /* Hide scroll bar on mobile */
                .testimonials-wrapper::-webkit-scrollbar {
                    display: none;
                }

                .testimonials-wrapper {
                    -ms-overflow-style: none;
                    scrollbar-width: none;
                }
            }
            .fa-star{
                color: orange;
            }
            .testimonials-wrapper{
                padding: 35px 0px;
            }
        </style>
        <!-- Testimonials -->
        <section class="testimonials">
            <div class="container">
                <div class="testimonials-wrapper">
                    <?php if(!empty($feedback)) {
                        foreach($feedback as $feed) {
                            ?>
                                <div class="testimonial-card">
                                  <div style=" display: flex; align-items: center; justify-content: space-between; padding-bottom: 10px; ">
                                    <div><img src="<?= validImg($feed->profile) ?>" style=" width: 50px; height: 50px; border-radius: 50%;" /></div>
                                      <div class="testi-star">
                                        <i class="fa fa-star fa-md"></i> <i class="fa fa-star fa-md"></i> <i
                                            class="fa fa-star fa-md"></i>
                                        <i class="fa fa-star fa-md"></i> <i class="fa fa-star fa-md"></i>
                                    </div>
                                  </div>
                                    <div class="testi-des">
                                        <?= $feed->note ?>
                                    </div>
                                    <div class="info">
                                        <span class="testi-name"> <?= $feed->username ?></span>
                                        <span class="testi-job"> <?= $feed->designation ?></span>
                                    </div>
                                </div>
                            <?php
                        }
                    }?>
                
                </div>
            </div>
        </section>
      <?=view('frontend/inc/footer');?>
