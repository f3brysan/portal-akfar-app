<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Halaman <?php echo $akademik->title; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin/akademik') ?>">Akademik Akfar</a></li>
              <li class="breadcrumb-item active">Edit Halaman <?php echo $akademik->title; ?></li>
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
          <h3 class="card-title">Edit Halaman <?php echo $akademik->title; ?></h3>          
        </div>
        <form role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <img src="<?php echo base_url() ?>uploads/<?php echo $akademik->picture; ?>" alt="<?php echo $akademik->picture; ?>" width="480px">
                  <hr>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foto1" class="custom-file-input" id="exampleInputFile" placeholder="<?php echo $akademik->picture; ?> ">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Halaman</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="<?php echo $akademik->title; ?>">
                  </div>
                  <div class="form-group">                   
                    <label for="validationDefault02">Deskripsi</label>
                 <textarea class="form-control" name="description" id='textarea' rows="8"> <?php echo $akademik->content; ?></textarea>
                  </div>                                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <div class="col col-xs-12 text-right">
                                <a class="text-white btn btn-warning" href="<?php echo site_url("admin/akademik");?>"><i class="fa fa-arrow-left"></i> Kembali</a> <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                              </div>
                </div>
              <?php echo form_close(); ?>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->