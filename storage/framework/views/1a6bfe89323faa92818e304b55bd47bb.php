

<?php $__env->startSection('content'); ?>
<div class="container mt-2">
    <div class="text-sm">
        <span style="margin-left: 17px;">Clients - Create</span>
        <a href=http://127.0.0.1:8000/clients/ class="btn btn-link text-sm btn-sm" role="button" aria-pressed="true" style="margin-bottom: 2px;">Späť</a>
    </div>
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php echo Form::open(['route' => 'clients.createPost']); ?>

                        <div class="form-group">
                            <label class="form-check-label" for="exampleCheck1">Name</label>
                            <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone number</label>
                            <?php echo Form::number('phone_number', null, ['class' => 'form-control']); ?>

                        </div>
                        <button type="submit" class="btn btn-dark" style="background-color: #000000; color: #fff; margin-top: 10px;">Submit</button>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\auto-diely\resources\views/clients/create.blade.php ENDPATH**/ ?>