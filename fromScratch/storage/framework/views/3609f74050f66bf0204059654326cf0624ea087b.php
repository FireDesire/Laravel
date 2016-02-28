<?php $__env->startSection('content'); ?>
    <h1> <?php echo e($person->name); ?> </h1>
    <?php /*<h1> <?php echo e($phone[0]->number); ?> </h1>*/ ?>
   <?php foreach($person->phones as $phone): ?>

           <?php echo e($phone->number); ?>


   <?php endforeach; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>