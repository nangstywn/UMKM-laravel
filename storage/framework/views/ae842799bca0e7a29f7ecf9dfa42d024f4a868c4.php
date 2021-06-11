<?php $__env->startSection('content'); ?>

    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                <?php echo Form::open(["url" => "/admin-products",'files' => 'true', "method" => "post"]); ?>

                <?php echo Form::bsFile("img[]","Product Image"); ?>

                <?php echo Form::bsSelect("category_id","Category",null,$categoriess,"Please select a category"); ?>

                <?php echo Form::bsText("product_name","Product Name"); ?>

                <?php echo Form::bsText("original_price","Original Price"); ?>

                <?php echo Form::bsText("product_price","Product Price"); ?>

                <?php echo Form::bsTextArea("product_detail","Product Detail",null,["class" => "summernote"]); ?>

                <?php echo Form::bsSubmit("Save"); ?>

                <?php echo Form::close(); ?>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('.summernote').summernote({
            tabsize: 2,
            height: 100
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>