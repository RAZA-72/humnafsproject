<?php 

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model {
  

     protected $table = 'categories_table';

     protected $id = 'id';

     protected $allowedFields = ['category_name','slugs'];




}