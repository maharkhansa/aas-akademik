<?php $__env->startSection('heading', 'Nilai Sikap'); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active">Nilai Sikap</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Nilai Sikap</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <table id="example1" class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Kelas</th>
                  <th>Aksi</th>
              </thead>
              <tbody>
                <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($data->nama_kelas); ?></td>
                    <td><a href="<?php echo e(route('sikap-siswa', Crypt::encrypt($data->id))); ?>" class="btn btn-info btn-sm"><i class="nav-icon fas fa-search-plus"></i> &nbsp; Ditails</a></td>
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
      $("#Sikap").addClass("active");
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\akademik\resources\views/admin/sikap/home.blade.php ENDPATH**/ ?>