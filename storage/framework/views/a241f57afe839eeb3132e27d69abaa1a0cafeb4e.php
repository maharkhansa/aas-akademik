<?php $__env->startSection('heading'); ?>
  Data Siswa <?php echo e($kelas->nama_kelas); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active"><a href="<?php echo e(route('siswa.index')); ?>">Siswa</a></li>
  <li class="breadcrumb-item active"><?php echo e($kelas->nama_kelas); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <a href="<?php echo e(route('siswa.index')); ?>" class="btn btn-default btn-sm"><i class="nav-icon fas fa-arrow-left"></i> &nbsp; Kembali</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Siswa</th>
                    <th>No Induk</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($data->nama_siswa); ?></td>
                        <td><?php echo e($data->no_induk); ?></td>
                        <td>
                            <a href="<?php echo e(asset($data->foto)); ?>" data-toggle="lightbox" data-title="Foto <?php echo e($data->nama_siswa); ?>" data-gallery="gallery" data-footer='<a href="<?php echo e(route('siswa.ubah-foto', Crypt::encrypt($data->id))); ?>" id="linkFotoGuru" class="btn btn-link btn-block btn-light"><i class="nav-icon fas fa-file-upload"></i> &nbsp; Ubah Foto</a>'>
                                <img src="<?php echo e(asset($data->foto)); ?>" width="130px" class="img-fluid mb-2">
                            </a>
                            
                        </td>
                        <td>
                            <form action="<?php echo e(route('siswa.destroy', $data->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <a href="<?php echo e(route('siswa.show', Crypt::encrypt($data->id))); ?>" class="btn btn-info btn-sm mt-2"><i class="nav-icon fas fa-id-card"></i> &nbsp; Detail</a>
                                <a href="<?php echo e(route('siswa.edit', Crypt::encrypt($data->id))); ?>" class="btn btn-success btn-sm mt-2"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
                                <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
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
        $("#DataSiswa").addClass("active");
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\akademik\resources\views/admin/siswa/show.blade.php ENDPATH**/ ?>