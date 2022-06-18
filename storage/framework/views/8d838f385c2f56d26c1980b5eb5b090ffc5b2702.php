<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/categories_styles.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/categories_responsive.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="container product_section_container">
    <div class="row">
        <div class="col product_section clearfix">

            <!-- Breadcrumbs -->

            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li class="active"><a href="<?php echo e(route('category', $category->slug)); ?>"><i class="fa fa-angle-right"
                                aria-hidden="true"></i><?php echo e($category->category_name); ?></a></li>
                </ul>
            </div>

            <!-- Sidebar -->



            <!-- Main Content -->

            <div class="main_content">

                <!-- Products -->

                <div class="products_iso">
                    <div class="row">
                        <div class="col">
                            <div class="product-grid"
                                data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>


                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="/product/<?php echo e($product->slug); ?>">
                                    <div class="product-item <?php echo e($product->id); ?> ">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <?php echo $product->thumbs; ?>

                                            </div>

                                            <div class="product_info">
                                                <h6 class="product_name"><a
                                                        href="/product/<?php echo e($product->slug); ?>"><?php echo e($product->product_name); ?></a>
                                                </h6>

                                                <div class="product_price"><?php echo e(($product->phone)); ?>

                                                </div>
                                                <div class="product_price"><?php echo e(($product->address)); ?>

                                                </div>


                                            </div>
                                        </div>
                                        <div class="add_to_cart_button red_button" style="margin-top: 40px;"><a
                                                href="/product/<?php echo e($product->slug); ?>">See
                                                Details</a></div>
                                    </div>
                                </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<script>
$('.add_to_cart_button').find('a').click(function(event) {
    event.preventDefault();
    var quantity = $(this).parent().prev().find('input').val();
    $.ajax({
        type: "POST",
        url: $(this).attr('href'),
        data: {
            quantity: quantity
        },
        success: function(data) {
            console.log(data);
            $('#checkout_items').html(data.cartCount);
        }
    });
    return false; //for good measure
});
</script>
<script src="<?php echo e(asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/categories_custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>