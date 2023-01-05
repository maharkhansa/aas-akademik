<?php $__env->startSection('heading', 'Profile'); ?>
<?php $__env->startSection('page'); ?>
  <li class="breadcrumb-item active">User Profile</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="row">
        <div class="col-5">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                    <?php if(Auth::user()->role == 'Guru'): ?>
                        <a href="<?php echo e(asset(Auth::user()->guru(Auth::user()->id_card)->foto)); ?>" data-toggle="lightbox" data-title="Foto <?php echo e(Auth::user()->name); ?>" data-gallery="gallery" data-footer='<a href="<?php echo e(route('pengaturan.edit-foto')); ?>" id="linkFotoGuru" class="btn btn-link btn-block btn-light"><i class="nav-icon fas fa-file-upload"></i> &nbsp; Ubah Foto</a>'>
                            <img src="<?php echo e(asset(Auth::user()->guru(Auth::user()->id_card)->foto)); ?>" width="130px" class="profile-user-img img-fluid img-circle" alt="User profile picture">
                        </a>
                    <?php elseif(Auth::user()->role == 'Siswa'): ?>
                        <a href="<?php echo e(asset(Auth::user()->siswa(Auth::user()->no_induk)->foto)); ?>" data-toggle="lightbox" data-title="Foto <?php echo e(Auth::user()->name); ?>" data-gallery="gallery" data-footer='<a href="<?php echo e(route('pengaturan.edit-foto')); ?>" id="linkFotoGuru" class="btn btn-link btn-block btn-light"><i class="nav-icon fas fa-file-upload"></i> &nbsp; Ubah Foto</a>'>
                            <img src="<?php echo e(asset(Auth::user()->siswa(Auth::user()->no_induk)->foto)); ?>" width="130px" class="profile-user-img img-fluid img-circle" alt="User profile picture">
                        </a>
                    <?php else: ?>
                        <img class="profile-user-img img-fluid img-circle" src="<?php echo e(asset('img/male.jpg')); ?>" alt="User profile picture">
                    <?php endif; ?>
                    </div>
                    <h3 class="profile-username text-center"><?php echo e(Auth::user()->name); ?></h3>
                    <p class="text-muted text-center"><?php echo e(Auth::user()->role); ?></p>
                    <?php if(Auth::user()->role == 'Guru'): ?>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Id Card</b> <a class="float-right"><?php echo e(Auth::user()->id_card); ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>NIP</b> <a class="float-right"><?php echo e(Auth::user()->guru(Auth::user()->id_card)->nip); ?></a>
                            </li>
                        </ul>
                    <?php elseif(Auth::user()->role == 'Siswa'): ?>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>No INduk</b> <a class="float-right"><?php echo e(Auth::user()->no_induk); ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>NIS</b> <a class="float-right"><?php echo e(Auth::user()->siswa(Auth::user()->no_induk)->nis); ?></a>
                            </li>
                        </ul>
                    <?php else: ?>
                    <?php endif; ?>
                    <a href="<?php echo e(route('pengaturan.profile')); ?>" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Pengaturan Akun</h3>
                </div>
                <div class="card-body">
                    <table class="table" style="margin-top: -21px;">
                    <tr>
                        <td width="50"><i class="nav-icon fas fa-envelope"></i></td>
                        <td>Ubah Email</td>
                        <td width="50"><a href="<?php echo e(route('pengaturan.email')); ?>" class="btn btn-default btn-sm">Edit</a></td>
                    </tr>
                    <tr>
                        <td width="50"><i class="nav-icon fas fa-key"></i></td>
                        <td>Ubah Password</td>
                        <td width="50"><a href="<?php echo e(route('pengaturan.password')); ?>" class="btn btn-default btn-sm">Edit</a></td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.col -->
        
        <div class="col-7">
            <!-- About Me Box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="far fa-envelope mr-1"></i> Email</strong>
                    <p class="text-muted"><?php echo e(Auth::user()->email); ?></p>
                    <hr>

                    <?php if(Auth::user()->role == 'Guru'): ?>
                        <strong><i class="fas fa-book mr-1"></i> Guru Mapel</strong>
                        <p class="text-muted"><?php echo e(Auth::user()->guru(Auth::user()->id_card)->mapel->nama_mapel); ?></p>
                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i> Kode Jadwal</strong>
                        <p class="text-muted"><?php echo e(Auth::user()->guru(Auth::user()->id_card)->kode); ?></p>
                        <hr>
                    <?php elseif(Auth::user()->role == 'Siswa'): ?>
                        <strong><i class="fas fa-home mr-1"></i> Tempat Lahir</strong>
                        <p class="text-muted"><?php echo e(Auth::user()->siswa(Auth::user()->no_induk)->kelas->nama_kelas); ?></p>
                        <hr>
                    <?php else: ?>
                    <?php endif; ?>

                    <?php if(Auth::user()->role == 'Guru'): ?>
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Tempat Lahir</strong>
                        <p class="text-muted"><?php echo e(Auth::user()->guru(Auth::user()->id_card)->tmp_lahir); ?></p>
                        <hr>
                    <?php elseif(Auth::user()->role == 'Siswa'): ?>
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Tempat Lahir</strong>
                        <p class="text-muted"><?php echo e(Auth::user()->siswa(Auth::user()->no_induk)->tmp_lahir); ?></p>
                        <hr>
                    <?php else: ?>
                    <?php endif; ?>

                    <?php if(Auth::user()->role == 'Guru'): ?>
                        <strong><i class="far fa-calendar mr-1"></i> Tanggal Lahir</strong>
                        <p class="text-muted"><?php echo e(date('l, d F Y', strtotime(Auth::user()->guru(Auth::user()->id_card)->tgl_lahir))); ?></p>
                        <hr>
                    <?php elseif(Auth::user()->role == 'Siswa'): ?>
                        <strong><i class="far fa-calendar mr-1"></i> Tanggal Lahir</strong>
                        <p class="text-muted"><?php echo e(date('l, d F Y', strtotime(Auth::user()->siswa(Auth::user()->no_induk)->tgl_lahir))); ?></p>
                        <hr>
                    <?php else: ?>
                    <?php endif; ?>

                    <?php if(Auth::user()->role == 'Guru'): ?>
                        <strong><i class="fas fa-phone mr-1"></i> No Telepon</strong>
                        <p class="text-muted"><?php echo e(Auth::user()->guru(Auth::user()->id_card)->telp); ?></p>
                    <?php elseif(Auth::user()->role == 'Siswa'): ?>
                        <strong><i class="fas fa-phone mr-1"></i> No Telepon</strong>
                        <p class="text-muted"><?php echo e(Auth::user()->siswa(Auth::user()->no_induk)->telp); ?></p>
                    <?php else: ?>
                    <?php endif; ?>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\akademik\resources\views/user/pengaturan.blade.php ENDPATH**/ ?>