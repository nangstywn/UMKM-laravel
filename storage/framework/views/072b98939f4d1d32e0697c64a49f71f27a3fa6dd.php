

<?php $__env->startSection('content'); ?>

<div class="container product_section_container" style="padding: 30px;">
    <div class="row" style="margin-bottom: 30px;">
        <div class="col-md-12">
            <a href="/admin-category/create" class="btn btn-danger">
                <i class="fa fa-plus"></i>
                Tambahkan Kategori
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>slug</th>
                        <th>Created At</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($categories ->perPage()*($categories->currentPage()-1)+$i); ?></td>
                        <td><?php echo e($category->category_name); ?></td>
                        <td><?php echo e($category->slug); ?></td>
                        <td><?php echo e($category->created_at); ?></td>
                        <td>
                            <a href="/admin-category/<?php echo e($category->id); ?>/edit" class="btn btn-primary"><i
                                    class="fa fa-edit"></i> Edit</a>
                            <a href="/admin-category/<?php echo e($category->id); ?>" class="btn btn-danger" data-method="delete"
                                data-confirm="Are you sure?"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-12">
                    <?php echo $categories->links(); ?>

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