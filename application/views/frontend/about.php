<!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <?php foreach ($get as $s): ?>          
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo base_url();?>/assets/frontend/images/bg/1920x1280_2.png">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white"><?php echo $s['title'] ?></h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="<?php echo site_url('home') ?>">Beranda</a></li>                
                <li class="active text-gray-silver"><?php echo $s['title'] ?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9 blog-pull-right">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="<?php echo base_url() ?>uploads/<?php echo $s['picture'] ?>" alt="<?php echo $s['title'] ?>" class="img-responsive img-fullwidth"> </div>
                </div>  
                <div class="entry-title pt-10 pl-15">
                  <h4><?php echo $s['title'] ?> </h4>
                </div>                
                <div class="entry-content mt-10">
                  <p class="mb-15"><?php echo $s['content'] ?></p>                                                                      
                </div>
              </article>
                                                       
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">              
              <div class="widget">
                <h5 class="widget-title line-bottom">Tentang Akfar</h5>
                <div class="categories">
                  <ul class="list list-border angle-double-right">
                    <?php foreach ($all_about as $a): ?>
                    <li><a href="<?php echo site_url("home/about/$a[code]/$a[hyperlink]") ?>"><?php echo $a['title'] ?></a></l>                 
                    <?php endforeach ?>
                  </ul>
                </div>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endforeach ?>
  </div>
  <!-- end main-content -->