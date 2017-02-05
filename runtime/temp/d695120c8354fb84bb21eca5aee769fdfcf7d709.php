<?php echo $__env->startComponent('index.alert', ['title' => $name]); ?>
    <?php $__env->slot('summary'); ?>
        The head function simply returns the first element in the given array:
    <?php $__env->endSlot(); ?>
    <strong>Whoops!</strong> Something went wrong!
<?php echo $__env->renderComponent(); ?>


