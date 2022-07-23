<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.carModel.title')); ?>

    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo e(route('admin.carModels.index')); ?>">
                    <?php echo e(trans('global.back_to_list')); ?>

                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.carModel.fields.carModel')); ?>

                        </th>
                        <td>
                            <?php echo e($carModel->carModel); ?>

                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo e(route('admin.carModels.index')); ?>">
                    <?php echo e(trans('global.back_to_list')); ?>

                </a>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cars\resources\views/admin/carModels/show.blade.php ENDPATH**/ ?>