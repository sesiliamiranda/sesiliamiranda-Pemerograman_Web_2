

<?php $__env->startSection('container'); ?>


<table class="table">
    <div class="row g-3" style="min-height: 100px">
        <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card shadow-sm" style="width: 200px" >
                    <div class="card-body" >
                        <p style="text-align: center; font-size:20px; font-weight:700"><?php echo e($item->nama); ?></p>
                        <p style="text-align: justify">Jenis Obat <?php echo e($item->jenis); ?></p>
                    </div>  
                </div>
            </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div> 
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tugas4\resources\views/obat_user.blade.php ENDPATH**/ ?>