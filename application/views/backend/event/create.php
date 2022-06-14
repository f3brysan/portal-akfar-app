<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buat Agenda Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin/agenda') ?>">Agenda Akfar</a></li>
              <li class="breadcrumb-item active">Buat Agenda Baru</li>
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
          <h3 class="card-title">Buat Agenda Baru</h3>          
        </div>
        <form role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foto1" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Agenda</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul">
                  </div>
                  <div class="form-group">                   
                    <label for="validationDefault02">Deskripsi Agenda</label>
                 <textarea class="form-control" name="description" id='textarea' rows="8"></textarea>
                  </div>
                  <div class="form-group">
              <label>Dimulai Pada:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-calendar"></i></span>
                </div>
                <input type="text" class="form-control float-right form_date" name="event_start" data-date-format="yyyy-mm-dd" id="form_date">
              </div>
              <!-- /.input group -->
            </div>
            <div class="form-group">
              <label>Selesai Pada:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-calendar"></i></span>
                </div>
                <input type="text" class="form-control float-right form_date" name="event_end" data-date-format="yyyy-mm-dd" id="form_date">
              </div>
              <!-- /.input group -->
            </div>                                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <div class="col col-xs-12 text-right">
                                <a class="text-white btn btn-warning" href="<?php echo site_url("admin/agenda");?>"><i class="fa fa-arrow-left"></i> Kembali</a> <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
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