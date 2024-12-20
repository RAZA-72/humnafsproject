<?php

    namespace App\Models;

    use CodeIgniter\Model;
    

    class ContactusModel extends Model{


        protected $table = 'contact_us';

        protected $id = 'id';

        protected $allowedFields = [    
    'full_name',
    'email_id',
    'whatsapp_num',
    'subject',
    'message',
        ];
    }