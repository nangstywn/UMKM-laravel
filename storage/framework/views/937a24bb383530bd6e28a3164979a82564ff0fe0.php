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
                        <li class="active"><a href="<?php echo e(route('category', $category->slug)); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo e($category->category_name); ?></a></li>
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

                                                    <div class="product_price"><?php echo e(number_format($product->product_price)); ?> ₺<span><?php echo e(number_format($product->original_price )); ?>

                                                            ₺</span></div>

                                                    <input type="number" class="quantity" id="quantity" name="quantity" value="1" style="width: 50px; margin-right: 10px;">
                                                </div>
                                            </div>
                                            <div class="add_to_cart_button red_button" style="margin-top: 40px;"><a href="<?php echo e(route('basket.create', ['id' => $product->id])); ?>">add to cart</a></div>
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

    <!-- Benefit -->

    <div class="benefit">
        <div class="container">
            <div class="row benefit_row">
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>free shipping</h6>
                            <p>Suffered Alteration in Some Form</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>cash on delivery</h6>
                            <p>The Internet Tend To Repeat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>45 days return</h6>
                            <p>Making it Look Like Readable</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>opening all week</h6>
                            <p>8AM - 09PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script>
        $('.add_to_cart_button').find('a').click(function (event) {
            event.preventDefault();
            var quantity = $(this).parent().prev().find('input').val();
            $.ajax({
                type: "POST",
                url: $(this).attr('href'),
                data: {quantity: quantity}
                , success: function (data) {
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