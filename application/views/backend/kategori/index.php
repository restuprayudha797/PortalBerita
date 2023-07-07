        <!-- page content -->

        <?php
        if (validation_errors()) {

          $this->session->set_flashdata('kategori_message', ' <div class="alert alert-danger" id="notification" role="alert">
            Data Yang Anda Masukkan Tidak Lengkap Mohon Periksa Kembali!
            </div>');
        }
        ?>

        <div class="right_col" role="main">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
            </ol>
          </nav>
          <?= $this->session->flashdata('kategori_message'); ?>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title ">
                  <div class="d-flex ">
                    <div class="p-2 ">
                      <div class="mb-3 row">
                        <div class="col-sm-10">
                          <form action="<?= base_url('kategori') ?>" method="post" class="d-flex">
                            <input type="text" class="form-control" placeholder="Tambah Kategori" name="kategori" required>
                            <button type="submit" class="btn btn-warning ml-1"><i class="fa fa-plus"></i></button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">

                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>kategori</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php $i = 1;
                            foreach ($kategori as $row) :
                            ?>
                              <tr>
                                <td><?= $i ?></td>
                                <td><?= $row['category'] ?></td>

                                <td>
                                  <a href="<?= base_url('kategori/delete/') . $row['id_category'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus kategori <?= $row['category'] ?> ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update<?= $row['id_category'] ?>">
                                    <i class="fa fa-edit"></i>
                                  </button>
                                </td>
                              </tr>
                              <?php $i++ ?>
                            <?php endforeach ?>
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
        <!-- /page content -->

        <?php foreach ($kategori as $row) : ?>
          <!-- Tambah Modal -->
          <div class="modal fade" id="update<?= $row['id_category'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ubah Data Kategori</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="<?= base_url('kategori/update/') . $row['id_category'] ?>" method="post">

                  <div class="modal-body">
                    <div class="form-group">
                      <label for="kategori">Kategori</label>
                      <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukkan Kategori" value="<?= $row['category'] ?>">
                      <?= form_error('kategori', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        <?php endforeach; ?>