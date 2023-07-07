<div id="wrapper">
  <header class="tech-header header">
    <div class="container-fluid">
      <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="tech-index.html"><img src="<?= base_url('assets/assets-frontend/') ?>images/version/logo.png" alt="" width="200px"></a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('beranda') ?>">Beranda</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/GIBRIL1811">GitHub</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('kontak') ?>">Kontak</a>
            </li>
          </ul>
          <?php if ($this->session->userdata('id_user')) : ?>
            <ul class="navbar-nav mr-2">
              <li class="nav-item">
                <a class="btn btn-danger" href="<?= base_url('berita') ?>">Dashboard</a>
              </li>
            </ul>
          <?php endif ?>
        </div>
      </nav>
    </div><!-- end container-fluid -->
  </header><!-- end market-header -->