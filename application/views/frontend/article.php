<!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo base_url();?>/assets/frontend/images/bg/1920x1280_2.png">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white">Artikel dan Berita</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="<?php echo site_url('home') ?>">Beranda</a></li>                
                <li class="active text-theme-colored">Artikel dan Berita</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>


    <section>
      <div class="container pt-100 pb-100">
        <div class="row">
          <div class="col-md-12">
            <div class="vertical-masonry-timeline-wrapper">
              <ul class="vertical-masonry-timeline">
                <?php if (is_array($all_article) && count($all_article) > 0): ?>                  
                <?php foreach ($all_article as $article): ?>                                 
                 <li class="each-masonry-item wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="10">
                    <div class="timeline-block">
                      <span class="timeline-post-format"><?php if ($article['type'] == 'news'): ?>
                        <i class="fa fa-feed"></i>
                        <?php else: ?>
                        <i class="fa fa-pencil"></i>
                      <?php endif ?>
                    </span>
                      <article class="post clearfix">
                        <div class="entry-header">
                          <div class="post-thumb"> <img alt="<?php echo $article['title'] ?>" <?php if ($article['picture'] !== NULL): ?>
                          src="<?php echo base_url() ?>uploads/<?php echo $article['picture'] ?>"
                            <?php else: ?>
                          src="https://fpips.upi.edu/foto_berita/53NoImageAvailable.jpg"
                          <?php endif ?>  class="img-fullwidth img-responsive"> </div>
                          <hr>
                          <h5 class="entry-title"><a href="<?php echo site_url("home/article_detail/$article[id]/$article[hyperlink]") ?>"><?php echo $article['title'] ?></a></h5>
                          <ul class="list-inline font-12 mb-20 mt-10">
                            <li>posted by <a href="#" class="text-theme-colored"><?php echo $article['author'] ?> |</a></li>
                            <li><span class="text-theme-colored"><?php $date_post = date_create($article['posted']); echo date_format($date_post, "d M Y"); ?></span></li>
                          </ul>
                        </div>
                        <div class="entry-content">
                          <p class="mb-30"><?php echo word_limiter($article['content'], 25); ?></p>                          
                          <a class="pull-right text-gray font-13" href="<?php echo site_url("home/article_detail/$article[id]/$article[hyperlink]") ?>"><i class="fa fa-angle-double-right text-theme-colored"></i> Baca Selengkapnya</a>
                          <br>
                        </div>
                      </article>
                    </div>
                 </li>
                  <?php endforeach ?>
                 <?php endif ?>
                                                                   
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->