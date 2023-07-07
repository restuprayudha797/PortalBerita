<!-- page content -->

<?php
if (validation_errors()) {

  $this->session->set_flashdata('news_message', ' <div class="alert alert-danger" id="notification" role="alert">
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

  <!-- flashdata -->
  <?= $this->session->flashdata('news_message'); ?>

  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title ">
          <div class="d-flex justify-content-center ">
            <div class="p-2 ">
              <h2><?= $title; ?></h2>
            </div>
            <div class="ml-auto p-2 bd-highlight">
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="row">
            <div class="col-sm-12">

              <?= form_open_multipart('berita/addNews') ?>

              <div class="form-group">
                <label for="id_category">Kategori</label>
                <select class="form-control" id="id_category" name="id_category">
                  <option value="" selected>Pilih Disini</option>
                  <?php foreach ($kategori as $row) : ?>
                    <option value="<?= $row['id_category'] ?>"><?= $row['category'] ?></option>
                  <?php endforeach ?>
                </select>
                <?= form_error('id_category', '<small class="text-danger">', '</small>'); ?>

              </div>

              <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Title" value="<?= set_value('title') ?>">
                <?= form_error('title', '<small class="text-danger">', '</small>'); ?>

              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="editor" name="description" rows="3"><?= set_value('description') ?></textarea>
                <?= form_error('description', '<small class="text-danger">', '</small>'); ?>

              </div>
              <div class="mb-3">
                <label for="images" class="drop-container" id="dropcontainer">
                  <span class="drop-title">Masukkan Gambar Disini</span>
                  or
                  <input type="file" id="images" accept="image/*" name="image" required>
                </label>
                <?= form_error('images', '<small class="text-danger">', '</small>'); ?>

              </div>
              <p>
                <button type='button' class="btn btn-danger" onclick="window.location.href='<?= base_url('login'); ?>';">Kembali</button>
                <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
              </p>
              <?= form_close() ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>