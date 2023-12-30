<?php $__env->startSection('atassidebar'); ?>
<div class="brand-link">
  <img src="<?php echo e(asset('lte/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <p>Thoriqul Irsyad</p>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
<div class="sidebar">
  <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
    <div class="image">
      <img src="<?php echo e(asset('storage/fotopengurus/' . basename(Auth::user()->fotopengurus))); ?>" alt="User Image" class="img-circle elevation-2" style="width: 70px; height: 70px; object-fit: cover;">
    </div>
    <div class="info ml-3">
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
                        <h1 class="m-0">Kegiatan Admin</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                      
                      <a href="<?php echo e(route('tambahkegiatan/admin')); ?>" class="btn btn-primary">Tambah Kegiatan</a>
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
                        <th style="width: 150px; height: auto;">Deskripsi</th>
                        <th>UserID</th>
                        <th>Foto</th>
                        <th>Tanggal</th>
                        <th>Created_at</th>
                        <th>Update_at</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $kegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $kegiatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key + 1); ?></td>
                            <td><?php echo e($kegiatan->judul); ?></td>
                            <td style="width: 150px; height: auto;" ><?php echo e($kegiatan->deskripsi); ?></td>
                            <td><?php echo e($kegiatan->user_id); ?></td>
                            <td><img src="<?php echo e(asset('storage/fotokegiatan/' . basename($kegiatan->fotokegiatan))); ?>" style="width: 70px; height: 70px; "></td>
                            <td><?php echo e($kegiatan->tanggal); ?></td>
                            <td><?php echo e($kegiatan->created_at); ?></td>
                            <td><?php echo e($kegiatan->updated_at); ?></td>
                            <td>Aksi</td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('layoutadmin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APK\Xampp\htdocs\Thoriqul_Irsyad\resources\views/admin/kegiatan.blade.php ENDPATH**/ ?>