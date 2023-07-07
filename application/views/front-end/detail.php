<?php
if (validation_errors()) {

  $this->session->set_flashdata("news_message", "<script>Swal.fire({icon: 'error',title: 'GAGAL',text: 'Data Yang Anda Masukkan Tidak Lengkap!',footer: 'Silahkan Coba Lagi!'})</script>");
}
?>

<?= $this->session->flashdata('news_message'); ?>

<?php 

?>


<section class="section single-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-wrapper">
          <div class="blog-title-area text-center">
            <ol class="breadcrumb hidden-xs-down">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item"><a href="#">Detail</a></li>
              <li class="breadcrumb-item active"><?= $detail['title'] ?></li>
            </ol>

            <span class="color-orange"><a href="tech-category-01.html" title=""><?= $detail['category'] ?></a></span>

            <h3><?= $detail['title'] ?></h3>

            <div class="blog-meta big-meta">
              <small><a href="tech-single.html" title=""><?= date('d - M - Y', $detail['date_created']) ?></a></small>
              <small><a href="tech-author.html" title=""><?= $detail['name'] ?></a></small>
            </div><!-- end meta -->


          </div><!-- end title -->

          <div class="single-post-media">
            <center>
              <img src="<?= base_url('UploadImage/' . $detail['image']) ?>" alt="" class="img-fluid" style="width: 500px;">
            </center>
          </div><!-- end media -->

          <div class="blog-content">
            <div class="pp">
              <?= $detail['description'] ?>

            </div><!-- end pp -->



            <hr class="invis1">

            <div class="custombox clearfix">
              <h4 class="small-title"><?= $jumlah_komentar ?> Komentar</h4>
              <div class="row">
                <?php foreach($komentar as $comment) : ?>
                <div class="col-lg-12">
                  <div class="comments-list">
                    <div class="media">
                      <div class="media-body">
                        <h4 class="media-heading user_name"><?= $comment['name'] ?> <small><?= date('d, M, Y', $comment['date_created']) ?></small></h4>
                        <p><?= $comment['comment'] ?></p>
                      </div>
                    </div>
                  </div>
                </div><!-- end col -->
                <?php endforeach ?>

              </div><!-- end row -->
            </div><!-- end custom-box -->

            <hr class="invis1">

            <div class="custombox clearfix">
              <h4 class="small-title">Kirim komentar</h4>
              <div class="row">
                <div class="col-lg-12">
                  <form class="form-wrapper" method="post" action="<?= base_url('home/detail/' . $detail['id_news']) ?>">
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?= set_value('nama') ?>" required>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email" value="<?= set_value('email') ?>" required>
                    <textarea class="form-control" placeholder="komentar" name="komentar" required><?= set_value('komentar') ?></textarea>
                    <button type="submit" class="btn btn-primary">kirim</button>
                  </form>
                </div>
              </div>
            </div>
          </div><!-- end page-wrapper -->
        </div><!-- end col -->

        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <div class="sidebar">


            <div class="widget mt-5">




              <?php if (!empty($populer)) : ?>
                <?php foreach ($populer as $row) : ?>
                  <div class="widget">
                    <h2 class="widget-title">Populer</h2>
                    <div class="blog-list-widget">
                      <div class="list-group">
                        <a href="<?= base_url('home/detail/' . $row['id_news']) ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="w-100 justify-content-between">
                            <img src="<?= base_url('UploadImage/') . $row['image'] ?>" alt="" class="img-fluid float-left">
                            <h5 class="mb-1"><?= $row['title'] ?></h5>
                            <small><?= date('d  M  Y', $row['date_created']) ?></small>
                          </div>
                        </a>
                      </div>
                    </div><!-- end blog-list -->
                  </div><!-- end widget -->
                <?php endforeach ?>
              <?php endif ?>

            </div><!-- end sidebar -->
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end container -->
</section>