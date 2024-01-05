<?php $__env->startSection('atassidebar'); ?>
<div class="brand-link">
  <img src="<?php echo e(asset('lte/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <p>Thoriqul Irsyad</p>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
<div class="sidebar">
  <a href="<?php echo e(route('profil/admin')); ?>">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
      <div class="image">
        <img src="<?php echo e(asset('storage/fotopengurus/' . basename(Auth::user()->fotopengurus))); ?>" alt="User Image" class="img-circle elevation-2" style="width: 70px; height: 70px; object-fit: cover;">
      </div>
      <div class="info ml-3">
        <h6 class="d-block"><?php echo e(Auth::user()->name); ?></h6>
      </div>
    </div>
    </a>
  
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php if(auth()->user()->role_id != 2): ?>
        <li class="nav-item">
          <a href="<?php echo e(route('datauser/admin')); ?>" class="nav-link <?php echo e(request()->routeIs('datauser/admin') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                  Data User
              </p>
          </a>
        </li>
        <?php endif; ?>
        <li class="nav-item">
          <?php if(auth()->user()->role_id == 2): ?>
              <a href="<?php echo e(route('dashboard/pengurus')); ?>" class="nav-link <?php echo e(request()->routeIs('dashboard/pengurus') ? 'active' : ''); ?>">
          <?php else: ?>
              <a href="<?php echo e(route('dashboard/admin')); ?>" class="nav-link <?php echo e(request()->routeIs('dashboard/admin') ? 'active' : ''); ?>">
          <?php endif; ?>
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
      
          <?php if(session('success')): ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php endif; ?>
            <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <?php if(auth()->user()->role_id == 2): ?>
                    <h1 class="m-0">Data Berita</h1>
                    <?php else: ?>
                      <h1 class="m-0">Berita Admin</h1>
                    <?php endif; ?>
                  </div>
                    <div class="col-sm-6 text-right">
                      
                      <a href="<?php echo e(route('tambahberita/admin')); ?>" class="btn btn-primary">Tambah Berita</a>
                  </div>
                </div>
            </div>
        </div>
        <section class="content">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th style="width: 10px">No</th>
                        <th>Judul</th>
                        <?php if(auth()->user()->role_id != 2): ?>
                        <th>Pembuat</th>
                        <?php endif; ?>
                        <th>Foto</th>
                        <th>Tanggal Pembuatan</th>
                        <?php if(auth()->user()->role_id != 2): ?>
                        <th>Created_at</th>
                        <th>Update_at</th>
                        <?php endif; ?>
                        <th colspan="3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $brt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($berita->firstItem() + $loop->index); ?></td>
                            <td><?php echo e($brt->judul); ?></td>
                            <?php if(auth()->user()->role_id != 2): ?>
                            <td><?php echo e($brt->user->name); ?></td>
                            <?php endif; ?>
                            <td><img src="<?php echo e(asset('storage/fotoberita/' . basename($brt->fotoberita))); ?>" style="width: 140px; height: 100px; "></td>
                            <td><?php echo e(\Carbon\Carbon::parse($brt->tanggal)->format('j F Y')); ?></td>
                            <?php if(auth()->user()->role_id != 2): ?>
                            <td><?php echo e($brt->created_at); ?></td>
                            <td><?php echo e($brt->updated_at); ?></td>
                            <?php endif; ?>
                            <td><a href="<?php echo e(route('showberita/admin', ['id' => $brt->id])); ?>" type="button" class="btn btn-secondary">Lihat</a></td>
                            <td><a href="<?php echo e(route('editberita/admin', ['id' => $brt->id])); ?>" type="button" class="btn btn-success" onclick="return confirm('Yakin Akan Mengubah Data Ini?')">Edit</a></td>
                            <td><a href="<?php echo e(route('deleteberita/admin', ['id' => $brt->id])); ?>" type="button" class="btn btn-danger" onclick="return confirm('Yakin Akan Menghapus Data Ini?')">Hapus</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($berita->withQueryString()->links('pagination::bootstrap-5')); ?>

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