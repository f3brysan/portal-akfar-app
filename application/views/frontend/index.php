  <!-- Start main-content -->
  <div class="main-content"> 
   
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>
              <?php foreach ($get_banner as $banner): ?>
                
              
              <!-- SLIDE 3 -->
              <li data-index="<?php echo $banner['id'] ?>" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>uploads/<?php echo $banner['picture'] ?>" data-rotate="0" data-saveperformance="off" data-title="<?php echo $banner['title'] ?>" data-description="">
                <!-- MAIN IMAGE -->
                <img src="<?php echo base_url(); ?>uploads/<?php echo $banner['picture'] ?>"  alt="<?php echo $banner['id'] ?>"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>                <!-- LAYERS -->
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase bg-dark-transparent-8 text-white font-raleway pl-20 pr-20"
                  id="<?php echo $banner['id'] ?>-layer-3-layer-2"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['20']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;"><?php echo $banner['title'] ?> 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white bg-dark-transparent-6 text-right" 
                  id="<?php echo $banner['id'] ?>-layer-3"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['30']"
                  data-fontsize="['16']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;"><?php echo $banner['content'] ?>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="<?php echo $banner['id'] ?>-layer-3-layer-4"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><?php if ($banner['hyperlink'] !== NULL): ?>
                    <a class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20" href="<?php echo site_url("home/article_detail/$banner[hyperlink]") ?>">Selengkapnya</a> 
                  <?php endif ?>
                </div>
              </li>
