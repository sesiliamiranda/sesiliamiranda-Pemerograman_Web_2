

<?php $__env->startSection('container'); ?>

<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>


<table class="table">
    <h2><b>WEBSITE OBAT</b></h2>
    <p class="about" style=" margin-top: 30px; margin-bottom: 1rem; width: 900px; text-align: justify; font-size: 18px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Website berikut merupakan sebuah website yang dapat digunakan untuk menyimpan nama nama obat beserta 
        jenis obatnya, yang mana data dari obat tersebut bisa ditambahkan, diedit dan dihapus sesuai dengan
         keinginan pengguna, tetapi pada website ini yang bisa melakukan CRUD hanyalah user yang identifikasi 
         sebagai seorang admin. </p>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tugas4\resources\views/about.blade.php ENDPATH**/ ?>