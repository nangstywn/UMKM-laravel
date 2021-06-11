<?php $__env->startSection('content'); ?>
    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Created At</th>
                        <th>#</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->id); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->created_at); ?></td>
                            <td>
                                <a href="/admin-users/<?php echo e($user->id); ?>" class="btn btn-danger" data-method="delete"
                                   data-confirm="Are you sure?"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $users->links(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset("js/laravel-delete.js")); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>