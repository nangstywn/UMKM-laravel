<?php $__env->startSection('content'); ?>
    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">

                <?php echo Form::model($category, ['route' => ['admin-category.update', $category->id], "method" =>  "put","files" => true]); ?>

                <?php echo Form::bsText("category_name","Category Name"); ?>

                <?php echo Form::bsSubmit("Update"); ?>

                <?php echo Form::close(); ?>


            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>