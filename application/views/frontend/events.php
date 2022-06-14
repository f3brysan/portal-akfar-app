<!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo base_url();?>/assets/frontend/images/bg/1920x1280_2.png">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Agenda</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="<?php echo site_url('home') ?>">Beranda</a></li>                
                <li class="active text-gray-silver">Agenda</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: event calendar -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <?php if (is_array($all_events) && count($all_events) > 0): ?>
              <?php foreach ($all_events as $event): ?>
            <div class="upcoming-events bg-white-f3 mb-20">
              <div class="row">
                <div class="col-sm-4 pr-0 pr-sm-15">
                  <div class="thumb p-15">
                    <img class="img-fullwidth" src="<?php echo base_url(); ?>uploads/<?php echo $event['picture'] ?>" alt="...">
                  </div>
                </div>
                <div class="col-sm-4 pl-0 pl-sm-15">
                  <div class="event-details p-15 mt-20">
                    <h4 class="media-heading text-uppercase font-weight-500"><?php echo $event['title'] ?></h4>
                    <?php echo word_limiter($event['content'], 15) ?>                                        
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="event-count p-15 mt-15">                    
                    <ul>
                      <li class="mb-10 text-theme-colored"><i class="fa fa-calendar mr-5"></i> <?php $date_start = date_create($event['event_start']); echo date_format($date_start, "d M Y"); ?> - <?php $date_end = date_create($event['event_end']); echo date_format($date_end, "d M Y"); ?></li>
                      <li class="text-theme-colored"><i class="fa fa-user mr-5"></i> <?php echo $event['author'] ?>.</li>
                      <br>
                      <li class="mb-10 text-theme-colored"><a href="<?php echo site_url("home/event_detail/$event[code]/$event[hyperlink]") ?>" class="btn btn-flat btn-dark btn-theme-colored btn-sm">Selengkapnya <i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
             <?php endforeach ?>
             <?php else: ?>
              <h4 class="media-heading font-weight-500">Tidak Ada Agenda Terdekat.</h4>
            <?php endif ?>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-right mt-sm-30">
              
              <div class="widget">
                <h5 class="widget-title line-bottom">Biro Penyelenggara</h5>
                <div class="categories">
                  <ul class="list list-border angle-double-right">
                    <?php if (is_array($list_author) && count($list_author) > 0): ?>
                      <?php foreach ($list_author as $author): ?>
                        <li><a href="<?php echo site_url("home/events_by/$author[author]") ?>"><?php echo $author['author'] ?><span> (<?php echo $author['total'] ?>)</span></a></li>
                      <?php endforeach ?>
                    <?php endif ?>                    
                  </ul>
                </div>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->