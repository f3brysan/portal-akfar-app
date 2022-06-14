<!-- Start main-content -->
<div class="main-content">
  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo base_url();?>/assets/frontend/images/bg/1920x1280_2.png">
    <div class="container pt-70 pb-20">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title text-white">Detil Dosen</h2>
            <ol class="breadcrumb text-left text-black mt-10">
              <li><a href="<?php echo site_url('home') ?>">Beranda</a></li>
              <li><a href="<?php echo site_url('home/dosen') ?>">Dosen</a></li>
              <li class="active text-gray-silver">Detil Dosen</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Experts Details -->
  <section>
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-md-4">
            <div class="thumb">
              <img class="img-responsive" width="300px" alt="<?php echo $get['0']['nama'] ?>" src="<?php echo base_url() ?>uploads/<?php echo $get['0']['picture'] ?>">
            </div>
          </div>
          <div class="col-md-8">
            <h2 class="line-bottom mt-0 line-height-1"><span class="text-theme-color-2"><?php echo $get['0']['nama'] ?>, <?php echo $get['0']['gelar_belakang'] ?></span></h2>
            <p class="mb-10">NIDN : <?php echo $get['0']['nidn'] ?></p>
            <div id="accordion1" class="panel-group accordion">
              <div class="panel">
                <div class="panel-title"> <a class="" data-parent="#accordion1" data-toggle="collapse" href="#pendidikan" aria-expanded="true"> <span class="open-sub"></span> Riwayat Pendidikan</a> </div>
                <div id="pendidikan" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                  <div class="panel-content">
                     <?php if (is_array($pendidikan) && count($pendidikan) > 0): ?>
                     <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center">No</th>
                          <th class="text-center">Jenjang</th>
                          <th class="text-center">Nama Institusi</th>
                          <th class="text-center">Tahun</th>
                        </tr>
                      </thead>
                      <tbody>
                       
                        <?php $no = 1;?>
                        <?php foreach ($pendidikan as $didik): ?>
                        <tr>
                          <td class="text-right"><?php echo $no++; ?>.</td>
                          <td class="text-center"><?php echo $didik['jenjang'] ?></td>
                          <td class="text-center"><?php echo $didik['institusi']; ?></td>
                          <td class="text-center"> <?php echo $didik['mulai'] ?></td>
                        </tr>
                        <?php endforeach?>
                        <?php endif?>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>       
      </div>
    </div>
  </section>
</div>
<!-- end main-content -->