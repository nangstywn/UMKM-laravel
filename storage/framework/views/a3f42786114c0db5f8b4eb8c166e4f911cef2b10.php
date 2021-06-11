<?php $__env->startSection('content'); ?>

<div class="container product_section_container" style="padding: 30px;">
    <div class="row">
        <div class="col-md-12">
            <?php echo Form::open(["url" => "/admin-products",'files' => 'true', "method" => "post"]); ?>

            <?php echo Form::bsFile("img[]","Gambar"); ?>

            <?php echo Form::bsSelect("category_id","Kategori","red",$categoriess,"Pilih Kategori"); ?>

            <?php echo Form::bsText("product_name","Nama Usaha"); ?>

            <?php echo Form::bsText("email","Email"); ?>

            <?php echo Form::bsText("phone","No. Hp"); ?>

            <?php echo Form::bsText("address","Alamat"); ?>

            <?php echo Form::bsText("maps","Sematkan Maps"); ?>

            <?php echo Form::bsTextArea("product_detail","Detail Bisnis",null,["class" => "summernote"]); ?>

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