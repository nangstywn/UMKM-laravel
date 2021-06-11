<?php $__env->startSection('content'); ?>

<div class="container product_section_container" style="padding: 30px;">
    <div class="row" style="margin-bottom: 30px;">
        <div class="col-md-12">
            <a href="/admin-products/create" class="btn btn-danger">
                <i class="fa fa-plus"></i>
                Tambahkan Iklan
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover" id="datatable">
                <?php if($products->isEmpty()): ?>
                <div class="alert alert-warning">
                    <strong>Maaf !</strong> Tidak Ada Iklan Ditemukan.
                </div>
                <?php else: ?>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Nama Bisnis</th>
                        <th>Email</th>
                        <th>No. Hp</th>
                        <th>Alamat</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($products ->perPage()*($products->currentPage()-1)+$i); ?></td>
                        <td><?php echo !empty($product->thumbs) ? $product->thumbs:''; ?></td>
                        <td> <?php echo e($product->categories->category_name); ?>

                        </td>
                        <td><?php echo e($product->product_name); ?></td>
                        <td><?php echo e($product->email); ?></td>
                        <td><?php echo e($product->phone); ?></td>
                        <td><?php echo e($product->address); ?></td>
                        <td>
                            <a href="<?php echo e(route('product',$product->slug)); ?>" class="btn btn-info"><i
                                    class="fa fa-eye"></i> View</a>
                            <a href="/admin-products/<?php echo e($product->id); ?>/edit" class="btn btn-primary"><i
                                    class="fa fa-edit"></i> Edit</a>
                            <a href="/admin-products/<?php echo e($product->id); ?>" class="btn btn-danger" data-method="delete"
                                data-confirm="Are you sure?"><i class="fa fa-trash"></i> Delete</a>

                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </tbody>
            </table>

            <!--div class="row">
                <div class="col-md-12">

                    <<?php echo $products->links(); ?>>
                </div>
            </div-->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset("js/laravel-delete.js")); ?>"></script>
<div class="row">
                <div class="col-md-12">
                <script>
				 $(document).ready( function () {
							    $('#datatable').DataTable();
								} );
</script>
                    <!--<?php echo $products->links(); ?>-->
                </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>