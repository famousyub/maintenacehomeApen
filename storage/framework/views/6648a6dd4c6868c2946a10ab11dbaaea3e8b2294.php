<?php echo $__env->make('admin::layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if (! empty(trim($__env->yieldContent('content')))): ?>
    <main class="module-main-holder">
    <?php echo $__env->yieldContent('content' ); ?>
    </main>
<?php endif; ?>


<?php echo $__env->make('admin::layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH D:\wampp\www\crawlerr\src\MicroweberPackages\Admin/resources/views/layouts/app.blade.php ENDPATH**/ ?>