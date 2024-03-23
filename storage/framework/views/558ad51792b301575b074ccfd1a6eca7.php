

<?php $__env->startSection('container'); ?>
    <div class="min-h-screen h-full">
        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($p->id): ?>
                <div class="flex flex-col justify-start items-start min-h-screen mx-[100px] mt-[150px]">
                    <h1 class="text-4xl text-[#333333] font-bold"><?php echo e($p->title); ?></h1>
                    <img src="images/berita-1.jpeg" alt="">
                    <div class="grid grid-cols-3 gap-10">
                    <p class="text-lg text-[#333] font-normal mt-5"><?php echo e($p->body); ?></p>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->stopSection(); ?>
</div>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\info-denpasar\resources\views//post.blade.php ENDPATH**/ ?>