<?php $__env->startSection('content'); ?>
     <h1><?php echo e($card->title); ?></h1>
     <?php foreach($card->notes as $note): ?>
          <li> <?php echo e($note->body); ?></li>
     <?php endforeach; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>