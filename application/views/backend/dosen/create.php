<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Dosen Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin/about') ?>">Dosen </a></li>
              <li class="breadcrumb-item active">Tambah Data Dosen Baru</li>
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
                    <label for="exampleInputFile">File Input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foto1" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIDN/NIP/NUP</label>
                    <input type="text" class="form-control" name="nidn" placeholder="NIDN/NIP/NUP">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Dosen</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Dosen">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gelar Depan Nama</label>
                    <input type="text" class="form-control" name="gelar_depan" placeholder="Dr. / DRS. / KH">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gelar Belakang Nama</label>
                    <input type="text" class="form-control" name="gelar_belakang" placeholder="M.PD / M.M / Dll.">
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