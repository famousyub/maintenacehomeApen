<div class="pt-0">

    <?php echo $__env->make('content::admin.content.index-page-category-tree', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="module-content">

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-content-list', [])->html();
} elseif ($_instance->childHasBeenRendered('9E1QO1q')) {
    $componentId = $_instance->getRenderedChildComponentId('9E1QO1q');
    $componentTag = $_instance->getRenderedChildComponentTagName('9E1QO1q');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9E1QO1q');
} else {
    $response = \Livewire\Livewire::mount('admin-content-list', []);
    $html = $response->html();
    $_instance->logRenderedChild('9E1QO1q', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-content-bulk-options', [])->html();
} elseif ($_instance->childHasBeenRendered('cL9bi8L')) {
    $componentId = $_instance->getRenderedChildComponentId('cL9bi8L');
    $componentTag = $_instance->getRenderedChildComponentTagName('cL9bi8L');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cL9bi8L');
} else {
    $response = \Livewire\Livewire::mount('admin-content-bulk-options', []);
    $html = $response->html();
    $_instance->logRenderedChild('cL9bi8L', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>
</div>

<?php echo $__env->make('content::admin.content.index-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\wampp\www\crawlerr\src\MicroweberPackages\Content\resources\views/admin/content/index.blade.php ENDPATH**/ ?>