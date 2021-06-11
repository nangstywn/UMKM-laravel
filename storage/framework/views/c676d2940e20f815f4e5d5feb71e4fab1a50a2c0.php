<?php $__env->startSection('content'); ?>
<div class="container product_section_container" style="padding: 30px;">
    <div class="row">
        <div class="col-md-12">
            <?php echo Form::open(["url" => "/admin-category", "method" => "post"]); ?>

            <?php echo Form::bsText("category_name","Category Name"); ?>

            <?php echo Form::bsSubmit("Save"); ?>

            <?php echo Form::close(); ?>


        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>