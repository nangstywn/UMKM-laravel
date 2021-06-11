<?php $__env->startSection('content'); ?>
    <div class="container" style="margin-top: 40px;">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th>Order ID</th>
                        <th>Iyzico C. ID</th>
                        <th>Name Surname</th>
                        <th>Phone</th>
                        <th>Payment Method</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Order Date</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(count($orders) == 0): ?>
                        <tr><td colspan="7">No Records Found</td></tr>
                    <?php endif; ?>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>PN-<?php echo e($order->id); ?></td>
                            <td><?php echo e($order->order_no); ?></td>
                            <td><?php echo e($order->baskets->user->name); ?> <?php echo e($order->baskets->user->surname); ?></td>
                            <td><?php echo e($order->phone); ?></td>
                            <td><?php echo e($order->payment_method); ?></td>
                            <td><?php echo e($order->order_price); ?> ₺</td>
                            <td><?php echo e($order->status); ?> </td>
                            <td><?php echo e($order->created_at); ?></td>
                            <td><a href="/admin-orders/<?php echo e($order->id); ?>/edit" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($orders->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>