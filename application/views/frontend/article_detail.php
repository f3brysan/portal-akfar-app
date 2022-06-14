<!-- Start main-content -->
<div class="main-content">
  <!-- Section: inner-header -->
  <?php foreach ($selected_article as $jumbotron): ?>
  <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo base_url();?>/assets/frontend/images/bg/1920x1280_2.png">
    <div class="container pt-70 pb-20">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title text-white"><?php echo $jumbotron['title'] ?></h2>
            <ol class="breadcrumb text-left text-black mt-10">
              <li><a href="<?php echo site_url('home') ?>">Beranda</a></li>
              <li><a href="<?php echo site_url('home/article') ?>">Artikel & Berita</a></li>
              <li class="active text-gray-silver"><?php echo $jumbotron['title']?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endforeach ?>
  <!-- Section: Blog -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-9 blog-pull-right">
          <?php foreach ($selected_article as $article): ?>
          <div class="blog-posts single-post">
            <article class="post clearfix mb-0">
              <div class="entry-header">
                <div class="post-thumb thumb">
                  <?php if ($article['picture']!==NULL): ?>
                  <img src="<?php echo base_url(); ?>uploads/<?php echo $article['picture'] ?>" alt="<?php echo $article['title'] ?>" class="img-responsive img-fullwidth">
                  <?php else: ?>
                  <img src="https://fpips.upi.edu/foto_berita/53NoImageAvailable.jpg" alt="" class="img-responsive img-fullwidth">
                  <?php endif ?>
                </div>
              </div>
              <div class="entry-title pt-10 pl-15">
                <h4><a class="text-uppercase"><?php echo $article['title'] ?></a></h4>
              </div>
              <div class="entry-meta pl-15">
                <ul class="list-inline">
                  <li>Diposting: <span class="text-theme-color-2"> <?php $date_post = date_create($article['posted']); echo date_format($date_post, "d M Y"); ?></span></li>
                  <li>Oleh: <span class="text-theme-color-2"><?php echo $article['author'] ?></span></li>
                </ul>
              </div>
              <div class="entry-content mt-10">
                <p class="mb-15"><?php echo $article['content'] ?></p>
              </div>
            </article>
            <div class="tagline p-0 pt-20 mt-5">
              <div class="row">
                <div class="col-md-8">
                  <div class="tags">
                    <p class="mb-0"><i class="fa fa-tags text-theme-color-2"></i> <span>Tags:</span> <?php echo $article['tags'] ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
        <div class="col-sm-12 col-md-3">
          <div class="sidebar sidebar-left mt-sm-30">
            <div class="widget">
              <h5 class="widget-title line-bottom">Tags</h5>
              <div class="categories">
                <ul class="list list-border angle-double-right">
                  <?php if (is_array($tags_list) && count($tags_list) > 0): ?>
                  <?php foreach ($tags_list as $tags): ?>
                  <li><a href="<?php echo site_url("home/article_by_tags/$tags[tags]") ?>"><?php echo $tags['tags'] ?><span> (<?php echo $tags['total'] ?>)</span></a></li>
                  <?php endforeach ?>
                  <?php endif ?>
                </ul>
              </div>
            </div>
            <div class="widget">
              <h5 class="widget-title line-bottom">Berita & Artikel Terbaru</h5>
              <div class="latest-posts">
                <?php foreach ($other_article as $other): ?>
                <article class="post media-post clearfix pb-0 mb-10">
                  <a class="post-thumb" href="<?php echo site_url("home/article_detail/$other[id]/$other[hyperlink]") ?>">
                    <?php if ($other['picture']!==NULL): ?>
                    <img src="<?php echo base_url(); ?>uploads/<?php echo $other['picture'] ?>" alt="<?php echo $other['title'] ?>" class="img-responsive" width="100">
                    <?php else: ?>
                    <img src="https://fpips.upi.edu/foto_berita/53NoImageAvailable.jpg" alt="" class="img-responsive" width="100">                   
                    <?php endif ?>
                  </a>
                  <div class="post-right">
                    <h5 class="post-title mt-0"><a href="<?php echo site_url("home/article_detail/$other[id]/$other[hyperlink]") ?>"><?php echo $other['title'] ?></a></h5>
                    <?php echo word_limiter($other['content'], 5); ?>
                  </div>
                  <div class="clearfix"></div>
                </article>
                <?php endforeach ?>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- end main-content -->