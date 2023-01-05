<?php $__env->startSection('heading', 'Dashboard'); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active">Dashboard</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12" id="load_content">
      <div class="card card-primary">
        <div class="card-body">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Jam Pelajaran</th>
                    <th>Mata Pelajaran</th>
                    <th>Kelas</th>
                    <th>Ruang Kelas</th>
                    <th>Ket.</th>
                  </tr>
                </thead>
                <tbody id="data-jadwal">
                    <?php
                      $hari = date('w');
                      $jam = date('H:i');
                    ?>
                    <?php if( $jadwal->count() > 0 ): ?>
                      <?php if(
                        $hari == '1' && $jam >= '09:45' && $jam <= '10:15' ||
                        $hari == '1' && $jam >= '12:30' && $jam <= '13:15' ||
                        $hari == '2' && $jam >= '09:15' && $jam <= '09:45' ||
                        $hari == '2' && $jam >= '12:00' && $jam <= '13:00' ||
                        $hari == '3' && $jam >= '09:15' && $jam <= '09:45' ||
                        $hari == '3' && $jam >= '12:00' && $jam <= '13:00' ||
                        $hari == '4' && $jam >= '09:15' && $jam <= '09:45' ||
                        $hari == '4' && $jam >= '12:00' && $jam <= '13:00' ||
                        $hari == '5' && $jam >= '09:00' && $jam <= '09:15' ||
                        $hari == '5' && $jam >= '11:15' && $jam <= '13:00'
                      ): ?>
                      <tr>
                        <td colspan='5' style='background:#fff;text-align:center;font-weight:bold;font-size:18px;'>Waktunya Istirahat!</td>
                      </tr>
                      <?php else: ?>
                      <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($data->jam_mulai.' - '.$data->jam_selesai); ?></td>
                          <td>
                              <h5 class="card-title"><?php echo e($data->mapel->nama_mapel); ?></h5>
                              <p class="card-text"><small class="text-muted"><?php echo e($data->guru->nama_guru); ?></small></p>
                          </td>
                          <td><?php echo e($data->kelas->nama_kelas); ?></td>
                          <td><?php echo e($data->ruang->nama_ruang); ?></td>
                          <td>
                            <?php if($data->absen($data->guru_id)): ?>
                              <div style="margin-left:20px;width:30px;height:30px;background:#<?php echo e($data->absen($data->guru_id)); ?>"></div>
                            <?php elseif(date('H:i:s') >= '09:00:00'): ?>
                              <div style="margin-left:20px;width:30px;height:30px;background:#F00"></div>
                            <?php else: ?>
                            <?php endif; ?>
                          </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                  <?php elseif($jam <= '07:00'): ?>
                    <tr>
                      <td colspan='5' style='background:#fff;text-align:center;font-weight:bold;font-size:18px;'>Jam Pelajaran Hari ini Akan Segera Dimulai!</td>
                    </tr>
                <?php elseif(
                  $hari == '1' && $jam >= '16:15' ||
                  $hari == '2' && $jam >= '16:00' ||
                  $hari == '3' && $jam >= '16:00' ||
                  $hari == '4' && $jam >= '16:00' ||
                  $hari == '5' && $jam >= '15:40'
                ): ?>
                  <tr>
                    <td colspan='5' style='background:#fff;text-align:center;font-weight:bold;font-size:18px;'>Jam Pelajaran Hari ini Sudah Selesai!</td>
                  </tr>
                <?php elseif($hari == '0' || $hari == '6'): ?>
                  <tr>
                    <td colspan='5' style='background:#fff;text-align:center;font-weight:bold;font-size:18px;'>Sekalah Libur!</td>
                  </tr>
                <?php elseif($hari == '1' && $jam >= '07:00' && $jam <= '07:30'): ?>
                  <tr>
                    <td colspan='5' style='background:#fff;text-align:center;font-weight:bold;font-size:18px;'>Waktunya Upacara Bendera!</td>
                  </tr>
                <?php else: ?>
                  <tr>
                    <td colspan='5' style='background:#fff;text-align:center;font-weight:bold;font-size:18px;'>Tidak Ada Data Jadwal!</td>
                  </tr>
                <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card card-warning" style="min-height: 385px;">
        <div class="card-header">
          <h3 class="card-title" style="color: white;">
            Pengumuman
          </h3>
        </div>
        <div class="card-body">
          <div class="tab-content p-0">
            <?php echo $pengumuman->isi; ?>

          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            Keterangan :
          </h3>
        </div>
        <div class="card-body">
          <div class="tab-content p-0">
            <table class="table" style="margin-top: -21px; margin-bottom: -10px;">
              <?php $__currentLoopData = $kehadiran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td>
                    <div style="width:30px;height:30px;background:#<?php echo e($data->color); ?>"></div>
                  </td>
                  <td>:</td>
                  <td><?php echo e($data->ket); ?></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
      $(document).ready(function () {
        setInterval(function() {
          var date = new Date();
          var hari = date.getDay();
          var h = date.getHours();
          var m = date.getMinutes();
          h = (h < 10) ? "0" + h : h;
          m = (m < 10) ? "0" + m : m;
          var jam = h + ":" + m;
          
          if (hari == '0' || hari == '6') {
            $("#data-jadwal").html(
              `<tr>
                <td colspan='5' style='background:#fff;text-align:center;font-weight:bold;font-size:18px;'>Sekalah Libur!</td>
              </tr>`
            );
          } else {
            if (jam <= '07:00') {
              $("#data-jadwal").html(
                `<tr>
                  <td colspan='5' style='background:#fff;text-align:center;font-weight:bold;font-size:18px;'>Jam Pelajaran Hari ini Akan Segera Dimulai!</td>
                </tr>`
              );
            } else if (
              hari == '1' && jam >= '16:15' ||
              hari == '2' && jam >= '16:00' ||
              hari == '3' && jam >= '16:00' ||
              hari == '4' && jam >= '16:00' ||
              hari == '5' && jam >= '15:40'
            ) {
              $("#data-jadwal").html(
                `<tr>
                  <td colspan='5' style='background:#fff;text-align:center;font-weight:bold;font-size:18px;'>Jam Pelajaran Hari ini Sudah Selesai!</td>
                </tr>`
              );
            } else {
              if (
                hari == '1' && jam >= '09:45' && jam <= '10:15' ||
                hari == '1' && jam >= '12:30' && jam <= '13:15' ||
                hari == '2' && jam >= '09:15' && jam <= '09:45' ||
                hari == '2' && jam >= '12:00' && jam <= '13:00' ||
                hari == '3' && jam >= '09:15' && jam <= '09:45' ||
                hari == '3' && jam >= '12:00' && jam <= '13:00' ||
                hari == '4' && jam >= '09:15' && jam <= '09:45' ||
                hari == '4' && jam >= '12:00' && jam <= '13:00' ||
                hari == '5' && jam >= '09:00' && jam <= '09:15' ||
                hari == '5' && jam >= '11:15' && jam <= '13:00'
              ) {
                $("#data-jadwal").html(
                  `<tr>
                    <td colspan='5' style='background:#fff;text-align:center;font-weight:bold;font-size:18px;'>Waktunya Istirahat!</td>
                  </tr>`
                );
              } else if (hari == '1' && jam >= '07:00' && jam <= '07:30') {
                $("#data-jadwal").html(
                  `<tr>
                    <td colspan='5' style='background:#fff;text-align:center;font-weight:bold;font-size:18px;'>Waktunya Upacara Bendera!</td>
                  </tr>`
                );
              } else {
                $.ajax({
                  type:"GET",
                  data: {
                    hari : hari,
                    jam : jam
                  },
                  dataType:"JSON",
                  url:"<?php echo e(url('/jadwal/sekarang')); ?>",
                  success:function(data){
                    var html = "";
                    $.each(data, function (index, val) {
                        html += "<tr>";
                          html += "<td>" + val.jam_mulai + ' - ' + val.jam_selesai + "</td>";
                          html += "<td><h5 class='card-title'>" + val.mapel + "</h5><p class='card-text'><small class='text-muted'>" + val.guru + "</small></p></td>";
                          html += "<td>" + val.kelas + "</td>";
                          html += "<td>" + val.ruang + "</td>";
                          if (val.ket != null) {
                            html += "<td><div style='margin-left:20px;width:30px;height:30px;background:#"+val.ket+"'></div></td>";
                          } else {
                            html += "<td></td>";
                          }
                        html += "</tr>";
                    });
                    $("#data-jadwal").html(html);
                  },
                  error:function(){
                  }
                });
              }
            }
          }
        }, 60 * 1000);
      });
      
      $("#Dashboard").addClass("active");
      $("#liDashboard").addClass("menu-open");
      $("#Home").addClass("active");
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\akademik\resources\views/home.blade.php ENDPATH**/ ?>