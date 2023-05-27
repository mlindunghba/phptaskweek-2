
<?php $__env->startSection('title', 'Data Mahasiswa'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="col-8" style="padding-top: 20px;">
        <?php echo $__env->make('layouts.feedback', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <form action="<?php echo e(route('mahasiswa.search')); ?>" method="post" class="col-12 row">
            <?php echo csrf_field(); ?>
            <div class="col-2">
                <p>Cari Berdasarkan Nama</p>
            </div>
            <div class="col-8">
                <input type="text" name="search" class="form-control">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-info">Search</button>
            </div>
        </form>
        <div class="col-12">
            <a href="<?php echo e(url('mahasiswa/create')); ?>" class="btn btn-success">Tambah Mahasiswa</a>
        </div>
        <table class="table table-default table-bordered">
            <thead class="bg-success">
                <th>#</th>
                <th>NPM/NIM</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </thead>
            <?php ($i = 1); ?>
            <?php $__currentLoopData = $mhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <td><?php echo e($i++); ?></td>
                <td><?php echo e($m->nim); ?></td>
                <td><?php echo e($m->nama_lengkap); ?></td>
                <td><?php echo e($m->kelas); ?></td>
                <td><?php echo e($m->jurusan); ?></td>
                <td>
                    <a href="<?php echo e(route('mahasiswa.edit', $m->id)); ?>" class="btn btn-warning">Edit</a>
                    <a href="<?php echo e(route('mahasiswa.delete', $m->id)); ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <?php echo e($mhs->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Neuron-NB163\Documents\Neuron\Training-JunProg\taskweek-2\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>