<section class="section first-section">
  <div class="container-fluid">
    <div class="masonry-blog clearfix">
      <div class="first-slot">
        <div class="masonry-box post-media">
          <img src="<?= base_url('assets/assets-frontend/') ?>upload/tekno.jpg" alt="" class="img-fluid" style="height: 335px;">
          <div class="shadoweffect">
            <div class="shadow-desc">
              <div class="blog-meta">
                <span class="bg-orange"><a href="" title="">Teknologi</a></span>
              </div><!-- end meta -->
            </div><!-- end shadow-desc -->
          </div><!-- end shadow -->
        </div><!-- end post-media -->
      </div><!-- end first-side -->

      <div class="second-slot">
        <div class="masonry-box post-media">
          <img src="<?= base_url('assets/assets-frontend/') ?>upload/apple.jpg" alt="" class="img-fluid" style="height: 335px;">
          <div class="shadoweffect">
            <div class="shadow-desc">
              <div class="blog-meta">
                <span class="bg-orange"><a href="" title="">Apple Produk</a></span>

              </div><!-- end meta -->
            </div><!-- end shadow-desc -->
          </div><!-- end shadow -->
        </div><!-- end post-media -->
      </div><!-- end second-side -->

      <div class="last-slot">
        <div class="masonry-box post-media">
          <img src="<?= base_url('assets/assets-frontend/') ?>upload/android.png" alt="" class="img-fluid" style="height: 335px;">
          <div class="shadoweffect">
            <div class="shadow-desc">
              <div class="blog-meta">
                <span class="bg-orange"><a href="" title="">Produk Android</a></span>
              </div><!-- end meta -->
            </div><!-- end shadow-desc -->
          </div><!-- end shadow -->
        </div><!-- end post-media -->
      </div><!-- end second-side -->
    </div><!-- end masonry -->
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
        <div class="page-wrapper">
          <div class="blog-top clearfix">
            <h4 class="pull-left">Berita <a href="#"><i class="fa fa-rss"></i></a></h4>
          </div><!-- end blog-top -->

          <div class="blog-list clearfix">

            <?php foreach ($beritaTerbaru as $row) : ?>
              <div class="blog-box row mt-3">
                <div class="col-md-4">
                  <div class="post-media">
                    <a href="<?= base_url('home/detail/' . $row['id_news']) ?>" title="">
                      <img src="<?= base_url('UploadImage/' . $row['image']) ?>" alt="" class="img-fluid">
                      <div class="hovereffect"></div>
                    </a>
                  </div>
                </div>
                <div class="blog-meta big-meta col-md-8">
                  <h4><a href="<?= base_url('home/detail/' . $row['id_news']) ?>" title=""><?= $row['title'] ?></a></h4>
                  <p>

                    <?php
                    $description = substr($row['description'], 0, 30);
                    ?>
                    <?= $description ?>
                  </p>
                  <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title=""><?= $row['category'] ?></a></small>
                  <small><a href="tech-single.html" title=""><?= date('d - M - Y', $row['date_created']) ?></a></small>
                  <small><a href="tech-author.html" title=""><?= $row['name'] ?></a></small>
                </div>
              </div>
              <hr>
            <?php endforeach ?>


            <hr class="invis">

          </div><!-- end blog-list -->
        </div><!-- end page-wrapper -->
        <hr class="invis">
      </div><!-- end col -->
      <?php if (!empty($populer)) : ?>

        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <div class="sidebar">
            <div class="widget">
              <div class="widget">
                <h2 class="widget-title">Populer</h2>
                <div class="blog-list-widget">
                  <div class="list-group">

                    <?php foreach ($populer as $popular) ?>
                    <a href="<?= base_url('home/detail/' . $popular['id_news']) ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="w-100 justify-content-between">
                        <img src="<?= base_url('UploadImage/' . $popular['image']) ?>" alt="" class="img-fluid float-left">
                        <h5 class="mb-1"><?= $popular['title'] ?></h5>
                        <small><?= date('d,M,Y', $popular['date_created']) ?></small>
                      </div>
                    </a>



                  </div><!-- end sidebar -->
                </div><!-- end col -->
              </div><!-- end row -->
            </div><!-- end container -->
          <?php endif ?>
</section>



<hr class="invis">

</div><!-- end blog-list -->
</div><!-- end page-wrapper -->
<hr class="invis">
</div><!-- end col -->


</div><!-- end container -->
</section>