

<?php $__env->startSection('container'); ?>
<div class="flex justify-center items-center min-h-screen mx-[5%] gap-[50px] overflow-x-hidden">
    <div class="w-[45%] mt-[150px]">
        <img src="https://picsum.photos/700/400" alt="" class="mb-[20px] rounded-[20px]">
    </div>
    <div class="flex flex-col justify-start items-start mt-[150px] w-[45%]">
        <h1 class="text-4xl text-[#333333] font-bold"><?php echo e($post->title); ?></h1>
        <p class="text-lg text-[#333] font-normal mt-5"><?php echo e($post->body); ?></p>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\info-denpasar\resources\views/singlepost.blade.php ENDPATH**/ ?>