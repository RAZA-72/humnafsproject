
<?php if (!empty($shopkeeper)): ?>
    <?php foreach ($shopkeeper as $row): ?>
        <a href="<?= base_url('product/' . esc($row['slugus'])); ?>">
            <div class="product-card" style="width: 450px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; text-align: center; font-family: Arial, sans-serif;">
                
                <!-- Product Image -->
                <div class="product-image" style="position: relative;">
                    <?php
                    $images = explode(',', $row['Productimage']);
                    $imagePath = !empty($images[0]) ? 'assets/uploads/' . $images[0] : 'assets/uploads/placeholder.jpg';
                    ?>
  

                    <img src="<?= base_url($imagePath); ?>" alt="Product Image" class="rounded shadow-sm" style="margin: 5px; width: 100%; height: auto;">
                    
                    <!-- Heart Icon -->
                    <div class="heart-icon" style="position: absolute; top: 10px; right: 10px; background: #fff; border-radius: 50%; padding: 5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" width="20" height="20">
                            <path fill="#000" d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Product Title -->
                <h3 style="font-size: 16px; margin: 10px 0;">
                    <?= esc($row['product_name']); ?>
                </h3>

                <!-- Product Price -->
                <p style="font-size: 18px; color: #e74c3c; margin: 0;">
                    ₹<?= number_format($row['productprice'], 2); ?>
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
<?php else: ?>
    <p>No products found.</p>
<?php endif; ?>


