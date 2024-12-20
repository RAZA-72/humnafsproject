<div class="card-body"
    style="height: 200px; width: 1250px;  margin-left: 290px; margin-bottom: 500px; margin-top: 90px; ">
    <a href="<?= base_url('product/addproduct'); ?>" class="btn btn-primary " onclick="return confirm(' want to Add New product?');" 
    >
    ADD PRODUCT
</a>
  </button>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead style="background-color: #f8f9fa; border-bottom: 2px solid #dee2e6;">
                <tr class="text-center">
                    <th scope="col" style="padding: 12px; color: #495057; border-right: 1px solid #dee2e6;">id</th>
                    <th scope="col" style="padding: 12px; color: #495057; border-right: 1px solid #dee2e6;">Product_image
                    </th>
                    <th scope="col" style="padding: 12px; color: #495057; border-right: 1px solid #dee2e6;">Product_name
                    </th>
                    <th scope="col" style="padding: 12px; color: #495057; border-right: 1px solid #dee2e6;">Product_price
                    </th> <th scope="col" style="padding: 12px; color: #495057; border-right: 1px solid #dee2e6;">Sale_price
                    </th>
                    <th scope="col" style="padding: 12px; color: #495057; border-right: 1px solid #dee2e6;">Disc/percent
                    </th>
                    <th scope="col" style="padding: 12px; color: #495057; border-right: 1px solid #dee2e6;">Category 

                    <th scope="col" style="padding: 12px; color: #495057; border-right: 1px solid #dee2e6;">Created_at
                    </th>
                    <th scope="col" style="padding: 12px; color: #495057; border-right: 1px solid #dee2e6;">Update_at
                    </th>
                    <th scope="col" style="padding: 12px; color: #495057;">Update</th>

                    <th scope="col" style="padding: 12px; color: #495057;">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($shopkeeper as $row): ?>
                    <tr class="text-center">
                        <td><?= $row['id'] ?></td>
                        <td>
                            <?php
                            $images = explode(',', $row['Productimage']);
                            ?>
                            <img src="<?= base_url(  $images[0]) ?>" alt="Product Image"
                                class="rounded shadow-sm" style="margin: 5px; width: 100px; height: auto;">  </td>   
                        <td><?= $row['product_name'] ?></td>
                        <td><?= $row['productprice'] ?></td>
                        <td><?= $row['sale_price'] ?></td>  
                        <td class='rounded'><?= floor($row['discount_perctange']) ?>% off</td>
                        <td><?= $row['category_id'] ?></td>
                        <td><?= $row['created_at'] ?></td>
                        <td><?= $row['updated_at'] ?></td>
                        <td>
                            <a href="<?= base_url('product/edit/' . $row['id']) ?>"
                            style=" color: blue; text-decoration : none; "
                            onclick="return confirm('Are you sure you want to update this product?');" 
                                >
                             Update
                            </a>
                        </td>
                        <td>
                            <a href="<?= base_url('product/addproduct/' . $row['id']) ?>"
                            style=" color: red; text-decoration : none; "
                                onclick="return confirm('Are you sure you want to delete this prodcut?');" 
                                >

                                 Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>