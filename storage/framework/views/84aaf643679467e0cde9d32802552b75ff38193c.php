test<br>

<?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($value->id); ?><br>
<?php echo e($value->text); ?><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php /**PATH C:\xampp\htdocs\udemy\task_test\resources\views/tests/test.blade.php ENDPATH**/ ?>