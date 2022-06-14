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
       
        <div class="table-responsive">
          <table class="table">
            
            <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama Dosen</th>
                  <th class="text-center">NIDN/NIP</th>                                    
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>                
                  <?php if (is_array($dosen) && count($dosen) > 0): ?>
                  <?php $no = 1; ?> 
                  <?php foreach ($dosen as $dosen): ?>                        
                  <tr>                               
                  <td  class="text-right"><?php echo $no++; ?>.</td>
                  <td ><?php echo $dosen['nama'] ?>, <?php echo $dosen['gelar_belakang'] ?></td> 
                  <td  class="text-center"><?php echo $dosen['nidn']; ?></td>                 
                  <td  class="text-center"><div class="btn btn-group">
                      <a href="<?php echo site_url("home/dosen_detail/$dosen[nidn]") ?>" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> Lihat</a>                       
                      </div>
                </td>                  
                  </tr>     
                  <?php endforeach ?>
                  <?php endif ?>                           
                </tbody>            
          </table>
        </div>
       
      </div>
    </div>
  </section>