<?php $__env->startSection('content'); ?>
<div class="pt-0">

    <?php echo $__env->make('content::admin.content.index-page-category-tree', [
       'is_shop'=>1,
   ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="module-content">

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-products-list', [])->html();
} elseif ($_instance->childHasBeenRendered('TfKdW9g')) {
    $componentId = $_instance->getRenderedChildComponentId('TfKdW9g');
    $componentTag = $_instance->getRenderedChildComponentTagName('TfKdW9g');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TfKdW9g');
} else {
    $response = \Livewire\Livewire::mount('admin-products-list', []);
    $html = $response->html();
    $_instance->logRenderedChild('TfKdW9g', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-content-bulk-options', [])->html();
} elseif ($_instance->childHasBeenRendered('E7lfrj3')) {
    $componentId = $_instance->getRenderedChildComponentId('E7lfrj3');
    $componentTag = $_instance->getRenderedChildComponentTagName('E7lfrj3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('E7lfrj3');
} else {
    $response = \Livewire\Livewire::mount('admin-content-bulk-options', []);
    $html = $response->html();
    $_instance->logRenderedChild('E7lfrj3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>
</div>

<?php echo $__env->make('content::admin.content.index-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wampp\www\crawlerr\src\MicroweberPackages\Product/resources/views/admin/product/index.blade.php ENDPATH**/ ?>