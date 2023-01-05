<?php $__env->startSection('heading', 'Edit Jadwal'); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active"><a href="<?php echo e(route('jadwal.index')); ?>">Jadwal</a></li>
  <li class="breadcrumb-item active">Edit Jadwal</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Jadwal</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="<?php echo e(route('jadwal.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="card-body">
          <div class="row">
            <input type="hidden" name="jadwal_id" value="<?php echo e($jadwal->id); ?>">
            <div class="col-md-6">
              <div class="form-group">
                <label for="hari_id">Hari</label>
                <select id="hari_id" name="hari_id" class="form-control <?php $__errorArgs = ['hari_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> select2bs4">
                  <option value="">-- Pilih Hari --</option>
                  <?php $__currentLoopData = $hari; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"
                      <?php if($jadwal->hari_id == $data->id): ?>
                        selected
                      <?php endif; ?>
                    ><?php echo e($data->nama_hari); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <div class="form-group">
                <label for="kelas_id">Kelas</label>
                <select id="kelas_id" name="kelas_id" class="form-control <?php $__errorArgs = ['kelas_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> select2bs4">
                  <option value="">-- Pilih Kelas --</option>
                  <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($data->id); ?>"
                      <?php if($jadwal->kelas_id == $data->id): ?>
                        selected
                      <?php endif; ?>
                    ><?php echo e($data->nama_kelas); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <div class="form-group">
                <label for="guru_id">Kode Mapel</label>
                <select id="guru_id" name="guru_id" class="form-control <?php $__errorArgs = ['guru_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> select2bs4">
                  <option value="" <?php if($jadwal->guru_id): ?>
                    selected
                  <?php endif; ?>>-- Pilih Kode Mapel --</option>
                  <?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"
                      <?php if($jadwal->guru_id == $data->id): ?>
                        selected
                      <?php endif; ?>
                    ><?php echo e($data->kode); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="jam_mulai">Jam Mulai</label>
                <input type='time' value="<?php echo e($jadwal->jam_mulai); ?>" id="jam_mulai" name='jam_mulai' class="form-control <?php $__errorArgs = ['jam_mulai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder='JJ:mm:dd'>
              </div>
              <div class="form-group">
                <label for="jam_selesai">Jam Selesai</label>
                <input type='time' value="<?php echo e($jadwal->jam_selesai); ?>" name='jam_selesai' class="form-control <?php $__errorArgs = ['jam_selesai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder='JJ:mm:dd'>
              </div>
              <div class="form-group">
                <label for="ruang_id">Ruang Kelas</label>
                <select id="ruang_id" name="ruang_id" class="form-control <?php $__errorArgs = ['ruang_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> select2bs4">
                    <option value="">-- Pilih Ruang Kelas --</option>
                    <?php $__currentLoopData = $ruang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"
                          <?php if($jadwal->ruang_id == $data->id): ?>
                            selected
                          <?php endif; ?>
                        ><?php echo e($data->nama_ruang); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        window.location="<?php echo e(route('jadwal.show', Crypt::encrypt($jadwal->kelas_id))); ?>";
        });
    });
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataJadwal").addClass("active");
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\akademik\resources\views/admin/jadwal/edit.blade.php ENDPATH**/ ?>