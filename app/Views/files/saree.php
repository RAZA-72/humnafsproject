<div class="page-title-overlap bs-warning-bg-subtle">
<div class="container d-lg-flex justify-content-between py-2 py-lg-3">
              <div class="order-lg-2 mb-3 mb-lg-0">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="<?php echo base_url('/'); ?>"><i class="ci-home"></i>Home</a></li>
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">Saree</li>
                  </ol>
                </nav>      
              </div>
            </div>
            </div>
</div>
    <h1>Saree</h1>            x
          <?php if (!empty($products)): ?>
    <div class="product-grid" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        <?php foreach ($products as $product): ?>
            
            <a href="<?= base_url('product/' . esc($product['slugus'])); ?>">
                <div class="product-card" style="width: 450px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; text-align: center; font-family: Arial, sans-serif;">
                    
                    <!-- Product Image -->
                    <div class="product-image" style="position: relative;">
                    <?php
$imagePath = !empty($product['Productimage']) ? $product['Productimage'] : 'assets/uploads/placeholder.jpg';
?>
<img src="<?= base_url($imagePath); ?>" alt="Product Image" style="width: 100%; height: auto; border-radius: 10px;">
                      
                        <!-- Heart Icon -->
                        <div class="heart-icon" style="position: absolute; top: 10px; right: 10px; background: #fff; border-radius: 50%; padding: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" width="20" height="20">
                                <path fill="#000" d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Product Title -->
                    <h3 style="font-size: 16px; margin: 10px 0;">
                        <?= esc($product['product_name']); ?>
                    </h3>

                    <!-- Product Price -->
                    <p style="font-size: 18px; color: #e74c3c; margin: 0;">
                        <?= esc($product['productprice'], ); ?>
                    </p>

                    <!-- Cart Icon -->
                    <div class="cart-icon" style="margin: 10px 0;">
                        <a href="#" style="color: #000; text-decoration: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" width="24" height="24">
                                <path fill="#000" d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-11-3h11.5c.66 0 1.22-.42 1.42-1.03l3.58-10.13c.12-.35-.02-.73-.33-.92C21.8 3.76 21.4 3.78 21 4H6.21l-.94-2H1v2h2l3.6 9.59-1.35 3.41C4.11 16.47 4 16.73 4 17c0 1.1.9 2 2 2h12v-2H6.42c-.08 0-.16-.05-.2-.12l.1-.28L7.1 15zm12.75-9H8.53l-.75 2h10.67l-.69 2H8.03l-.75 2h9.67l-.68 2H7.43L6.07 6h13.68l-.56 1z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>No products found in the category <?= htmlspecialchars($categoryName); ?>.</p>
<?php endif; ?>

