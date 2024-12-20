<div class="card-body"
  style="height: 200px; width: 1100px; background-color: lightgray; margin-left: 290px; margin-bottom: 500px; margin-top: 90px; ">


  <form action=" <?= base_url('Productcontroller-update/'.$shop['id']); ?>" method="post" enctype="multipart/form-data">

  <div>
    <label for="Productimage">Product Images</label>
    <input type="file" name="Productimage[]" id="images" multiple>

    <?php
    // Splitting the product images by comma
    $images = explode(',', $shop['Productimage']);
    ?>

    <?php foreach ($images as $row): ?>
        <!-- Correctly use the full $row variable as the file name -->
        <img src="<?= base_url('assets/uploads/' . trim($row)) ?>" 
             alt="Product Image" 
             class="rounded shadow-sm" 
             style="margin: 5px; width: 100px; height: auto;">
    <?php endforeach; ?>
</div>
<div class="form-group">
      <label for="service_title">Enter collection</label>
      <input type="text" name="collection" value="<?= $shop['collection'] ?>"  id="images" multiple>
    </div>
    <div class="form-group">
      <label for="service_title">Size_and_Fit</label>
      <input type="text" name="size_and_fit" value="<?= $shop['size_and_fit'] ?>"  id="images" multiple>
    </div>
<div class="form-group">
      <label for="service_title">Enter Slug</label>
      <input type="text" name="slugus" value="<?= $shop['slugus'] ?>"  id="images" multiple>
    </div>
    <div class="form-group">
      <label for="service_title">Product name</label>
      <input type="text" value="<?= $shop['product_name'] ?>" name="product_name" class="form-control" />
    </div>

    <div class="form-group">
      <label for="service_title">Product url</label>
      <input type="text" value="<?= $shop['producturl'] ?>" name="producturl" class="form-control" />
    </div>

    <div class="form-group">
      <label for="service_title">Product price</label>
      <input type="number" value="<?= $shop['productprice'] ?>" name="productprice" class="form-control" />

    </div>  
    <div class="form-group">
      <label for="service_title">Sale_price</label>
      <input type="number" name="sale_price" value="<?= $shop['sale_price'] ?>" class="form-control"   />
    </div>                  
       <div class="form-group">
      <label for="service_title">Styling_Inspiration</label>
      <input type="text" name="styling_Inspiration" value="<?= $shop['styling_Inspiration'] ?>" class="form-control"   />
    </div>
                
      <div class="form-group">
      <label for="service_title">Size_and_fit</label>
      <input type="text" name="size_and_fit" value="<?= $shop['size_and_fit'] ?>" class="form-control"   />
    </div>
   
      <div class="form-group">
      <label for="service_title">Style_number</label>
      <input type="text" name="style_num" value="<?= $shop['style_num'] ?>" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Dispatch_info</label>
      <input type="text" name="dispatch" value="<?= $shop['dispatch'] ?>" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Return_Exchange</label>
      <input type="text" name="return_exchange" value="<?= $shop['return_exchange'] ?>" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Composition</label>
      <input type="text" name="composition" value="<?= $shop['composition'] ?>"  class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Package_consent</label>
      <input type="text" name="package_consent" value="<?= $shop['package_consent'] ?>" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Kurta_fabric_type</label>
      <input type="text" name="kurta_fabric"  value="<?= $shop['kurta_fabric'] ?>" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Pant_fabric_type</label>
      <input type="text" name="pant_fabric" value="<?= $shop['pant_fabric'] ?>" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Duppata_fabric_type</label>
      <input type="text" name="duppata_fabric" value="<?= $shop['duppata_fabric'] ?>" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Neck_fabric_type</label>
      <input type="text" name="neck_type" value="<?= $shop['neck_type'] ?>" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title"> Sleves_type</label>
      <input type="text" name="sleves_type" value="<?= $shop['sleves_type'] ?>" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title"> Work_type</label>
      <input type="text" name="work_type" value="<?= $shop['work_type'] ?>" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Product_detail _descripition</label>
      <input type="text"  name="product_descripiton" value="<?= $shop['product_descripiton'] ?>" class="form-control"   />
    </div>


    <div class="form-group">
      <label for="service_title">Technique</label>
      <input type="text" value="<?= $shop['techinque'] ?>" name="techinque" class="form-control" />
    </div>

    <div class="form-group">
      <label for="service_title">Colors</label>
      <input type="text" value="<?= $shop['colors'] ?>" name="colors" class="form-control" />
    </div>


    <div class="form-group">
      <label for="service_title">Washing insturction</label>
      <input type="text" value="<?= $shop['washinginstruction'] ?>" name="washinginstruction" class="form-control" />
    </div>

    <div class="form-group">
      <label for="service_title">Fabric details</label>
      <input type="text" value="<?= $shop['fabricdetails'] ?>" name="fabricdetails" class="form-control" />
    </div>

    <div class="form-group">
      <label for="service_title">Product details</label>
      <input type="text" value="<?= $shop['productdetails'] ?>" name="productdetails" class="form-control" />
    </div>

    <div class="form-group">
      <label for="service_title">Delivery Time line</label>
      <input type="number" value="<?= $shop['deliverytimeline'] ?>" name="deliverytimeline" class="form-control" />
    </div>

    <div class="form-group">
      <label for="service_title">International Delivery Time line</label>
      <input type="number" value="<?= $shop['internationaldelivery'] ?>" name="internationaldelivery"
        class="form-control" />
    </div>

    
    
    <div class="form-group">
      <button type="submit" class="btn btn-primary">update</button>
    </div>
  </form>
</div>