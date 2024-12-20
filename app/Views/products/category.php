<div class="card-body"
    style="height: 200px; width: 1250px;  margin-left: 290px; margin-bottom: 500px; margin-top: 90px; ">
    <div class="table-responsive">
        <button>
            <a href="<?= base_url('addcategory'); ?>" class="btn btn-sm btn-warning shadow-sm px-3 py-1 text-white"
                style="font-weight: 500; background-color:blue;">
                <i class="bi bi-pencil-square"></i> Add category
            </a>
        </button>
        <table class="table table-striped table-hover">
            <thead style="background-color: #f8f9fa; border-bottom: 2px solid #dee2e6;">

                <tr class="text-center">
                    <th scope="col" style="padding: 12px; color: #495057; border-right: 1px solid #dee2e6;">id</th>
                    <th scope="col" style="padding: 12px; color: #495057; border-right: 1px solid #dee2e6;">
                        Category_list
                    </th>
                    <th scope="col" style="padding: 12px; color: #495057; border-right: 1px solid #dee2e6;">
                        Category_slugs
                    </th>
                    <th scope="col" style="padding: 12px; color: #495057; border-right: 1px solid #dee2e6;">Created_at
                    </th>
                    <th scope="col" style="padding: 12px; color: #495057; border-right: 1px solid #dee2e6;">Update_at
                    </th>
                    <th scope="col" style="padding: 12px; color: #495057;">Update</th>

                    <th scope="col" style="padding: 12px; color: #495057;">Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($category as $row): ?>
                    <tr class="text-center">
                        <td><?= $row['id'] ?></td>


                        <td><?= $row['category_name'] ?></td>
                        <td><?= $row['slugs'] ?></td>

                        <td><?= $row['created_at'] ?></td>
                        <td><?= $row['updated_at'] ?></td>

                        <td>

                            <a href="<?= base_url('editcategory') . $row['id'] ?>"
                           style=" color: blue; text-decoration : none; ">
                             Update category
                            </a>
                        </td>
                        
                        <td>
    <a href="<?= base_url('/deletecategory/' . $row['id']); ?>" 
       onclick="return confirm('Are you sure you want to delete this category?');" 
       style="color: red; text-decoration: none;">
        Delete
    </a>
</td>


                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>