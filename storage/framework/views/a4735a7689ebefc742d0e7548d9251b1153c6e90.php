<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.carModel.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.carModels.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="carModel"><?php echo e(trans('cruds.carModel.fields.carModel')); ?></label>
                <input class="form-control <?php echo e($errors->has('carModel') ? 'is-invalid' : ''); ?>" type="text" name="carModel" id="carModel" value="<?php echo e(old('carModel', '')); ?>" required>
                <?php if($errors->has('carModel')): ?>
                    <span class="text-danger"><?php echo e($errors->first('carModel')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.carModel.fields.carModel_helper')); ?></span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    <?php echo e(trans('global.save')); ?>

                </button>
            </div>
        </form>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cars\resources\views/admin/carModels/create.blade.php ENDPATH**/ ?>