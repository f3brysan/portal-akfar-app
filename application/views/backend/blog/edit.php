<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $get->title; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?php echo site_url('admin/about') ?>">Ubah Artikel</a></li>
            <li class="breadcrumb-item active"><?php echo $get->title ?></li>
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
          <h3 class="card-title"><?php echo $get->title; ?></h3>
        </div>
        <form role="form" action="" method="post" enctype="multipart/form-data">
          <div class="card-body">
            <img src="<?php echo base_url() ?>uploads/<?php echo $get->picture; ?>" alt="<?php echo $get->picture; ?>" width="480px">
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
              <label>Pilih Jenis Artikel</label>
              <select class="form-control" name="type">               
                  <option value="<?php echo $get->type; ?>">-- <?php echo lcfirst($get->type); ?> --</option>
                  <option value="blog">Blog</option>  
                  <option value="news">Berita</option>                                          
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Judul Artikel</label>
              <input type="text" class="form-control" name="title" value="<?php echo $get->title;?>" placeholder="Judul">
            </div>
            <div class="form-group">
              <label for="validationDefault02">Deskripsi</label>
              <textarea class="form-control" name="description" id='textarea' rows="8"><?php echo $get->content; ?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tags</label>
              <input type="text" class="form-control" name="tags" value="<?php echo $get->tags; ?>" placeholder="farmasi,obat (Tanpa Spasi)">
            </div>
            <div class="form-group">
              <label>Diposting Pada:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                </div>
                <input type="text" class="form-control float-right form_date" name="posted" value="<?php echo $get->posted; ?>"  data-date-format="yyyy-mm-dd" id="form_date">
              </div>
              <!-- /.input group -->
            </div>
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
  
  <!-- Control Sidebar -->  
</div>
<!-- ./wrapper -->