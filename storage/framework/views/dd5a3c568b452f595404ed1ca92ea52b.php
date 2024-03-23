

<?php $__env->startSection('container'); ?>
<section class="tourism" id="tourism">
    <h1 class="mt-[150px] mb-[70px] text-5xl font-bold">Wisata di Denpasar</h1>
    <div class="icon-wrapper">
      <div class="icon-content">
        <div class="circle"><img src="images/budaya.png" alt="" /></div>
        <h3 class="text-lg font-medium">Wisata Budaya</h3>
      </div>
      <div class="icon-content">
        <div class="circle"><img src="images/religi.png" alt="" /></div>
        <h3 class="text-lg font-medium">Wisata Religi</h3>
      </div>
      <div class="icon-content">
        <div class="circle"><img src="images/alam.png" alt="" /></div>
        <h3 class="text-lg font-medium">Wisata Alam</h3>
      </div>
      <div class="icon-content">
        <div class="circle"><img src="images/sejarah.png" alt="" /></div>
        <h3 class="text-lg font-medium">Wisata Sejarah</h3>
      </div>
      <div class="icon-content">
        <div class="circle"><img src="images/kuliner.png" alt="" /></div>
        <h3 class="text-lg font-medium">Wisata Kuliner</h3>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\info-denpasar\resources\views/tourism.blade.php ENDPATH**/ ?>