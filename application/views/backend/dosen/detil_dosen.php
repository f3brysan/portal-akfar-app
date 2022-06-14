<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $get['0']['gelar_depan']; ?> <?php echo $get['0']['nama']; ?>, <?php echo $get['0']['gelar_belakang']; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo site_url("admin/dosen") ?>">Data Dosen</a></li>
            <li class="breadcrumb-item active"><?php echo $get['0']['gelar_depan']; ?> <?php echo $get['0']['nama']; ?>, <?php echo $get['0']['gelar_belakang']; ?></li>
          </ol>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-square"
                  src="<?php echo base_url(); ?>uploads/<?php echo $get['0']['picture']; ?>">
                </div>
                <h3 class="profile-username text-center"><?php echo $get['0']['gelar_depan']; ?> <?php echo $get['0']['nama']; ?>, <?php echo $get['0']['gelar_belakang']; ?></h3>
                <p class="text-center">NIDN : <?php echo $get['0']['nidn']; ?></p>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#pendidikan" data-toggle="tab">Riwayat Pendidikan</a></li>
                  <li class="nav-item"><a class="nav-link" href="#riset" data-toggle="tab">Bidang Riset</a></li>
                  <li class="nav-item"><a class="nav-link" href="#publikasi" data-toggle="tab">Publikasi</a></li>
                  <li class="nav-item"><a class="nav-link" href="#pengabdian" data-toggle="tab">Pengabdian Masyarakat</a></li>
                </ul>
                </div><!-- /.card-header -->
                <div class="card-body"> 
                  <div class="tab-content">
                    <div class="active tab-pane" id="pendidikan">
                      <a href="<?php echo site_url('admin/riwayat_pendidikan_add') ?>/<?php echo $get['0']['nidn']; ?>" class="float-left btn btn-primary"><span class="fas fa-plus"></span> Tambah</a>
                      <!-- Post -->
                      <div class="post">
                        <table id="tb_pendidikan" class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Jenjang</th>
                              <th>Nama Institusi</th>
                              <th>Mulai</th>
                              <th>Selesai</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if (is_array($pendidikan) && count($pendidikan) > 0): ?>
                            <?php $no = 1; ?>
                            <?php foreach ($pendidikan as $get): ?>
                            <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $get['jenjang'] ?></td>
                              <td><?php echo $get['institusi'] ?></td>
                              <td><?php echo $get['mulai'] ?></td>
                              <td><?php echo $get['selesai'] ?></td>
                              <td><div class="btn btn-group">
                                <a href="<?php echo site_url("admin/detil_dosen/$get[rel_nidn]") ?>" class="btn btn-xs btn-primary"><i class="fas fa-eye"></i> Detil</a>
                                <a href="<?php echo site_url("admin/riwayat_pendidikan_edit/$get[rel_nidn]/$get[id]") ?>" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i> Ubah
                                </a>
                                <a href="<?php echo site_url("admin/banner_delete/$get[id]") ?>" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                              </div>
                            </td>
                          </tr>
                          <?php endforeach ?>
                          <?php endif ?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>No</th>
                          <th>Jenjang</th>
                          <th>Nama Institusi</th>
                          <th>Mulai</th>
                          <th>Selesai</th>
                          <th>Aksi</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="riset">
                    <a href="<?php echo site_url('admin/riset_add') ?>/<?php echo $nidn; ?>" class="float-left btn btn-primary"><span class="fas fa-plus"></span> Tambah</a>
                    <!-- Post -->
                    <div class="post">
                      <table id="tb_riset" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>No </th>
                          <th>Nama Riset</th>
                          <th>Tahun</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if (is_array($riset) && count($riset) > 0): ?>
                        <?php $no = 1; ?>
                        <?php foreach ($riset as $get): ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $get['content'] ?></td>
                          <td><?php echo $get['tahun'] ?></td>
                          <td><div class="btn btn-group">
                            <a href="<?php echo site_url("admin/detil_dosen/$get[nidn]") ?>" class="btn btn-xs btn-primary"><i class="fas fa-eye"></i> Detil</a>
                            <a href="<?php echo site_url("admin/banner_edit/$get[id]") ?>" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i> Ubah
                            </a>
                            <a href="<?php echo site_url("admin/banner_delete/$get[id]") ?>" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach ?>
                      <?php endif ?>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Riset</th>
                      <th>Tahun</th>
                      <th>Aksi</th>
                    </tr>
                    </tfoot>
                    </table>
                  </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="publikasi">
                  <!-- Post -->
                  <div class="post">
                    <table id="tb_publikasi" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Publikasi</th>
                          <th>Tahun</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if (is_array($publikasi) && count($publikasi) > 0): ?>
                        <?php $no = 1; ?>
                        <?php foreach ($publikasi as $get): ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $get['content'] ?></td>
                          <td><?php echo $get['tahun'] ?></td>
                          <td><div class="btn btn-group">
                            <a href="<?php echo site_url("admin/detil_dosen/$get[nidn]") ?>" class="btn btn-xs btn-primary"><i class="fas fa-eye"></i> Detil</a>
                            <a href="<?php echo site_url("admin/banner_edit/$get[id]") ?>" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i> Ubah
                            </a>
                            <a href="<?php echo site_url("admin/banner_delete/$get[id]") ?>" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach ?>
                      <?php endif ?>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Publikasi</th>
                      <th>Tahun</th>
                      <th>Aksi</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="pengabdian">
                <!-- Post -->
                <div class="post">
                  <table id="tb_pengabdian" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Tahun</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if (is_array($pengabdian) && count($pengabdian) > 0): ?>
                        <?php $no = 1; ?>
                        <?php foreach ($pengabdian as $get): ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $get['content'] ?></td>
                          <td><?php echo $get['tahun'] ?></td>
                          <td><div class="btn btn-group">
                            <a href="<?php echo site_url("admin/detil_dosen/$get[nidn]") ?>" class="btn btn-xs btn-primary"><i class="fas fa-eye"></i> Detil</a>
                            <a href="<?php echo site_url("admin/banner_edit/$get[id]") ?>" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i> Ubah
                            </a>
                            <a href="<?php echo site_url("admin/banner_delete/$get[id]") ?>" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach ?>
                      <?php endif ?>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Tahun</th>
                      <th>Aksi</th>
                    </tr>
                    </tfoot>
                </table>
              </div>
            </div>
          </div>
          <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->