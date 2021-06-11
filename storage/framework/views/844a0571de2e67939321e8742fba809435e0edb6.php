<div class="form-group <?php echo e($errors->has($name) ? ' has-error' : ''); ?>" >
    <?php echo e(Form::label($name, $label_name,['class' => 'control-label'])); ?>

    <?php echo e(Form::text($name, $value, array_merge(['class' =>  'form-control'], $attributes))); ?>

    <?php if($errors->has($name)): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first($name)); ?></strong>
        </span>
    <?php endif; ?>
</div>