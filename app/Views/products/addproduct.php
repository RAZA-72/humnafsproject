<div class="card-body"
  style="height: 200px; width: 1100px; background-color: lightgray; margin-left: 290px; margin-bottom: 500px; margin-top: 90px; ">


  <form action="<?= base_url('Productcontroller-store'); ?>"  method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="service_title">Product image</label>
      <input type="file" name="Productimage[]" id="images" multiple>
    </div>
    <div class="form-group">
      <label for="service_title">Collection name</label>
      <input type="text" name="collection" id="images" multiple>
    </div>
    <div class="form-group">
      <label for="service_title">Sub Category</label>
      <input type="text" name="sub_category" class="form-control"   />
    </div>

    
    <div class="form-group">
      <label for="service_title">Enter Slug</label>
      <input type="text" name="slugus" id="images" multiple>
    </div>

    <div class="form-group">
      <label for="service_title">Product name</label>
      <input type="text" name="product_name" class="form-control"   />
    </div>

    <div class="form-group">
      <label for="service_title">Product url</label>
      <input type="text" name="producturl" class="form-control"   />
    </div>

    <div class="form-group">
      <label for="service_title">Product_price</label>
      <input type="number" name="productprice" class="form-control"   />
    </div>
    
    <div class="form-group">
      <label for="service_title">Sale_price</label>
      <input type="number" name="sale_price" class="form-control"   />
    </div>
    
    <div class="form-group">
    <label for="discount_percentage">Discount Percentage</label>
    <input type="text" id="discount_percentage" name="discount_percentage" class="form-control" readonly />
  </div>

     
       <div class="form-group">
      <label for="service_title">Styling_Inspiration</label>
      <input type="text" name="styling_Inspiration" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Size_and_fit</label>
      <input type="text" name="size_and_fit" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Style_number</label>
      <input type="text" name="style_num" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Dispatch_info</label>
      <input type="text" name="dispatch" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Return_Exchange</label>
      <input type="text" name="return_exchange" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Composition</label>
      <input type="text" name="composition" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Package_consent</label>
      <input type="text" name="package_consent" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Kurta_fabric_type</label>
      <input type="text" name="kurta_fabric" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Pant_fabric_type</label>
      <input type="text" name="pant_fabric" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Duppata_fabric_type</label>
      <input type="text" name="duppata_fabric" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Neck_fabric_type</label>
      <input type="text" name="neck_type" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title"> Sleves_type</label>
      <input type="text" name="sleves_type" class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title"> Work_type</label>
      <input type="text" name="work_type"  class="form-control"   />
    </div>
    <div class="form-group">
      <label for="service_title">Product_detail _descripition</label>
      <input type="text"  name="product_descripiton" class="form-control"   />
    </div>

    <div class="form-group">
      <label for="service_title">Technique</label>
      <input type="text" name="techinque" class="form-control"   />
    </div>

    <div class="form-group">
      <label for="service_title">Colors</label>
      <input type="text" name="colors" class="form-control"   />
    </div>


    <div class="form-group">
      <label for="service_title">Washing insturction</label>
      <input type="text" name="washinginstruction" class="form-control"   />
    </div>

    <div class="form-group">
      <label for="service_title">Fabric details</label>
      <input type="text" name="fabricdetails" class="form-control"   />
    </div>

    <div class="form-group">
      <label for="service_title">Product details</label>
      <input type="text" name="productdetails" class="form-control"   />
    </div>

    <div class="form-group">
      <label for="service_title">Delivery Time line</label>
      <input type="number" name="deliverytimeline" class="form-control"   />
    </div>

    <div class="form-group">
      <label for="service_title">International Delivery Time line</label>
      <input type="number" name="internationaldelivery" class="form-control"   />
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control select-control" name="category_id" id="category" onchange="this.form.submit();">
            <option value="">Select Category</option>
            <?php foreach ($category as $row): ?>
                <option value="<?= $row['id']; ?>" 
                    <?= (isset($_GET['category_id']) && $_GET['category_id'] == $row['id']) ? 'selected' : ''; ?>>
                    <?= esc($row['category_name']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
    
  </form>
</div>