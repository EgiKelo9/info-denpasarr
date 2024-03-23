

<?php $__env->startSection('container'); ?>
    <div class="flex flex-col justify-start items-start min-h-screen mx-[100px] mt-[150px]">
        <h1 class="text-4xl text-[#333333] font-bold">Berita Terkini</h1>
        <div class="grid grid-cols-3 gap-10">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex flex-col justify-start items-start text-[#333333] mt-10 min-h-[250px] h-full p-[15px] border-2 border-solid border-gray-700 rounded-[20px]">
                <img src="https://picsum.photos/500/300" alt="" class="mb-[20px] rounded-[10px]">
                <h2 class="text-2xl text-[#333] font-semibold"><a href="/news/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h2>
                <p class="text-lg text-[#333] font-normal mt-5"><?php echo e($post->excerpt); ?></p>
                <a href="/news/<?php echo e($post->id); ?>" class="text-lg text-sky-600 mt-auto bottom-5 items-center">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\info-denpasar\resources\views//posts.blade.php ENDPATH**/ ?>