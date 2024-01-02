<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo e(asset('lte/plugins/fontawesome-free/css/all.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('lte/dist/css/adminlte.min.css')); ?>">

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

 <?php echo $__env->yieldContent('navbarcontent'); ?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4"x`>
 
    <?php echo $__env->yieldContent('atassidebar'); ?>

    <?php echo $__env->yieldContent('sidebar'); ?>


  </aside>

  <?php echo $__env->yieldContent('content'); ?>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>

 <?php echo $__env->yieldContent('footer'); ?>
</div>
<script src="<?php echo e(asset('lte/plugins/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<script src="<?php echo e(asset('lte/dist/js/adminlte.js')); ?>"></script>
<script src="<?php echo e(asset('lte/plugins/jquery-mousewheel/jquery.mousewheel.js')); ?>"></script>
<script src="<?php echo e(asset('lte/plugins/raphael/raphael.min.js')); ?>"></script>
<script src="<?php echo e(asset('lte/plugins/jquery-mapael/jquery.mapael.min.js')); ?>"></script>
<script src="<?php echo e(asset('lte/plugins/jquery-mapael/maps/usa_states.min.js')); ?>"></script>
<script src="<?php echo e(asset('lte/plugins/chart.js/Chart.min.js')); ?>"></script>

<script src="<?php echo e(asset('lte/dist/js/demo.js')); ?>"></script>
<script src="<?php echo e(asset('lte/dist/js/pages/dashboard2.js')); ?>"></script>
<!-- ... (kode lainnya) -->



</body>
</html>
<?php /**PATH D:\APK\Xampp\htdocs\Thoriqul_Irsyad\resources\views/layoutadmin/main.blade.php ENDPATH**/ ?>