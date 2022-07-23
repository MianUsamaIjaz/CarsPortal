<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.car.title')); ?>

    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo e(route('admin.cars.index')); ?>">
                    <?php echo e(trans('global.back_to_list')); ?>

                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.car.fields.manufacturer')); ?>

                        </th>
                        <td>
                            <?php echo e($car->manufacturer); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.car.fields.carModel')); ?>

                        </th>
                        <td>
                            <?php echo e($car->carModel); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.car.fields.year')); ?>

                        </th>
                        <td>
                            <?php echo e($car->year); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.car.fields.color')); ?>

                        </th>
                        <td>
                            <?php echo e($car->color->color ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.car.fields.location')); ?>

                        </th>
                        <td>
                            <?php $__currentLoopData = $car->locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="label label-info"><?php echo e($location->name); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo e(route('admin.cars.index')); ?>">
                    <?php echo e(trans('global.back_to_list')); ?>

                </a>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cars\resources\views/admin/cars/show.blade.php ENDPATH**/ ?>