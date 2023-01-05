<?php $__env->startSection('heading'); ?>
  Data User <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($d); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active"><a href="<?php echo e(route('user.index')); ?>">User</a></li>
  <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="breadcrumb-item active"><?php echo e($d); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <a href="<?php echo e(route('user.index')); ?>" class="btn btn-default btn-sm"><i class="nav-icon fas fa-arrow-left"></i> &nbsp; Kembali</a>
        </h3>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Email</th>
                <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($d == 'Guru'): ?>
                    <th>No Id Card</th>
                  <?php elseif($d == 'Siswa'): ?>
                    <th>No Induk Siswa</th>
                  <?php else: ?>
                      
                  <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php if($user->count() > 0): ?>
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td class="text-capitalize"><?php echo e($data->name); ?></td>
                <td><?php echo e($data->email); ?></td>
                <?php if($data->role == 'Siswa'): ?>
                  <td><?php echo e($data->no_induk); ?></td>
                <?php elseif($data->role == 'Guru'): ?>
                  <td><?php echo e($data->id_card); ?></td>
                <?php else: ?>
                <?php endif; ?>
                
                <td>
                  <form action="<?php echo e(route('user.destroy', $data->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php else: ?>
            <tr>
              <td colspan='5' style='background:#fff;text-align:center;font-weight:bold;font-size:18px;'>Silahkan Buat Akun Terlebih Dahulu!</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#DataUser").addClass("active");
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Sistem-Informasi-Akademik-Sekolah-Laravel\resources\views/admin/user/show.blade.php ENDPATH**/ ?>