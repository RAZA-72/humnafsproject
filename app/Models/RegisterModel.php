<?php 


namespace App\Models;


use CodeIgniter\Model;

class RegisterModel extends Model{



protected $table = 'registration_form';

protected $id = 'id';

protected $allowedFields  =  [

    'email',
    'password'



];

}