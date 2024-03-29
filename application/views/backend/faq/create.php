<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buat Halaman Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin/akademik') ?>">Akademik Akfar</a></li>
              <li class="breadcrumb-item active">Buat Halaman Baru</li>
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
          <h3 class="card-title">Buat Halaman Baru</h3>          
        </div>
        <form role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body">                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pertanyaan</label>
                    <input type="text" class="form-control" name="heading" placeholder="Pertanyaan">
                  </div>
                  <div class="form-group">                   
                    <label for="validationDefault02">Jawaban</label>
                 <textarea class="form-control" name="content" id='textarea' rows="8"></textarea>
                  </div>                                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <div class="col col-xs-12 text-right">
                                <a class="text-white btn btn-warning" href="<?php echo site_url("admin/faq");?>"><i class="fa fa-arrow-left"></i> Kembali</a> <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
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