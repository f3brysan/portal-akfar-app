<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Banner <?php echo $banner['0']['title'] ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin/banner') ?>">Banner Akfar</a></li>
              <li class="breadcrumb-item active">Banner <?php echo $banner['0']['title'] ?></li>
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
          <h3 class="card-title">Banner <?php echo $banner['0']['title'] ?></h3>          
        </div>
        <form role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <img src="<?php echo base_url() ?>uploads/<?php echo $banner['0']['picture'] ?>" alt="<?php echo $banner['0']['picture'] ?>" width="480px">
                  <hr>
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
                    <label for="exampleInputEmail1">Judul Banner</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="<?php echo $banner['0']['title'] ?>">
                  </div>
                  <div class="form-group">                   
                    <label for="validationDefault02">Deskripsi</label>
                 <textarea class="form-control" name="description" id='textarea' rows="8"><?php echo $banner['0']['content'] ?></textarea>
                  </div>
                  <div class="form-group">
              <label>Pranala Artikel Jenis Artikel</label>
              <select class="form-control" name="hyperlink">
                <?php if ($banner['0']['hyperlink']  == NULL): ?>
                  <option value="NULL">Tidak Ada</option>
                  <?php foreach ($get as $blog): ?>
                  <option value="<?php echo $blog['id'] ?>/<?php echo $blog['hyperlink'] ?>"><?php echo $blog['title'] ?></option>
                  <?php endforeach ?>
                <?php else: ?>
                  <option value="<?php echo $banner['0']['hyperlink'] ?>">- - <?php echo $banner['0']['hyperlink_title'] ?> - - </option>
                  <?php foreach ($get as $blog): ?>
                  <option value="<?php echo $blog['id'] ?>/<?php echo $blog['hyperlink'] ?>"><?php echo $blog['title'] ?></option>
                <?php endforeach ?>
                <option value="">Tidak Ada</option>
                <?php endif ?>               
              </select>
            </div>                                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <div class="col col-xs-12 text-right">
                                <a class="text-white btn btn-warning" href="<?php echo site_url("admin/about");?>"><i class="fa fa-arrow-left"></i> Kembali</a> <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
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