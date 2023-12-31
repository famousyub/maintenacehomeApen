<div id="content-results-table">
    <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="card card-product-holder mb-2 post-has-image-true manage-post-item">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center flex-lg-box">

                    <div class="col-1 text-center" style="max-width: 40px;">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" value="<?php echo e($content->id); ?>" id="products-<?php echo e($content->id); ?>"  class="js-select-posts-for-action custom-control-input"  wire:model="checked">
                            <label for="products-<?php echo e($content->id); ?>" class="custom-control-label"></label>
                        </div>
                        <span class="btn btn-link text-muted px-0 js-move mw_admin_posts_sortable_handle" onmousedown="mw.manage_content_sort()">
                            <i class="mdi mdi-cursor-move"></i>
                        </span>
                    </div>

                    <?php if($showColumns['image']): ?>
                    <div class="col-2" style="min-width: 120px; max-width: 120px;">

                        <div class="mw-admin-product-item-icon text-muted">
                            <i class="mdi mdi-shopping mdi-18px" data-bs-toggle="tooltip" title=""></i>
                        </div>

                        <?php echo $__env->make('content::admin.content.livewire.components.picture', ['content'=>$content], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </div>
                    <?php endif; ?>

                    <?php if($showColumns['title']): ?>
                    <div class="col-xl-5 col-7">

                        <?php echo $__env->make('content::admin.content.livewire.components.title-and-categories', ['content'=>$content], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('content::admin.content.livewire.components.manage-links', ['content'=>$content], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </div>
                    <?php endif; ?>

                    <div class="col-xl-4 col-sm-12 col-6 d-flex flex-wrap my-xl-0 my-3">
                    <?php if($showColumns['price']): ?>
                    <div class="col" style="white-space: nowrap">
                        <?php
                            if ($content->hasSpecialPrice()) {
                                $price = '<span class="h6" style="text-decoration: line-through;">'.currency_format($content->price).'</span>';
                                $price .= '<br /><span>'.currency_format($content->specialPrice).'</span>';
                            } else {
                                $price = '<span class="h5">'.currency_format($content->price).'</span>';
                            }
                        ?>

                        <?php echo $price; ?>

                    </div>
                    <?php endif; ?>

                    <?php if($showColumns['stock']): ?>
                    <div class="col">
                        <?php
                            if ($content->InStock) {
                              $stock = '<span class="badge badge-success badge-sm">In stock</span>';
                          } else {
                              $stock = '<span class="badge badge-danger badge-sm">Out Of Stock</span>';
                          }
                        ?>
                        <?php echo $stock; ?>

                    </div>
                    <?php endif; ?>

                    <?php if($showColumns['orders']): ?>
                    <div class="col">
                        <?php
                            $ordersUrl = route('admin.order.index') . '?showFilters[productId]=1&filters[productId]='.$content->id;
                            if ($content->ordersCount == 1) {
                                $sales = '<a href="'.$ordersUrl.'"><span class="text-green">'.$content->ordersCount.'</span></a>';
                            } else if ($content->ordersCount > 1) {
                                $sales = '<a href="'.$ordersUrl.'"><span class="text-green">'.$content->ordersCount.'</span></a>';
                            } else {
                                $sales = '<span>'.$content->ordersCount.'</span>';
                            }
                        ?>
                       Sales: <?php echo $sales; ?>

                    </div>
                    <?php endif; ?>

                    <?php if($showColumns['quantity']): ?>
                    <div class="col">
                        <?php
                            if ($content->qty == 'nolimit') {
                                  $quantity = '<span><i class="fa fa-infinity" title="Unlimited Quantity"></i></span>';
                              } else if ($content->qty == 0) {
                                  $quantity = '<span class="text-small text-danger">0</span>';
                              } else {
                                  $quantity = $content->qty;
                              }
                        ?>
                        Qty: <?php echo $quantity; ?>

                    </div>
                    <?php endif; ?>

                    </div>

                    <?php if($showColumns['author']): ?>
                    <div class="col">
                        <span class="text-muted" title="<?php echo e($content->authorName()); ?>"><?php echo e($content->authorName()); ?></span>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH D:\wampp\www\crawlerr\src\MicroweberPackages\Product/resources/views/admin/product/livewire/display-types/card.blade.php ENDPATH**/ ?>