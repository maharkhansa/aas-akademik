<?php $__env->startSection('heading', 'Trash Siswa'); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active">Trash Siswa</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Trash Data Siswa</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Siswa</th>
                    <th>Nomor Induk</th>
                    <th>Kelas</th>
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
                    <td><?php echo e($data->kelas->nama_kelas); ?></td>
                    <td>
                        <a href="<?php echo e(asset($data->foto)); ?>" data-toggle="lightbox" data-title="Foto <?php echo e($data->nama_siswa); ?>" data-gallery="gallery" data-footer='<a href="<?php echo e(route('siswa.ubah-foto', Crypt::encrypt($data->id))); ?>" id="linkFotoGuru" class="btn btn-link btn-block btn-light"><i class="nav-icon fas fa-file-upload"></i> &nbsp; Ubah Foto</a>'>
                            <img src="<?php echo e(asset($data->foto)); ?>" width="130px" class="img-fluid mb-2">
                        </a>
                        
                    </td>
                    <td>
                        <form action="<?php echo e(route('siswa.kill', $data->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <a href="<?php echo e(route('siswa.restore', Crypt::encrypt($data->id))); ?>" class="btn btn-success btn-sm mt-2"><i class="nav-icon fas fa-undo"></i> &nbsp; Restore</a>
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
        $("#TrashSiswa").addClass("active");
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\akademik\resources\views/admin/siswa/trash.blade.php ENDPATH**/ ?>