<div class="card-body"
  style="height: 200px; width: 1100px; background-color: lightgray; margin-left: 290px; margin-bottom: 500px; margin-top: 90px; ">
  <a href="<?= base_url('/category'); ?>" class="btn" style="color: white; background-color: blue; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Back</a>


  <form action="<?= base_url('Productcontroller-add'); ?>"  method="post" enctype="multipart/form-data">
  



    <div class="form-group">
      <label for="service_title">Category name</label>
      <input type="text" name="category_name" class="form-control"   />
    </div>
    

    <div class="form-group">
      <label for="service_title">Add slug name</label>
      <input type="text" name="slugs" class="form-control"   />
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>

    
    
  </form>
</div>