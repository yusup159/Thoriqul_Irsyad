
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
          <a href="<?php echo e(route('dashboard/admin')); ?>" class="nav-link <?php echo e(request()->routeIs('dashboard/admin') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('datakegiatan/admin')); ?>" class="nav-link <?php echo e(request()->routeIs('datakegiatan/admin') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                  Kegiatan
              </p>
          </a>
      </li>
      
        <li class="nav-item">
            <a href="<?php echo e(route('databerita/admin')); ?>" class="nav-link <?php echo e(request()->routeIs('databerita/admin') ? 'active' : ''); ?>">
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
            <h1 class="m-0">Berita Admin</h1>
          </div>
          
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
            </div>
          </div>

          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
            </div>
          </div>
        </div>
 
      </div>
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
<?php echo $__env->make('layoutadmin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APK\Xampp\htdocs\Thoriqul_Irsyad\resources\views/admin/berita.blade.php ENDPATH**/ ?>