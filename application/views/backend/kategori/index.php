        <!-- page content -->

        <?php
        if (validation_errors()) {

         $this->session->set_flashdata('kelas_message', ' <div class="alert alert-danger" id="notification" role="alert">
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
         <?= $this->session->flashdata('kelas_message'); ?>
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
                 <input type="text" class="form-control" placeholder="Tambah Kategori" required>
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
                     <a href="<?= base_url('kelas/delete/') . $row['id_category'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus kategori <?= $row['category'] ?> ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                     <a href="<?= base_url('kelas/update/') . $row['id_category'] ?>" + class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>

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