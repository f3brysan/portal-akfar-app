<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Halaman FAQ Akfar</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Home</a></li>
            <li class="breadcrumb-item active">Halaman FAQ Akfar</li>
          </ol>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header"><a href="<?php echo site_url('admin/faq_create') ?>" class="float-right btn btn-primary"><span class="fas fa-file-alt"></span> Tambah Faq Baru</a></div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Pertanyaan</th>
                    <th>Jawaban</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (is_array($get) && count($get) > 0): ?>
                  <?php $no = 1; ?>
                  <?php foreach ($get as $get): ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $get['heading'] ?></td>
                    <td><?php echo word_limiter($get['content'], 10);  ?></td>                    
                    <td><div class="btn btn-group">
                      <a href="<?php echo site_url("admin/faq_edit/$get[id]") ?>" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i> Ubah</a>
                      <a href="<?php echo site_url("admin/faq_delete/$get[id]") ?>" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                    </div>
                  </td>
                  
                </tr>
                <?php endforeach ?>
                <?php endif ?>
                
              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
                <th>Aksi</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->