

<?php $__env->startSection('container'); ?>

    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="text-[#333333]">
        <h2><a href="/news/<?php echo e($new->id); ?>"><?php echo e($new->title); ?></a></h2>
        <p><?php echo e($new->excerpt); ?></p>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\info-denpasar\resources\views/news.blade.php ENDPATH**/ ?>