<?php $__env->startSection('heading', 'Trash Jawdal'); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active">Trash Jawdal</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Trash Data Jawdal</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Hari</th>
                    <th>Jadwal</th>
                    <th>Kelas</th>
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
                    <td><?php echo e($data->kelas->nama_kelas); ?></td>
                    <td><?php echo e($data->jam_mulai); ?> - <?php echo e($data->jam_selesai); ?></td>
                    <td><?php echo e($data->ruang->nama_ruang); ?></td>
                    <td>
                        <form action="<?php echo e(route('jadwal.kill', $data->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <a href="<?php echo e(route('jadwal.restore', Crypt::encrypt($data->id))); ?>" class="btn btn-success btn-sm mt-2"><i class="nav-icon fas fa-undo"></i> &nbsp; Restore</a>
                            <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $("#ViewTrash").addClass("active");
        $("#liViewTrash").addClass("menu-open");
        $("#TrashJadwal").addClass("active");
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\akademik\resources\views/admin/jadwal/trash.blade.php ENDPATH**/ ?>