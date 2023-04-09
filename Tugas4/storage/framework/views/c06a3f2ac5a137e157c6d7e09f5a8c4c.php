

<?php $__env->startSection('container'); ?>

<h3 class="text-center"><b>Tambah Data Obat</b></h3>
    <div class="container "> 
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="<?php echo e(route('obat.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?> 
                    <div class="mb-3">
                        <label for="nama_input" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama_input" name="namaInput">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_input" class="form-label">jenis</label>
                        <input type="text" class="form-control" id="jenis_input" name="jenisInput">
                    </div>
                    <div class="row mx-2">
                        <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tugas4\resources\views/tambahObat.blade.php ENDPATH**/ ?>