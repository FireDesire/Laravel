<?php $__env->startSection('content'); ?>
    <h1>Edit Note</h1>

    <form method="POST" action="/notes/<?php echo e($note->id); ?>">

        <?php echo e(method_field('PATCH')); ?>


        <textarea name="body"><?php echo e($note->body); ?></textarea>

        <div>
            <button type="submit">Update Note</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>