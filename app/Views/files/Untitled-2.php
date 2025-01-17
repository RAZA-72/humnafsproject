<?php if (!empty($products)): ?>
<div class="container">
  <div class="row">
    <?php foreach ($products as $row): ?>
    <div class="col-lg-12 d-flex align-items-start mb-4">
      <div class="col-lg-6 pe-lg-4">
        <div class="row g-2">
    <?php
          $images = explode(',', $row['Productimage']);
          foreach (array_slice($images, 0, 4) as $image) {
              $imagePath = !empty($image) ?  $image : 'assets/uploads/placeholder.jpg';
              echo '<div class="col-6"><img src="' . base_url($imagePath) . '" alt="Product Image" style="width: 100%; height: auto; border-radius: 10px;"></div>';
          }
    ?>  
        </div>
      </div> 
      <div class="col-lg-6 ps-lg-4">
        <h1 class="description-title mt-4"> <?= esc ($row['product_name']);?> </h1>
        <span class="new-price text-danger fw-semibold fs-5 me-2">₹ <?= esc ($row['sale_price']);?> </span>
        <span class="old-price text-secondary">₹ <?= esc ($row['productprice']);?></span>
        <p class="lh-1"><sub class="text-dark fw-lighter">(MRP Inclusive of all taxes)</sub></p>

        <p><?= esc ($row['product_descripiton']);?></p>
        
        <div class="size border-bottom border-top">
          <h3 class="mt-3">Select Size</h3> 
          <div class="d-flex gap-2 pt-2 pb-4">
            <button class="btn btn-secondary rounded-circle p-2 lh-1" type="button">XS</button>
            <button class="btn btn-secondary rounded-circle p-2 lh-1" type="button">S</button>
            <button class="btn btn-secondary rounded-circle p-2 lh-1" type="button">M</button>
            <button class="btn btn-secondary rounded-circle p-2 lh-1" type="button">L</button>
            <button class="btn btn-secondary rounded-circle p-2 lh-1" type="button">XL</button>
          </div>
        </div>

        <div class="add-to-cart d-flex flex-wrap border-bottom py-3">
          <a href="#" class="text-secondary btn btn-outline-danger">
            <i class="fa-regular fa-heart fa-xl"></i>
          </a>
          <a href="<?= base_url('/cart/add/{productId}');?>" class="text-secondary btn btn-outline-danger mx-3">
            Add to Cart
          </a>
          <a href="#" class="text-secondary btn btn-outline-danger">
            <i class="fa-solid fa-share-nodes fa-xl"></i>
          </a>
        </div>

        <div class="accordion mb-4" id="productPanels">
          <div class="accordion-item">
            <h3 class="accordion-header"><a class="accordion-button collapsed" href="#productInfo" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="productInfo"><i class="fa-solid fa-circle-info text-muted fs-lg align-middle mt-n1 me-2"></i> Product info</a></h3>
            <div class="accordion-collapse collapse" id="productInfo" data-bs-parent="#productPanels">
              <div class="accordion-body">
                <ul class="fs-sm ps-4">
                  <li>Colour: <span><?= esc ($row['colors']);?></span></li>
                  <li>Package Contents: <span><?= esc ($row['package_consent']);?></span></li>
                  <li>Kurta Fabric: <span><?= esc($row['kurta_fabric']);?> </span></li>
                  <li>Pants Fabric: <span> <?= esc ($row['pant_fabric']);?> </span></li>
                  <li>Dupatta Fabric: <span> <?= esc ($row['duppata_fabric']);  ?></span></li>
                  <li>Neck: <span><?= esc  ($row['neck_type']); ?></span></li>
                  <li>Sleeve: <span><?=  esc ($row['sleves_type']);?></span></li>
                  <li>Work: <span><?= esc ($row['work_type']);?> </span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Add other accordion items as needed -->
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
<?php else: ?>
<p>No products found.</p>
<?php endif; ?>
