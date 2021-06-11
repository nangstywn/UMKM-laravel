<?php $__env->startSection('content'); ?>
    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Name Surname</th>
                        <th>E-Mail</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Mobile Phone</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Zip Code</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $userDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($userDetail->user->name); ?> <?php echo e($userDetail->user->surname); ?></td>
                            <td><?php echo e($userDetail->user->email); ?></td>
                            <td><?php echo e($userDetail->address); ?> </td>
                            <td><?php echo e($userDetail->phone); ?></td>
                            <td><?php echo e($userDetail->m_phone); ?></td>
                            <td><?php echo e($userDetail->city); ?></td>
                            <td><?php echo e($userDetail->country); ?></td>
                            <td><?php echo e($userDetail->zipcode); ?></td>
                            <td>
                                <a href="/profile/<?php echo e($userDetail->id); ?>/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>

                </table>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>