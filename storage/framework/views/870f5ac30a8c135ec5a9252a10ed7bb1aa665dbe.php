<?php $__env->startSection('heading'); ?>
  Data Guru <?php echo e($mapel->nama_mapel); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active"><a href="<?php echo e(route('guru.index')); ?>">Guru</a></li>
  <li class="breadcrumb-item active"><?php echo e($mapel->nama_mapel); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <a href="<?php echo e(route('guru.index')); ?>" class="btn btn-default btn-sm"><i class="nav-icon fas fa-arrow-left"></i> &nbsp; Kembali</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Id Card</th>
                    <th>NIP</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($data->nama_guru); ?></td>
                    <td><?php echo e($data->id_card); ?></td>
                    <td><?php echo e($data->nip); ?></td>
                    <td>
                        <a href="<?php echo e(asset($data->foto)); ?>" data-toggle="lightbox" data-title="Foto <?php echo e($data->nama_guru); ?>" data-gallery="gallery" data-footer='<a href="<?php echo e(route('guru.ubah-foto', Crypt::encrypt($data->id))); ?>" id="linkFotoGuru" class="btn btn-link btn-block btn-light"><i class="nav-icon fas fa-file-upload"></i> &nbsp; Ubah Foto</a>'>
                            <img src="<?php echo e(asset($data->foto)); ?>" width="130px" class="img-fluid mb-2">
                        </a>
                        
                    </td>
                    <td>
                        <form action="<?php echo e(route('guru.destroy', $data->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <a href="<?php echo e(route('guru.show', Crypt::encrypt($data->id))); ?>" class="btn btn-info btn-sm mt-2"><i class="nav-icon fas fa-id-card"></i> &nbsp; Detail</a>
                            <a href="<?php echo e(route('guru.edit', Crypt::encrypt($data->id))); ?>" class="btn btn-success btn-sm mt-2"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
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
        $("#DataGuru").addClass("active");
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\akademik\resources\views/admin/guru/show.blade.php ENDPATH**/ ?>