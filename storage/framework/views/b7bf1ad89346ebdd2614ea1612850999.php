<?php $__env->startSection('content'); ?>
<div class="col-10"><div class="table-responsive border p-3 rounded-3">
    <table class="table table-bordered table-hover table-striped mb-0 bg-white">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Deskripsi Barang</th>
                <th>Satuan Barang</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($barang->kode); ?></td>
                <td><?php echo e($barang->nama); ?></td>
                <td><?php echo e($barang->harga); ?></td>
                <td><?php echo e($barang->deskripsi); ?> </td>
                <td><?php echo e($barang->satuan); ?> </td>
                <td>
                    <div class="d-flex">
                        <a href="<?php echo e(route('barang.edit', ['barang' => $barang->id])); ?>" class="btn btn-outline-primary btn-sm me-2"><i class="bi-pencil-square"></i>Edit</a>
                        <form action="<?php echo e(route('barang.destroy', ['barang' => $barang->id])); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" class="btn btn-outline-danger btn-sm me-3"><i class="bi-trash ">Delete</i></button>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ALBAR\Mata Kuliah\Framework\UTS\masterBarangUts\resources\views/barang/index.blade.php ENDPATH**/ ?>