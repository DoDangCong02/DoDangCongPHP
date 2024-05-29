<?php $__env->startSection('Content'); ?>
<?php if(session('Note')): ?>
<div class="alert alert-success">
    <?php echo e(session('Note')); ?>

</div>
<?php endif; ?>
<table>
    <tbody>
        <thead>
            <tr>
                <th class=\"text-center\">PID</th>
                <th class=\"text-center\">Name</th>
                <th class=\"text-center\">Company</th>
                <th class=\"text-center\">Year</th>
                <th class=\"text-center\">Band</th>
                <th class=\"text-center\">Image</th>
                <th class=\"text-center\">Edit</th>
                <th class=\"text-center\">Delete</th>
            </tr>
        </thead>
    </tbody>
</table>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td class=\"text-left\"><?php echo e($product->pid); ?></td>
    <td class=\"text-left\"><?php echo e($product->pname); ?></td>
    <td class=\"text-left\"><?php echo e($product->company); ?></td>
    <td class=\"text-left\"><?php echo e($product->year); ?></td>
    <td class=\"text-left\"><?php echo e($product->band); ?></td>
    <td class="text-left">
        <img src="<?php echo e($product->pimage); ?>" alt="Image">
    </td>
    <td class="text-center">
        <a href="updateProduct/<?php echo e($product->pid); ?>">
                <i class="fa fa-pencil fa-fw"></i>Edit
        </a>
    </td>
    <td class="text-center">
        <a href="deleteProduct/<?php echo e($product->pid); ?>">
            <i class="fa fa-trash-o fa-fw"></i>Delete
        </a>
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\DoDangCong\resources\views/admin/product/getProducts.blade.php ENDPATH**/ ?>