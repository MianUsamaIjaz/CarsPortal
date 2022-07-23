<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.franchise.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.franchises.update", [$franchise->id])); ?>" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="name"><?php echo e(trans('cruds.franchise.fields.name')); ?></label>
                <input class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>" type="text" name="name" id="name" value="<?php echo e(old('name', $franchise->name)); ?>" required>
                <?php if($errors->has('name')): ?>
                    <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.franchise.fields.name_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="short_code"><?php echo e(trans('cruds.franchise.fields.short_code')); ?></label>
                <input class="form-control <?php echo e($errors->has('short_code') ? 'is-invalid' : ''); ?>" type="text" name="short_code" id="short_code" value="<?php echo e(old('short_code', $franchise->short_code)); ?>" required>
                <?php if($errors->has('short_code')): ?>
                    <span class="text-danger"><?php echo e($errors->first('short_code')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.franchise.fields.short_code_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cars\resources\views/admin/franchises/edit.blade.php ENDPATH**/ ?>