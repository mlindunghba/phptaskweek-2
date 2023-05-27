
<link rel="stylesheet" href="<?php echo e(url('assets/bootstrap/css/bootstrap.min.css')); ?>">

<?php if(session('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success.</strong> 
  <?php echo session('success'); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>

<?php if(session('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error.</strong> 
  <?php echo session('error'); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>

<?php if(session('info')): ?>
<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Info.</strong> 
  <?php echo session('error'); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>

<?php if(count($errors) > 0): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Warning.</strong> 
  <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li> <?php echo e($error); ?> </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?><?php /**PATH C:\Users\Neuron-NB163\Documents\Neuron\Training-JunProg\taskweek-2\resources\views/layouts/feedback.blade.php ENDPATH**/ ?>