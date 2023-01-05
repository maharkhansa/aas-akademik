<?php $__env->startSection('heading', 'Edit Profile'); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active"><a href="<?php echo e(route('profile')); ?>">Pengaturan</a></li>
  <li class="breadcrumb-item active">Edit Profile</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title text-capitalize">Edit Profile <?php echo e(Auth::user()->name); ?></h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="<?php echo e(route('pengaturan.ubah-profile')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="card-body">
          <?php if(Auth::user()->role == "Guru"): ?>
            <div class="row">
              <input type="hidden" name="role" value="<?php echo e(Auth::user()->guru(Auth::user()->id_card)->role); ?>">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="name">Nama Guru</label>
                      <input type="text" id="name" name="name" value="<?php echo e(Auth::user()->name); ?>" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  </div>
                  <div class="form-group">
                      <label for="mapel_id">Mapel</label>
                      <select id="mapel_id" name="mapel_id" class="select2bs4 form-control <?php $__errorArgs = ['mapel_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                          <option value="">-- Pilih Mapel --</option>
                          <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($data->id); ?>"
                                  <?php if(Auth::user()->guru(Auth::user()->id_card)->mapel_id == $data->id): ?>
                                      selected
                                  <?php endif; ?>
                              ><?php echo e($data->nama_mapel); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="tmp_lahir">Tempat Lahir</label>
                      <input type="text" id="tmp_lahir" name="tmp_lahir" value="<?php echo e(Auth::user()->guru(Auth::user()->id_card)->tmp_lahir); ?>" class="form-control <?php $__errorArgs = ['tmp_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  </div>
                  <div class="form-group">
                      <label for="id_card">Nomor ID Card</label>
                      <input type="text" id="id_card" name="id_card" class="form-control" value="<?php echo e(Auth::user()->guru(Auth::user()->id_card)->id_card); ?>" disabled>
                  </div>
                  <div class="form-group">
                      <label for="telp">Nomor Telpon/HP</label>
                      <input type="text" id="telp" name="telp" onkeypress="return inputAngka(event)" value="<?php echo e(Auth::user()->guru(Auth::user()->id_card)->telp); ?>" class="form-control <?php $__errorArgs = ['telp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="nip">NIP</label>
                      <input type="text" id="nip" name="nip" onkeypress="return inputAngka(event)" value="<?php echo e(Auth::user()->guru(Auth::user()->id_card)->nip); ?>" class="form-control <?php $__errorArgs = ['nip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" disabled>
                  </div>
                  <div class="form-group">
                      <label for="jk">Jenis Kelamin</label>
                      <select id="jk" name="jk" class="select2bs4 form-control <?php $__errorArgs = ['jk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                          <option value="">-- Pilih Jenis Kelamin --</option>
                          <option value="L"
                              <?php if(Auth::user()->guru(Auth::user()->id_card)->jk == 'L'): ?>
                                  selected
                              <?php endif; ?>
                          >Laki-Laki</option>
                          <option value="P"
                              <?php if(Auth::user()->guru(Auth::user()->id_card)->jk == 'P'): ?>
                                  selected
                              <?php endif; ?>
                          >Perempuan</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="tgl_lahir">Tanggal Lahir</label>
                      <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?php echo e(Auth::user()->guru(Auth::user()->id_card)->tgl_lahir); ?>" class="form-control <?php $__errorArgs = ['tgl_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  </div>
                  <div class="form-group">
                      <label for="kode">Kode Jadwal</label>
                      <input type="text" id="kode" name="kode" class="form-control" value="<?php echo e(Auth::user()->guru(Auth::user()->id_card)->kode); ?>" disabled>
                  </div>
              </div>
            </div>
          <?php elseif(Auth::user()->role == "Siswa"): ?>
            <div class="row" name="role" value="<?php echo e(Auth::user()->siswa(Auth::user()->no_induk)->role); ?>">
              <input type="hidden">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="no_induk">Nomor Induk</label>
                      <input type="text" id="no_induk" name="no_induk" value="<?php echo e(Auth::user()->siswa(Auth::user()->no_induk)->no_induk); ?>" class="form-control" disabled>
                  </div>
                  <div class="form-group">
                      <label for="name">Nama Siswa</label>
                      <input type="text" id="name" name="name" value="<?php echo e(Auth::user()->name); ?>" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  </div>
                  <div class="form-group">
                      <label for="jk">Jenis Kelamin</label>
                      <select id="jk" name="jk" class="select2bs4 form-control <?php $__errorArgs = ['jk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                          <option value="">-- Pilih Jenis Kelamin --</option>
                          <option value="L"
                              <?php if(Auth::user()->siswa(Auth::user()->no_induk)->jk == 'L'): ?>
                                  selected
                              <?php endif; ?>
                          >Laki-Laki</option>
                          <option value="P"
                              <?php if(Auth::user()->siswa(Auth::user()->no_induk)->jk == 'P'): ?>
                                  selected
                              <?php endif; ?>
                          >Perempuan</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="tmp_lahir">Tempat Lahir</label>
                      <input type="text" id="tmp_lahir" name="tmp_lahir" value="<?php echo e(Auth::user()->siswa(Auth::user()->no_induk)->tmp_lahir); ?>" class="form-control <?php $__errorArgs = ['tmp_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="nis">NIS</label>
                      <input type="text" id="nis" name="nis" onkeypress="return inputAngka(event)" value="<?php echo e(Auth::user()->siswa(Auth::user()->no_induk)->nis); ?>" class="form-control <?php $__errorArgs = ['nis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  </div>
                  <div class="form-group">
                      <label for="kelas_id">Kelas</label>
                      <select id="kelas_id" name="kelas_id" class="select2bs4 form-control <?php $__errorArgs = ['kelas_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                          <option value="">-- Pilih Kelas --</option>
                          <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($data->id); ?>"
                                  <?php if(Auth::user()->siswa(Auth::user()->no_induk)->kelas_id == $data->id): ?>
                                      selected
                                  <?php endif; ?>
                              ><?php echo e($data->nama_kelas); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="telp">Nomor Telpon/HP</label>
                      <input type="text" id="telp" name="telp" value="<?php echo e(Auth::user()->siswa(Auth::user()->no_induk)->telp); ?>" onkeypress="return inputAngka(event)" class="form-control <?php $__errorArgs = ['telp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  </div>
                  <div class="form-group">
                      <label for="tgl_lahir">Tanggal Lahir</label>
                      <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?php echo e(Auth::user()->siswa(Auth::user()->no_induk)->tgl_lahir); ?>" class="form-control <?php $__errorArgs = ['tgl_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  </div>
              </div>
            </div>
          <?php else: ?>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="name">Username</label>
                  <input id="name" type="text" value="<?php echo e(Auth::user()->name); ?>" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" autocomplete="off">
                </div>
              </div>
            </div>
          <?php endif; ?>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="#" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
          <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Simpan</button>
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
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\akademik\resources\views/user/profile.blade.php ENDPATH**/ ?>