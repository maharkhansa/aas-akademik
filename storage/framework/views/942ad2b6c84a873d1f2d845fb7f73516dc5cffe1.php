<?php $__env->startSection('heading', 'Edit Mapel'); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active"><a href="<?php echo e(route('mapel.index')); ?>">Mapel</a></li>
  <li class="breadcrumb-item active">Edit Mapel</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Mapel</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="<?php echo e(route('mapel.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="mapel_id" value="<?php echo e($mapel->id); ?>">
                <div class="form-group">
                  <label for="nama_mapel">Nama Mapel</label>
                  <input type="text" id="nama_mapel" name="nama_mapel" value="<?php echo e($mapel->nama_mapel); ?>" class="form-control <?php $__errorArgs = ['nama_mapel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('Nama Mata Pelajaran')); ?>">
                </div>
                <div class="form-group">
                  <label for="paket_id">Paket</label>
                  <select id="paket_id" name="paket_id" class="form-control <?php $__errorArgs = ['paket_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> select2bs4">
                    <option value="">-- Pilih Paket Mapel --</option>
                    <option value="9"
                        <?php if($mapel->paket_id == '9'): ?>
                            selected
                        <?php endif; ?>
                    >Semua</option>
                    <?php $__currentLoopData = $paket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($data->id); ?>"
                        <?php if($mapel->paket_id == $data->id): ?>
                            selected
                        <?php endif; ?>
                      ><?php echo e($data->ket); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <div class="form-group">
                    <label for="kelompok">Kelompok</label>
                    <select id="kelompok" name="kelompok" class="select2bs4 form-control <?php $__errorArgs = ['kelompok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <option value="">-- Pilih Kelompok Mapel --</option>
                        <option value="A"
                            <?php if($mapel->kelompok == 'A'): ?>
                                selected
                            <?php endif; ?>
                        >Pelajaran Umum</option>
                        <option value="B"
                            <?php if($mapel->kelompok == 'B'): ?>
                                selected
                            <?php endif; ?>
                        >Pelajaran Khusus</option>
                        <option value="C"
                            <?php if($mapel->kelompok == 'C'): ?>
                                selected
                            <?php endif; ?>
                        >Pelajaran Keahlian</option>
                    </select>
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
        window.location="<?php echo e(route('mapel.index')); ?>";
        });
    });
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataMapel").addClass("active");
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\akademik\resources\views/admin/mapel/edit.blade.php ENDPATH**/ ?>