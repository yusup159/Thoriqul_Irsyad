
<?php $__env->startSection('atassidebar'); ?>
<div class="brand-link">
  <img src="<?php echo e(asset('lte/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <p>Thoriqul Irsyad</p>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo e(asset('lte/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <h6 class="d-block"><?php echo e(Auth::user()->name); ?></h6>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo e(route('dashboard/pengurus')); ?>" class="nav-link <?php echo e(request()->routeIs('dashboard/pengurus') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('datakegiatan/pengurus')); ?>" class="nav-link <?php echo e(request()->routeIs('datakegiatan/pengurus') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                  Kegiatan
              </p>
          </a>
      </li>
      
        <li class="nav-item">
            <a href="<?php echo e(route('databerita/pengurus')); ?>" class="nav-link <?php echo e(request()->routeIs('databerita/pengurus') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                 Berita
                </p>
              </a>
        </li>
      </ul>
    </nav>
  </div>  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbarcontent'); ?>
<nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav ml-auto">  
      <li class="nav-item">
        <a class="nav-link"  href="<?php echo e(route('logout')); ?>" role="button">
            Logout
        </a>
      </li>
    </ul>
  </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Kegiatan Pengurus</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>UserID</th>
                        <th>Foto</th>
                        <th>Tanggal</th>
                        <th>Created_at</th>
                        <th>Update_at</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<script>
  var currentUrl = window.location.pathname;

  document.querySelectorAll('.nav-link').forEach(function (element) {
      if (element.getAttribute('href') === currentUrl) {
          element.classList.add('active');
      }
  });
</script>
<?php echo $__env->make('layoutadmin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APK\Xampp\htdocs\Thoriqul_Irsyad\resources\views/pengurus/kegiatan.blade.php ENDPATH**/ ?>