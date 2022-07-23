<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.car.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.cars.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="manufacturer"><?php echo e(trans('cruds.car.fields.manufacturer')); ?></label>
                <input class="form-control <?php echo e($errors->has('manufacturer') ? 'is-invalid' : ''); ?>" type="text" name="manufacturer" id="manufacturer" value="<?php echo e(old('manufacturer', '')); ?>" required>
                <?php if($errors->has('manufacturer')): ?>
                    <span class="text-danger"><?php echo e($errors->first('manufacturer')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.car.fields.manufacturer_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="carModel"><?php echo e(trans('cruds.car.fields.carModel')); ?></label>
                <input class="form-control <?php echo e($errors->has('carModel') ? 'is-invalid' : ''); ?>" type="text" name="carModel" id="carModel" value="<?php echo e(old('carModel', '')); ?>" required>
                <?php if($errors->has('carModel')): ?>
                    <span class="text-danger"><?php echo e($errors->first('carModel')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.car.fields.carModel_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="year"><?php echo e(trans('cruds.car.fields.year')); ?></label>
                <input class="form-control <?php echo e($errors->has('year') ? 'is-invalid' : ''); ?>" type="text" name="year" id="year" value="<?php echo e(old('year', '')); ?>" required>
                <?php if($errors->has('year')): ?>
                    <span class="text-danger"><?php echo e($errors->first('year')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.car.fields.year_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="color_id"><?php echo e(trans('cruds.car.fields.color')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('color') ? 'is-invalid' : ''); ?>" name="color_id" id="color_id" required>
                    <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('color_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('color')): ?>
                    <span class="text-danger"><?php echo e($errors->first('color')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.car.fields.color_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="locations"><?php echo e(trans('cruds.car.fields.location')); ?></label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0"><?php echo e(trans('global.select_all')); ?></span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0"><?php echo e(trans('global.deselect_all')); ?></span>
                </div>
                <select class="form-control select2 <?php echo e($errors->has('locations') ? 'is-invalid' : ''); ?>" name="locations[]" id="locations" multiple>
                    <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(in_array($id, old('locations', [])) ? 'selected' : ''); ?>><?php echo e($location); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('locations')): ?>
                    <span class="text-danger"><?php echo e($errors->first('locations')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.car.fields.location_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cars\resources\views/admin/cars/create.blade.php ENDPATH**/ ?>