<?php $__env->startSection('header'); ?>

    <h1>You are most welcome</h1>

    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php foreach($people as $person): ?>
    <li><?php echo e($person); ?></li>
    <?php endforeach; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <script>
        alert('welcome page');
    </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>