<?php $__env->startSection('heading', 'Pengumuman'); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active">Pengumuman</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <form class="form-group" action="<?php echo e(route('admin.pengumuman.simpan')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-header">
                    <button type="submit" name="submit" class="btn btn-outline-primary">
                        Simpan &nbsp; <i class="nav-icon fas fa-save"></i>
                    </button>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body pad">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo e($pengumuman->id); ?>">
                        <textarea class="textarea <?php $__errorArgs = ['isi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="isi" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e($pengumuman->isi); ?></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $("#Pengumuman").addClass("active");
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\akademik\resources\views/admin/pengumuman.blade.php ENDPATH**/ ?>