<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model{

    protected $table = 'dummy';

    protected $id = 'id';

    protected $allowedFields = [

        'username',
        'password'
    ];
}