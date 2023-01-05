<?php $__env->startSection('heading', 'Data Nilai'); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active">Data Nilai</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php
    $no = 1;
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Kode Mapel</th>
                <th rowspan="2">Guru Mata Pelajaran</th>
                <th rowspan="2">KKM</th>
                <th colspan="4" class="text-center">Predikat</th>
              </tr>
              <tr>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($data->kode); ?></td>
                  <td>
                      <h5 class="card-title"><?php echo e($data->mapel->nama_mapel); ?></h5>
                      <p class="card-text"><small class="text-muted"><?php echo e($data->nama_guru); ?></small></p>
                  </td>
                  <?php if($data->dsk($data->id)): ?>
                    <td><?php echo e($data->dsk($data->id)->kkm); ?></td>
                    <td><?php echo e($data->dsk($data->id)->deskripsi_a); ?></td>
                    <td><?php echo e($data->dsk($data->id)->deskripsi_b); ?></td>
                    <td><?php echo e($data->dsk($data->id)->deskripsi_c); ?></td>
                    <td><?php echo e($data->dsk($data->id)->deskripsi_d); ?></td>
                  <?php else: ?>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  <?php endif; ?>
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
        $("#Nilai").addClass("active");
        $("#liNilai").addClass("menu-open");
        $("#Deskripsi").addClass("active");
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\akademik\resources\views/admin/nilai/index.blade.php ENDPATH**/ ?>