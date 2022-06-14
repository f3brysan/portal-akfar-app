<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Riwayat Pendidikan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('detil_dosen') ?>/<?php echo $get['0']['nidn']; ?>">Detail Dosen <?php echo $get['0']['nama']; ?></a></li>              
              <li class="breadcrumb-item active">Tambah Data Riwayat Pendidikan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah Data Dosen Baru</h3>          
        </div>
        <form role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body"> 
                <div class="form-group">                    
                    <input type="hidden" class="form-control" name="rel_nidn" value="<?php echo $get['0']['nidn']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenjang</label>
                    <input type="text" class="form-control" name="jenjang" placeholder="Jenjang Pendidikan">
                  </div>                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Institusi</label>
                    <input type="text" class="form-control" name="institusi" placeholder="Nama Institusi Pendidikan">
                  </div>                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Mulai</label>
                    <input type="text" class="form-control" name="mulai" placeholder="Tahun Mulai">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Selesai</label>
                    <input type="text" class="form-control" name="selesai" placeholder="Tahun Selesai">
                  </div>                                                                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <div class="col col-xs-12 text-right">
                                <a class="text-white btn btn-warning" href="<?php echo site_url("admin/dosen");?>"><i class="fa fa-arrow-left"></i> Kembali</a> <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                              </div>
                </div>
              <?php echo form_close(); ?>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
</div>
<!-- ./wrapper -->