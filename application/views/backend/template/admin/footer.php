<!-- get user based on session->userdata('id_user) -->

<!-- footer content -->
<footer>
  <div class="pull-right">
    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- start content -->
        <form action="<?= base_url('Change_Password') ?>" method="post">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="<?= $user['email'] ?>">
          </div>
          <div class="form-group">
            <label for="passwordLama">Password Lama</label>
            <input type="text" class="form-control" name="passwordLama" placeholder="Masukkan Password Lama">
          </div>
          <div class="form-group">
            <hr>
          </div>
          <div class="form-group">
            <label for="passwordBaru">Password Baru</label>
            <input type="text" class="form-control" name="passwordBaru" placeholder="Masukkan Password Baru">
          </div>
          <div class="form-group">
            <label for="konformasiPassword">Konfirmasi Password</label>
            <input type="text" class="form-control" name="konformasiPassword" placeholder="Konfirmasi Password">
          </div>

          <!-- end content -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Change</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- jQuery -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- jQuery Sparklines -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- easy-pie-chart -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<!-- gauge.js -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/iCheck/icheck.min.js"></script>
<!-- Switchery -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/switchery/dist/switchery.min.js"></script>
<!-- Skycons -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/Flot/jquery.flot.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/Flot/jquery.flot.time.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/moment/min/moment.min.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- Datatables -->
<script src="<?= base_url('assets/admin-template') ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url('assets/admin-template') ?>/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- /page content -->



<!---------------------------  js for Ckeditor --------------------------->


<script>
  setInterval(function() {
    document.getElementById("notification").className = "d-none";
  }, 6000);
</script>

<!-- Bootstrap alert auto close in 2 secs -->
<script>
  $(".alert").fadeTo(2000, 500).slideUp(500, function() {
    $(this).slideUp(500);
  });
</script>

<!-- Custom Theme Scripts -->
<script src="<?= base_url('assets/admin-template') ?>/build/js/custom.min.js"></script>

<!-- custom script AJAX responsive radio button etc -->
<script type="text/javascript">
  //TODO ---------------- AJAX Update Is Active TA --------------

  $("input#radio-ta").on('click', function() {
    const id = $(this).data('idta');
    const status = $(this).data('isactive');

    $.ajax({
      url: "<?= base_url('siswa/tahunActive'); ?>",
      type: 'post',
      data: {
        idTA: id,
        isactive: status
      },
      success: function() {
        document.location.href = "<?= base_url('siswa/tahunajaran'); ?>";
      }
    });
  });

  //TODO ---------------- AJAX Update Is Active ControlPanel --------------

  $("input#radio-cp").on('click', function() {
    const id = $(this).data('idcp');
    const status = $(this).data('isactive');

    $.ajax({
      url: "<?= base_url('setting/cpanelActive'); ?>",
      type: 'post',
      data: {
        idCP: id,
        isactive: status
      },
      success: function() {
        document.location.href = "<?= base_url('setting'); ?>";
      }
    });
  });
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>


<script>
  ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
      console.error(error);
    });
</script>

<!-- panggil ckeditor.js -->
<script type="text/javascript" src="<?= base_url('assets') ?>/ckeditor/ckeditor.js"></script>
<!-- panggil adapter jquery ckeditor -->
<script type="text/javascript" src="<?= base_url('assets') ?>/ckeditor/adapters/jquery.js"></script>
<!-- setup selector -->



</body>

</html>