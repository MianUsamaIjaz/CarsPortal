<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.color.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.colors.update", [$color->id])); ?>" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="color"><?php echo e(trans('cruds.color.fields.color')); ?></label>
                <input class="form-control <?php echo e($errors->has('color') ? 'is-invalid' : ''); ?>" type="text" name="color" id="color" value="<?php echo e(old('namcolore', $color->color)); ?>" required>
                <?php if($errors->has('color')): ?>
                    <span class="text-danger"><?php echo e($errors->first('color')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.color.fields.color_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cars\resources\views/admin/colors/edit.blade.php ENDPATH**/ ?>