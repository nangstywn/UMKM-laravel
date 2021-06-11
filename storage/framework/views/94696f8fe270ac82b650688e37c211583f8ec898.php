
<?php $__env->startSection('content'); ?>
    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                <?php echo Form::model($userDetails, ['route' => ['profile.update', $userDetails->id], "method" =>  "put","files" => true]); ?>

                <?php echo Form::bsText("phone","Phone"); ?>

                <?php echo Form::bsText("m_phone","Mobile Phone"); ?>

                <?php echo Form::bsText("address","Address"); ?>

                <?php echo Form::bsText("city","City"); ?>

                <?php echo Form::bsText("country","Country"); ?>

                <?php echo Form::bsText("zipcode","Zip Code"); ?>

                <?php echo Form::bsSubmit("Update"); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>