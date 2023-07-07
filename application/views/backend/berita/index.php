        <!-- page content -->

        <?php
        if (validation_errors()) {

          $this->session->set_flashdata('comment_message', ' <div class="alert alert-danger" id="notification" role="alert">
            Data komentar yang anda masukkan tidak lengkap mohon periksa kembali!
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
          <?= $this->session->flashdata('comment_message'); ?>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title ">
                  <div class="d-flex ">
                    <div class="p-2 ">
                      <div class="mb-3 row">
                        <div class="col-sm-10">
                          <h2><?= $title; ?></h2>
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
                              <th>Title</th>
                              <th>Kategori</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php $i = 1;
                            foreach ($berita as $row) :
                            ?>
                              <tr>
                                <td><?= $i ?></td>
                                <td><?= $row['title'] ?></td>
                                <td><?= $row['category'] ?></td>

                                <td>
                                  <a href="<?= base_url('berita/delete/') . $row['id_news'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus kategori <?= $row['category'] ?> ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                  <a href="<?= base_url('home/detail/' . $row['id_news']) ?>" class="btn btn-warning">Tampilkan</a>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update<?= $row['id_news'] ?>">
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

        <!-- edit Modal -->
        <?php foreach ($berita as $row) : ?>
          
          <div class="modal fade" id="update<?= $row['id_news'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ubah Data Berita</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?= form_open_multipart('berita/update/' . $row['id_news']) ?>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="id_category">Kategori</label>
                    <input type="hidden" name="gambar_lama" value="<?= $row['image'] ?>">
                    <select class="form-control" id="id_category" name="id_category">
                      <option value="<?= $row['id_category'] ?>" ><?= $row['category'] ?></option>
                      <?php foreach ($kategori as $kategorii) : ?>
                        <option value="<?= $kategorii['id_category'] ?>"><?= $kategorii['category'] ?></option>
                      <?php endforeach ?>
                      <option value="">Pilih Disini</option>
                    </select>
                    <?= form_error('id_category', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Title" value="<?= $row['title'] ?>" >
                    <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="editor" name="description" rows="3"><?= $row['description'] ?></textarea>
                    <?= form_error('description', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="mb-3">
                    <label for="images" class="drop-container" id="dropcontainer">
                      <span class="drop-title">Masukkan Gambar Baru Disini</span>
                      <input type="file" id="images" accept="image/*" name="image">
                    </label>
                  </div>
                </div>
                <?= form_error('images', '<small class="text-danger">', '</small>'); ?>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
              <?= form_close() ?>


            </div>
          </div>
        <?php endforeach ?>