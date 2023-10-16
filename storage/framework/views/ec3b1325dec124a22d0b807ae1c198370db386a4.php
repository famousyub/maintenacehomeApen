<div class="pt-0">

    <?php echo $__env->make('content::admin.content.index-page-category-tree', [
         'is_blog'=>1,
     ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="module-content">

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-posts-list', [])->html();
} elseif ($_instance->childHasBeenRendered('RlMZqci')) {
    $componentId = $_instance->getRenderedChildComponentId('RlMZqci');
    $componentTag = $_instance->getRenderedChildComponentTagName('RlMZqci');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('RlMZqci');
} else {
    $response = \Livewire\Livewire::mount('admin-posts-list', []);
    $html = $response->html();
    $_instance->logRenderedChild('RlMZqci', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-content-bulk-options', [])->html();
} elseif ($_instance->childHasBeenRendered('aaFeQgn')) {
    $componentId = $_instance->getRenderedChildComponentId('aaFeQgn');
    $componentTag = $_instance->getRenderedChildComponentTagName('aaFeQgn');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('aaFeQgn');
} else {
    $response = \Livewire\Livewire::mount('admin-content-bulk-options', []);
    $html = $response->html();
    $_instance->logRenderedChild('aaFeQgn', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>
</div>

<?php echo $__env->make('content::admin.content.index-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\wampp\www\crawlerr\src\MicroweberPackages\Post/resources/views/admin/posts/index.blade.php ENDPATH**/ ?>