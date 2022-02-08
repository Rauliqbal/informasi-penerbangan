<!-- /.control-sidebar -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<footer class="main-footer">
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
</div>
<!-- ./wrapper -->

<!-- Jquery-3.6.0 -->
<script src="<?= PUBLICC; ?>/js/jquery-3.6.0.min.js"></script>
<!-- jQuery -->
<!-- <script src="<?= PUBLICC; ?>/AdminLTE3/plugins/jquery/jquery.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="<?= PUBLICC; ?>/AdminLTE3.1.0/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<!-- jQuery -->
<script src="<?= PUBLICC; ?>/AdminLTE3.1.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= PUBLICC; ?>/AdminLTE3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?= PUBLICC; ?>/AdminLTE3.1.0/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= PUBLICC; ?>/AdminLTE3.1.0/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= PUBLICC; ?>/AdminLTE3.1.0/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= PUBLICC; ?>/AdminLTE3.1.0/dist/js/demo.js"></script>
<!-- Page specific script -->
<!-- script buatan -->
<script src="<?= PUBLICC; ?>/js/<?php if (isset($data['script'])) echo $data['script']; ?>.js"></script>

</body>

</html>