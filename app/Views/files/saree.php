

<nav class="woocommerce-breadcrumb" aria-label="Breadcrumb"><a href="<?php echo base_url(relativePath: '/'); ?>">Home</a>&nbsp;/&nbsp;Saree</nav>
<div class="container my-3">
<div class="row mx-auto my-auto justify-content-center">


<?php if (!empty($products)): ?>
    <?php foreach ($products as $product): ?>
        <div class="col-md-3 p-2">
            <div class="card rounded-4 pb-2">
                <div class="card-img">
                    <a href="<?= base_url('product/' . esc($product['slugus'])); ?>">
                        <!-- Dynamic Product Image -->
                        <img src="<?= base_url(!empty($product['Productimage']) ? $product['Productimage'] : 'assets/uploads/placeholder.jpg'); ?>" class="w-100 img-fluid rounded-top-4" alt="<?= esc($product['product_name']); ?>">
                    </a>
                    <!-- Dynamic Product Title -->
                    <h4 class="product-title px-3"><?= esc($product['product_name']); ?></h4>
                    <div class="row px-3">
                        <div class="col-8">
                            <!-- Dynamic Product Price -->
                            <?= esc($product['productprice'], ); ?>

                        </div>
                        <div class="col-4 text-end">
                            <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>No products found in the category <?= htmlspecialchars($categoryName); ?>.</p>
<?php endif; ?>
</div>
</div>