<style>
  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>

<!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo base_url();?>/assets/frontend/images/bg/1920x1280_2.png">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white">Dosen Pengajar</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="<?php echo site_url('home') ?>">Beranda</a></li>                
                <li class="active text-theme-colored">Dosen Pengajar</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>


    <!-- Section: Team -->
    <section id="team">
      <div class="container">
        <div class="row mtli-row-clearfix">
          <?php foreach ($dosen as $d): ?>                      
          <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
            <div class="team-members maxwidth400">
              <div class="team-thumb">
                <img class="img-responsive" width="600px" alt="" src="<?php echo base_url() ?>uploads/<?php echo $d['picture'] ?>">
              </div>
              <div class="team-bottom-part border-bottom-theme-color-2-2px bg-lighter border-1px text-center p-10 pt-20 pb-10">
                <h5 class="text-uppercase font-raleway font-weight-600 m-0"><a class="text-theme-color-2" href="page-teachers-details.html"> <?php echo $d['nama'] ?>, <?php echo $d['gelar_belakang'] ?></a></h5>
                <h5 class="text-theme-color">NIDN : <?php echo $d['nidn'] ?></h5>
                <ul class="">                  
                  <li><a class="btn" href="#"><i class="fa fa-user"></i> Lihat Detil Dosen</a></li>                 
                </ul>                 
              </div>
            </div>
          </div>
                  <?php endforeach ?>                               
        </div>
      </div>
    </section>