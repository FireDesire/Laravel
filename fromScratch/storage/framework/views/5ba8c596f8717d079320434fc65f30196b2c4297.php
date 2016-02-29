

<?php $__env->startSection('content'); ?>
     <h1><?php echo e($card->title); ?></h1>
     <?php foreach($card->notes as $note): ?>
         <ul>
          <li> <?php echo e($note->body); ?>

             <a href="#" style="float: none;"> <?php echo e($note->user->username); ?></a>
          </li>
         </ul>
     <?php endforeach; ?>

     <hr>
     <h3> Add a New Note</h3>

     <form method="POST" action="/cards/<?php echo e($card->id); ?>/notes">
         <textarea name="body"></textarea>

         <div>
             <button type="submit"> Add Note</button>
         </div>
     </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>