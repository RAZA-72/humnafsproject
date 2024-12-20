<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    // Set the table name
    protected $table = 'producttable';

    // Set the primary key
    protected $primaryKey = 'id';

    // Define allowed fields for mass assignment
    protected $allowedFields = [
        'slugus',
        'category_id',
        'Productimage',
        'collection',
        'product_name',
        'producturl',
        'productprice',
        'sale_price',
        'discount_perctange',
        'sub_category',
        'styling_Inspiration',	
        'size_and_fit',
        'style_num',
        'dispatch',
        'return_exchange',
        'composition',
        'package_consent',
        'kurta_fabric',
        'pant_fabric',
        'duppata_fabric',
        'neck_type',
        'sleves_type',
        'work_type',
        'product_descripiton',
        'techinque',
        'colors',
        'washinginstruction',
        'fabricdetails',
        'productdetails',
        'deliverytimeline',
        'internationaldelivery'

    ];

    




}