<?php endforeach ?>
<!-- SLIDE 3 -->              
            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [650, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->

      </div>
    </section>

    <!-- Section: About -->  
    <section class="">
    	<?php foreach ($tentang_akfar as $tentang): ?>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0">Profil</h6>
              <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">Akademi Farmasi Surabaya</h2>              
              <?php echo word_limiter($tentang['content'], 30);  ?>
              <br>
              <a class="btn btn-theme-colored btn-flat btn-lg mt-10 mb-sm-30" href="<?php echo site_url("home/about/$tentang[code]/$tentang[hyperlink]") ?>">Selengkapnya →</a>
            </div>
            <div class="col-md-6">
              <div class="video-popup">                
               <iframe width="560" height="315" src="https://www.youtube.com/embed/R2NRipyMNTM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="<?php echo base_url();?>/assets/frontend/images/bg/1920x1280_2.png" data-parallax-ratio="0.7">
      <div class="container">       
        <div class="pt-20 pb-20 bg-theme-color-1" >
          <div class="row">
            <div class="col-md-8">
              <h3 class="mt-5 ml-50 ml-sm-0 text-white sm-text-center font-weight-600">Pendaftaran Mahasiswa Baru Telah Dibuka</h3>
            </div>
            <div class="col-md-3 sm-text-center"> 
              <a class="btn btn-flat btn-default btn-lg mt-5 ml-30 ml-sm-0" href="http://pmb.kmhsafs.xyz/">Daftar Sekarang<i class="fa fa-angle-double-right font-16 ml-10"></i></a>  
            </div>
          </div>
        </div>      
      </div>
    </section>        
   
     <!-- Section: Why Choose Us -->
    <section id="event" class="">
      <div class="container pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="line-bottom mt-0 line-height-1"><i class="fa fa-calendar mr-10"></i><span class="text-theme-color-2">Agenda</span> Mendatang</h2>
              <?php if (is_array($get_event) && count($get_event) > 0): ?>
              	<?php foreach ($get_event as $event): ?>
              	<article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb mr-20"><img class="img-thumbnails" alt="" src="<?php echo base_url(); ?>uploads/<?php echo $event['picture'] ?>"></a>
                <div class="post-right">
                  <h4 class="mt-0 mb-5"><a href="<?php echo site_url("home/event_detail/$event[code]/$event[hyperlink]") ?>"><?php echo $event['title'] ?></a></h4>
                  <ul class="list-inline font-12 mb-5">
                    <li class="pr-0"><i class="fa fa-calendar mr-5"></i> <?php $date_start = date_create($event['event_start']); echo date_format($date_start, "d M Y"); ?> - <?php $date_end = date_create($event['event_end']); echo date_format($date_end, "d M Y"); ?></li>
                    <li class="pl-5"><i class="fa fa-user mr-5"></i><?php echo $event['author'] ?></li>
                  </ul>
                  <p class="mb-0 font-13"><?php echo word_limiter($event['content'], 15); ?></p>                  
                  <a class="text-theme-colored font-13" href="<?php echo site_url("home/event_detail/$event[code]/$event[hyperlink]") ?>">Selengkapnya →</a>
                </div>
              </article>              	              
              <?php endforeach ?>
              <?php else: ?>
              	<article class="post media-post clearfix pb-0 mb-10">
                <div class="post-right">
                  <h4 class="mt-0 mb-5"><a href="#">Tidak Ada Agenda</a></h4>                                    
                </div>
              </article>              	
              <?php endif ?>
              
              
            </div>
            <div class="col-md-6">
              <h2 class="line-bottom mt-0 line-height-1"><span class="text-theme-color-2">Mengapa</span> AKFAR?</h2>
              <p class="mb-10">Berikut <em><strong>Frequently Ask Question</strong></em> mengenai <strong>Akademi Farmasi Surabaya</strong>.</p>
              <div id="accordion1" class="panel-group accordion">
                <?php if (is_array($get_faq) && count($get_faq) > 0): ?>
                  <?php foreach ($get_faq as $faq): ?>                 
                <div class="panel">
                  <div class="panel-title"> <a class="" data-parent="#accordion1" data-toggle="collapse" href="#<?php echo $faq['id'] ?>" aria-expanded="true"> <span class="open-sub"></span> <?php echo $faq['heading'] ?></a> </div>
                  <div id="<?php echo $faq['id'] ?>" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <?php echo $faq['content'] ?>
                    </div>
                  </div>
                </div>
                  <?php endforeach ?>
                <?php endif ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: testimonials -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-background-ratio="0.5" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pb-50">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6">              
              <h2 class="mt-0 mb-0 line-bottom text-white font-28">Kata<span class="font-30 text-theme-color-2"> Alumni</span></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-10">
            <div class="owl-carousel-2col boxed" data-dots="true">
            	<?php if (is_array($get_testi) && count($get_testi) > 0): ?>
            	<?php foreach ($get_testi as $testi): ?>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img width="75" class="img-circle" alt="" src="http://placehold.it/100x100">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="text-white mt-0"><?php echo $testi['content'] ?></h4>
                    <p class="author mt-20">- <span class="text-theme-color-2"><?php echo $testi['name'] ?>, </span> <small><em class="text-gray-lightgray">Angkatan <?php echo $testi['angkatan'] ?></em></small></p>
                  </div>
                </div>
              </div>
              <?php endforeach ?>
              <?php endif ?>                          
            </div> 
          </div>
        </div>
      </div>
    </section>

    <!-- Section: blog -->
    <section id="blog" class="bg-lighter">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-theme-colored title line-bottom line-height-1 mt-0">Berita <span class="text-theme-color-2 font-weight-400">Terbaru</span></h2>
              <div class="owl-carousel-3col owl-nav-top" data-nav="true">
              	<?php if (is_array($get_news) && count($get_news) > 0): ?>
              		<?php foreach ($get_news as $news): ?>              		              		              		              	       	
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="<?php echo base_url(); ?>/uploads/<?php echo $news['picture']; ?>" width="330px" alt="" class="img-responsive"> </div>            
                  <div class="entry-content bg-white border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="<?php echo site_url("home/article_detail/$news[id]/$news[hyperlink]")?>"><?php echo $news['title'] ?></a></h5>                    
                    <hr>

                    <p class="mb-20 mt-15 font-13"><?php echo word_limiter($news['content'], 15); ?></p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="<?php echo site_url("home/article_detail/$news[id]/$news[hyperlink]") ?>">Selengkapnya</a>
                    <ul class="list-inline pull-right font-12 mt-5">
                      <li><a class="text-theme-colored" href="#"><?php echo $news['author'] ?> |</a></li>
                      <li><span class="text-theme-colored"><?php $date_post = date_create($news['posted']); echo date_format($date_post, "d M Y"); ?></span></li>
                    </ul>
                    <div class="clearfix"></div>                    
                  </div>
                </article>
              </div>
              <?php endforeach ?>       
                    <?php endif ?>                      
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Clients -->
    <section class="clients bg-theme-color-2">
      <div class="container pt-10 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col clients-logo transparent text-center owl-nav-top">
              <?php if (is_array($get_stakeholder) && count($get_stakeholder) > 0): ?>
                <?php foreach ($get_stakeholder as $stakeholder): ?>
              <div class="item"> <a><img class="img-responsive center-block" style="margin: 0 auto;" src="<?php echo base_url(); ?>uploads/<?php echo $stakeholder['picture'] ?>" alt=""></a></div>
               <?php endforeach ?>
              <?php endif ?>              
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- end main-content -->
  </div>
