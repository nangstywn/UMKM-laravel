<?php $__env->startSection('content'); ?>

    <div class="container product_section_container" style="padding: 30px;">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-12">
                <a href="/admin-products/create" class="btn btn-danger">
                    <i class="fa fa-plus"></i>
                    Add a New Product
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Product Name</th>
                        <th>Original Price</th>
                        <th>Product Price</th>
                        <th>Product Detail</th>
                        <th>Created At</th>
                        <th>#</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->id); ?></td>
                            <td><?php echo $product->thumbs; ?></td>
                            <td> <?php echo e($product->categories->category_name); ?>  </td>
                            <td><?php echo e($product->product_name); ?></td>
                            <td><?php echo e(number_format($product->original_price)); ?> ₺</td>
                            <td><?php echo e(number_format($product->product_price)); ?> ₺</td>
                            <td><?php echo str_limit($product->product_detail, 30); ?></td>
                            <td><?php echo e($product->created_at); ?></td>
                            <td>
                                <a href="/admin-products/<?php echo e($product->id); ?>/edit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                <a href="/admin-products/<?php echo e($product->id); ?>" class="btn btn-danger" data-method="delete"
                                   data-confirm="Are you sure?"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $products->links(); ?>

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