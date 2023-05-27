
<?php $__env->startSection('title', empty($data)?'Tambah':'Edit'.' Mahasiswa - '.$data->nama_lengkap); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="col-8">
        <?php echo $__env->make('layouts.feedback', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <form action="<?php echo e(empty($data)?route('mahasiswa.store'):route('mahasiswa.update', $data->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php if(!empty($data)): ?>
            <?php echo method_field('PUT'); ?>
            <?php endif; ?>
            <div class="col-12">
                <a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-success">Lihat Data Mahasiswa</a>
            </div>
            <div class="col-12">
                <label for="nim">NPM / NIM</label>
                <input type="text" name="nim" class="form-control" value="<?php echo e(empty($data)?null:$data->nim); ?>" required>
            </div>
            <div class="col-12">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" value="<?php echo e(empty($data)?null:$data->nama_lengkap); ?>" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" value="<?php echo e(empty($data)?null:$data->kelas); ?>" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="npm_nip">Jurusan</label>
                <input type="text" name="jurusan" value="<?php echo e(empty($data)?null:$data->jurusan); ?>" class="form-control" required>
            </div>
            <div class="col-12">
                <br>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Neuron-NB163\Documents\Neuron\Training-JunProg\taskweek-2\resources\views/mahasiswa/form.blade.php ENDPATH**/ ?>