

<?php $__env->startSection('content'); ?>
    
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col"><a href="<?php echo e(route('categories.create')); ?>" class="btn btn-success" role="button" aria-pressed="true" style="width: 48px;">+</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($category->getId()); ?></th>
                                <td><?php echo e($category->getName()); ?></td>
                                <td><a href="<?php echo e($category->getViewLink()); ?>" class="btn btn-secondary" role="button" aria-pressed="true">👀</a></td>
                                
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\auto-diely\resources\views/categories/index.blade.php ENDPATH**/ ?>