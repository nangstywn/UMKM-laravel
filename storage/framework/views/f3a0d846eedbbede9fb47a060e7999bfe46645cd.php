<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/single_styles.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/single_responsive.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="container single_product_container">
        <div class="row">
            <div class="col">
                <!-- Breadcrumbs -->
                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <?php $__currentLoopData = $bcrumb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="/category/<?php echo e($bc->slug); ?>"><i class="fa fa-angle-right"
                                                                     aria-hidden="true"></i><?php echo e($bc->category_name); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="active"><a href="<?php echo e(route('product', $product->slug)); ?>"><i class="fa fa-angle-right"
                                                                                             aria-hidden="true"></i><?php echo e($product->product_name); ?>

                            </a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="single_product_pics">
                    <div class="row">
                        <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                            <div class="single_product_thumbnails">
                                <ul>

                                    <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="active">
                                            <img src="<?php echo asset("uploads/thumb_".$image->name); ?>" alt=""
                                                 data-image="<?php echo asset("uploads/".$image->name); ?>">
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </ul>
                            </div>


                        </div>

                        <div class="col-lg-9 image_col order-lg-2 order-1">
                            <div class="single_product_image">
                                <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="single_product_image_background"
                                         style="background-image:url('<?php echo asset("uploads/thumb_".$image->name); ?>')"></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="product_details">
                    <div class="product_details_title">
                        <h2><?php echo e($product->product_name); ?></h2>
                        <p><?php echo $product->product_detail; ?></p>
                    </div>

                    <div class="original_price"><?php echo e(number_format($product->original_price)); ?> ₺</div>
                    <div class="product_price"><?php echo e(number_format($product->product_price)); ?> ₺</div>

                    <div class="product_details_title">
                        <span>Quantity:</span>
                        <input type="number" class="quantity" id="quantity" name="quantity" value="1"
                               style="width: 50px; margin-right: 10px;">

                    </div>

                    <div class="red_button" style="margin-top: 30px;">
                        <a href="<?php echo e(route('basket.create', ['id' => $product->id])); ?>">add to cart</a>
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

        $('.red_button').find('a').click(function (event) {
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
    <script src="<?php echo e(asset('assets/js/single_custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>