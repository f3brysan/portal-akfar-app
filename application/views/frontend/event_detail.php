<!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <?php foreach ($event_selected as $event): ?>          
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo base_url();?>/assets/frontend/images/bg/1920x1280_2.png">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white"><?php echo $event['title'] ?></h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="<?php echo site_url('home') ?>">Beranda</a></li>
                <li><a href="<?php echo site_url('home/events') ?>">Agenda</a></li>
                <li class="active text-theme-colored"><?php echo $event['title'] ?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <section class="bg-theme-colored">
      <div class="container pt-40 pb-40">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 id="basic-coupon-clock" class="text-white"></h2>
            <!-- Final Countdown Timer Script -->
            <script type="text/javascript">
              $(document).ready(function() {
                $('#basic-coupon-clock').countdown('<?php echo $event['event_end'] ?>', function(event) {
                  $(this).html(event.strftime('%D hari, %H jam %M menit %S detik'));
                });
              });
            </script>
          </div>
        </div>
      </div>
    </section>
<?php endforeach ?>
<?php foreach ($event_selected as $detail): ?>  
   <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul>
              <li>
                <h5>Nama Kegiatan:</h5>
                <p><?php echo $detail['title'] ?></p>
              </li>
              <li>
                <h5>Penyelenggara:</h5>
                <p><?php echo ucfirst($detail['author']); ?></p>
              </li>              
              <li>
                <h5>Start Date:</h5>
                <p><?php $date_start = date_create($detail['event_start']); echo date_format($date_start, "d M Y"); ?></p>
              </li>
              <li>
                <h5>Kegiatan Berakhir:</h5>
                <p><?php $date_end = date_create($detail['event_end']); echo date_format($date_end, "d M Y"); ?></p>
              </li>                          
            </ul>
          </div>
          <div class="col-md-8">
            <img src="<?php echo base_url(); ?>uploads/<?php echo $event['picture'] ?>" alt="">
          </div>
        </div>
        <div class="row mt-60">
          <div class="col-md-12">
            <h4 class="mt-0">Deskripsi Kegiatan</h4>
            <?php echo $detail['content'] ?>
          </div>          
        </div>        
      </div>
    </section>
<?php endforeach ?>
   

    
  </div>
  <!-- end main-content -->