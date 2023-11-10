

<?php $__env->startSection('content'); ?>
<div class="container mt-2">
    <div class="text-sm">
        <span style="margin-left: 17px;">Clients - <?php echo e($client->getId()); ?></span>
        <a href=http://127.0.0.1:8000/clients/ class="btn btn-link text-sm btn-sm" role="button" aria-pressed="true" style="margin-bottom: 2px;">Späť</a>
    </div>
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Detail klienta
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            ID
                        </div>
                        <div class="col-6">
                            <?php echo e($client->getId()); ?>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            Meno
                        </div>
                        <div class="col-6">
                            <?php echo e($client->getName()); ?>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            Email
                        </div>
                        <div class="col-6">
                            <?php echo e($client->getEmail()); ?>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            Phone Number
                        </div>
                        <div class="col-6">
                            <?php echo e($client->getPhoneNumber()); ?>

                        </div>
                    </div>
                    <hr>
                    <div>
                        </br>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a href="<?php echo e($client->getEditLink()); ?>" class="btn btn-success btn-sm" role="button" aria-pressed="true">Edit</a>
                        </div>
                        <div class="col-6">
                        <?php echo Form::model($client, ['route' => ['clients.deletePost', $client->getId()]]); ?>

                            <?php echo Form::hidden('id'); ?>

                            <button type="button1" class="btn btn-danger btn-sm">Delete</button>
                        <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\auto-diely\resources\views/clients/view.blade.php ENDPATH**/ ?>