

<?php $__env->startSection('container'); ?>

<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<a href="<?php echo e(route('obat.create')); ?>" class="btn btn-success">Tambah Data</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
        ?>

        <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($no); ?></th>
            <td><?php echo e($item->nama); ?></td>
            <td><?php echo e($item->jenis); ?></td>
            <td>
                <a href="<?php echo e(route('obat.edit', $item->id)); ?>" class="btn btn-primary">Edit</a>
                <form action="<?php echo e(route('obat.destroy',$item->id)); ?>" method="POST" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger" onclick="confirm('Anda yakin akan meenghapus data ini?')">Hapus</button>
               </form>
            </td>
        </tr>
        <?php
            $no++;
        ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tugas4\resources\views/obat.blade.php ENDPATH**/ ?>