<?php $__env->startSection('heading', 'Ubah Password'); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active"><a href="<?php echo e(route('profile')); ?>">Pengaturan</a></li>
  <li class="breadcrumb-item active">Ubah Password</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title text-capitalize">Ubah Password <?php echo e(Auth::user()->name); ?></h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="<?php echo e(route('pengaturan.ubah-password')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="password-old">Password Lama</label>
                    <input id="password-old" type="password" class="form-control" name="password_lama" autocomplete="old-password">
                </div> 
                <div class="form-group">
                    <label for="password">Password Baru</label>
                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" autocomplete="new-password">
                </div> 
                <div class="form-group">
                    <label for="password-confirm">Konfirmasi Password</label>
                    <input id="password-confirm" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password_confirmation" autocomplete="new-password">
                </div> 
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="#" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
          <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#back').click(function() {
            window.location="<?php echo e(route('profile')); ?>";
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Sistem-Informasi-Akademik-Sekolah-Laravel\resources\views/user/password.blade.php ENDPATH**/ ?>