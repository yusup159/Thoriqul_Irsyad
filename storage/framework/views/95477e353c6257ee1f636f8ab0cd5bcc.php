
<?php $__env->startSection('konten-registrasi'); ?>
<div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1">Registrasi</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register a new membership</p>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($item); ?></li>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php endif; ?>
        <form action="<?php echo e(route('prosesregister')); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full name" name="name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <label for="foto" class="input-group-text">Upload Foto</label>
            <input type="file" class="form-control" id="foto" name="fotopengururs">
          </div>
            <br>          
            <div >
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
         
        </form>
  
        <div class="social-auth-links text-center">
            <a href="<?php echo e(route('login')); ?>" class="btn btn-block btn-success">
                Login
            </a>
        </div>
  
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin.layoutregister', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APK\Xampp\htdocs\Thoriqul_Irsyad\resources\views/pengurus/register.blade.php ENDPATH**/ ?>