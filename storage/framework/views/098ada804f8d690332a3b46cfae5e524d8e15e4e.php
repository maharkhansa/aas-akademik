<?php $__env->startSection('heading', 'Nilai Ulangan'); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active"><a href="<?php echo e(route('ulangan-kelas')); ?>">Nilai Ulangan</a></li>
  <li class="breadcrumb-item active"><?php echo e($kelas->nama_kelas); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
            <a href="<?php echo e(route('ulangan-kelas')); ?>" class="btn btn-default btn-sm"><i class="nav-icon fas fa-arrow-left"></i> &nbsp; Kembali</a>
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <table id="example1" class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Siswa</th>
                  <th>No. Induk</th>
                  <th>Aksi</th>
              </thead>
              <tbody>
                <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($data->nama_siswa); ?></td>
                    <td><?php echo e($data->no_induk); ?></td>
                    <td><a href="<?php echo e(route('ulangan-show', Crypt::encrypt($data->id))); ?>" class="btn btn-info btn-sm"><i class="nav-icon fas fa-search-plus"></i> &nbsp; Show Ulangan</a></td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $("#Nilai").addClass("active");
        $("#liNilai").addClass("menu-open");
        $("#Ulangan").addClass("active");
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\akademik\resources\views/admin/ulangan/index.blade.php ENDPATH**/ ?>