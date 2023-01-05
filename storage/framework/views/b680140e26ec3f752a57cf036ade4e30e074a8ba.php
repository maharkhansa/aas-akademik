<?php $__env->startSection('heading'); ?>
  Data Jadwal <?php echo e($kelas->nama_kelas); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active"><a href="<?php echo e(route('jadwal.index')); ?>">Jadwal</a></li>
  <li class="breadcrumb-item active"><?php echo e($kelas->nama_kelas); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <a href="<?php echo e(route('jadwal.index')); ?>" class="btn btn-default btn-sm"><i class="nav-icon fas fa-arrow-left"></i> &nbsp; Kembali</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Hari</th>
                    <th>Jadwal</th>
                    <th>Jam Pelajaran</th>
                    <th>Ruang Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($data->hari->nama_hari); ?></td>
                    <td>
                        <h5 class="card-title"><?php echo e($data->mapel->nama_mapel); ?></h5>
                        <p class="card-text"><small class="text-muted"><?php echo e($data->guru->nama_guru); ?></small></p>
                    </td>
                    <td><?php echo e($data->jam_mulai); ?> - <?php echo e($data->jam_selesai); ?></td>
                    <td><?php echo e($data->ruang->nama_ruang); ?></td>
                    <td>
                      <form action="<?php echo e(route('jadwal.destroy', $data->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <a href="<?php echo e(route('jadwal.edit',Crypt::encrypt($data->id))); ?>" class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
                        <button class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                      </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#DataJadwal").addClass("active");
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\akademik\resources\views/admin/jadwal/show.blade.php ENDPATH**/ ?>