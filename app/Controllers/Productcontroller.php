<?php
namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\RegisterModel;
use App\Models\UserModel;
use PhpOffice\PhpSpreadsheet\IOFactory;
use CodeIgniter\Database\Exceptions\DatabaseException;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;




use App\Models\ContactusModel;

class Productcontroller extends BaseController
{

    public function index()
    {
        $category = new CategoryModel();

        $data['category'] = $category->findAll();


        echo view('templates/commonheader')
            . view('templates/sideview')
            . view('products/addproduct', $data)
            . view('templates/commonfotter');




    


    }
    public function store()
    {
        $productimage = $this->request->getFileMultiple('Productimage');

        if ($productimage) {
            $imageNames = [];

            foreach ($productimage as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();

                    $file->move('assets/uploads/', $newName);

                    $imageNames[] = $newName;
                }
            }


            $commaSeparatedImages = implode(',', $imageNames);


            $product = new ProductModel();
            $originalPrice = $this->request->getPost('productprice');
            $discountedPrice = $this->request->getPost('sale_price');





            $discountedPercentage = (($originalPrice - $discountedPrice) / $originalPrice) * 100;








            $data = [
                'Productimage' => $commaSeparatedImages, // Save as a single string

                'collection'=>$this->request->getPost('collection'),
                'slugus' => $this->request->getPost('slugus'),
                'category_id' => $this->request->getPost('category_id'),


                'product_name' => $this->request->getPost('product_name'),

                'producturl' => $this->request->getPost('producturl'),

                'productprice' => $originalPrice,
                'sale_price' => $discountedPrice,

                'discount_perctange' => $discountedPercentage,
                'sub_category' =>$this->request->getPost('sub_category'),
                'styling_Inspiration'=>$this->request->getPost('styling_Inspiration'),	
                'size_and_fit'=>$this->request->getPost('size_and_fit'),
                'style_num' => $this->request->getPost('style_num'),
                'dispatch' => $this->request->getPost('dispatch'),
                'return_exchange' => $this->request->getPost('dispatch'),
                'composition' => $this->request->getPost('composition'),
                'package_consent' => $this->request->getPost('package_consent'),
                'kurta_fabric' => $this->request->getPost('kurta_fabric'),
                'pant_fabric' => $this->request->getPost('pant_fabric'),
                'duppata_fabric' => $this->request->getPost('duppata_fabric'),
                'neck_type' => $this->request->getPost('neck_type'),
                'sleves_type' => $this->request->getPost('sleves_type'),
                'work_type' => $this->request->getPost('work_type'),
                'product_descripiton' => $this->request->getPost('product_descripiton'),
                'techinque' => $this->request->getPost('techinque'),
                'colors' => $this->request->getPost('colors'),
                'washinginstruction' => $this->request->getPost('washinginstruction'),
                'fabricdetails' => $this->request->getPost('fabricdetails'),
                'productdetails' => $this->request->getPost('productdetails'),
                'deliverytimeline' => $this->request->getPost('deliverytimeline'),
                'internationaldelivery' => $this->request->getPost('internationaldelivery')
            ];




            // print_r($data);
            $product->insert($data);

            if ($data) {

                return redirect('product/allproduct');

            }

        } else {
            echo "No files were uploaded.";
        }
    }
        public function table()
    {


        $shopkeeper = new ProductModel();
        $data['shopkeeper'] = $shopkeeper->findAll();

        $output = view('templates/commonheader');
        $output .= view('templates/sideview');
        $output .= view('products/allproduct', $data);
        $output .= view('templates/commonfotter');

        return $output;

    }

    public function edit($id)
    {

        $shop = new ProductModel();
        $data['shop'] = $shop->find($id);
        $output = view('templates/commonheader');
        $output .= view('templates/sideview');
        $output .= view('products/edit', $data);
        $output .= view('templates/commonfotter');

        return $output;

    }



    public function update($id)
    {
        $productimage = $this->request->getFileMultiple('Productimage');

        if ($productimage) {
            $imageNames = [];

            foreach ($productimage as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();

                    $file->move('assets/uploads/', $newName);

                    $imageNames[] = $newName;
                }
            }


            $commaSeparatedImages = implode(',', $imageNames);


            $product = new ProductModel();

            $data = [
                'Productimage' => $commaSeparatedImages, // Save as a single string
                'collection'=>$this->request->getPost('collection'),

                'slugus' => $this->request->getPost('slugus'),
                'product_name' => $this->request->getPost('product_name'),
                'category_name' => $this->request->getPost('category_name'),


                'producturl' => $this->request->getPost('producturl'),
                'productprice' => $this->request->getPost('productprice'),

                'sale_price' => $this->request->getPost('sale_price'),
                'sub_category' =>$this->request->getPost('sub_category'),
                'styling_Inspiration'=>$this->request->getPost('styling_Inspiration'),	
                'size_and_fit'=>$this->request->getPost('size_and_fit'),
                'style_num' => $this->request->getPost('style_num'),
                'dispatch' => $this->request->getPost('dispatch'),
                'return_exchange' => $this->request->getPost('dispatch'),
                'composition' => $this->request->getPost('composition'),
                'package_consent' => $this->request->getPost('package_consent'),
                'kurta_fabric' => $this->request->getPost('kurta_fabric'),
                'pant_fabric' => $this->request->getPost('pant_fabric'),
                'duppata_fabric' => $this->request->getPost('duppata_fabric'),
                'neck_type' => $this->request->getPost('neck_type'),
                'sleves_type' => $this->request->getPost('sleves_type'),
                'work_type' => $this->request->getPost('work_type'),
                'product_descripiton' => $this->request->getPost('product_descripiton'),
                'techinque' => $this->request->getPost('techinque'),
                'colors' => $this->request->getPost('colors'),
                'washinginstruction' => $this->request->getPost('washinginstruction'),
                'fabricdetails' => $this->request->getPost('fabricdetails'),
                'productdetails' => $this->request->getPost('productdetails'),
                'deliverytimeline' => $this->request->getPost('deliverytimeline'),
                'internationaldelivery' => $this->request->getPost('internationaldelivery')
            ];

            $product->update($id, $data);


        }
    }
    public function delete($id)
    {

        $shop = new ProductModel();
        $shop->delete($id);

        return redirect('product/allproduct');



    }
    // public function shop_detail($slug)
    // {
    //     // Create an instance of the ProductModel
    //     $ProductModel = new ProductModel();

    //     // Fetch the product by slug
    //     $data['shop_detail'] = $ProductModel->getProductBySlug($slug);

    //     // If the product doesn't exist, show a 404 error
    //     if (!$data['shop_detail']) {
    //         throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    //     }

    //     // Fetch related products
    //     $data['related_products'] = $ProductModel->getRelatedProducts($slug);

    //     // Pass data to the view
    //     echo view('templates/frontendheader')
    //         . view('files/orders', $data)
    //         . view('templates/frontendfooter'); // Corrected spelling of 'footer'
    // }


    public function category()
    {

        
        $productModel = new CategoryModel();
       $data['category'] = $productModel->findAll();



        echo view('templates/commonheader')
            . view('templates/sideview')

            . view('products/category',$data)
            . view('templates/commonfotter');
   }


   public function add(){


    $productModel = new CategoryModel();

  $data = [

    'category_name'=>$this->request->getPost('category_name'),
    'slugs'=>$this->request->getPost('slugs')
  ];

  $productModel->insert($data);


  if($data){

    

    $output = view('templates/commonheader');

    $output .= view('templates/sideview');

    $output .= view('products/addcategory');

    $output .= view('templates/commonfotter');

    return $output;




  }

    
   }

   
   public function addcategory()
   {

       
       $productModel = new CategoryModel();

     $output = view('templates/commonheader');

     $output .= view('templates/sideview');

     $output .= view('products/addcategory');

     $output .= view('templates/commonfotter');

     return $output;

 

  }

  public function updatecategory($id){

    $category = new CategoryModel();

    $data['category'] = $category->find($id);




    $output = view('templates/commonheader');

    $output .= view('templates/sideview');

    $output .= view('products/edicategory',$data);

    $output .= view('templates/commonfotter');

    return $output;


  }




   public function deletecategory($id)
   {
       $categoryModel = new CategoryModel();

       if ($categoryModel->delete($id)) {
           return redirect()->to('/category');
       } else {
           return redirect()->to('/categories')->with('error', 'Failed to delete category.');
       }
   }




  public function sendemail()
  {
      $contactusModel = new ContactusModel(); {

          $full_name = $this->request->getVar('full_name');
          $email_id = $this->request->getVar('email_id');
          $subject = $this->request->getVar('subject') ?: 'Contact Us Inquiry';
          $whatsapp_num = $this->request->getVar('whatsapp_num');
          $messagebox = $this->request->getVar('message');

          $message = "<h3>Contact Details</h3>";
          $message .= "<p><b>Name: </b>$full_name</p>";
          $message .= "<p><b>Email: </b>$email_id</p>";
          $message .= "<p><b>Whatsapp Number: </b>$whatsapp_num</p>";
          $message .= "<p><b>Subject: </b>$subject</p>";
          $message .= "<p><b>Message: </b>$messagebox</p>";

          $email = \Config\Services::email();
          $email->setFrom('no-reply@milleniance.com', 'Humnafas');
          $email->setTo('hasanrazzaque123@gmail.com');
          $email->setSubject($subject);
          $email->setMessage($message);

          if ($email->send()) {
              $data = [
                  'full_name' => $full_name,
                  'email_id' => $email_id,
                  'whatsapp_num' => $whatsapp_num,
                  'subject' => $subject,
                  'message' => $messagebox,
              ];

              if ($contactusModel->insert($data)) {
                  $replySubject = "Thank you for reaching out to Humnafas.";
                  $replyMessage = "
                      Dear $full_name,<br>
                      Thank you for contacting us. One of our team members will contact you shortly.<br><br>
                      Regards,<br>
                      Humnafas Team
                  ";

                  $replyEmail = \Config\Services::email();
                  $replyEmail->setFrom('no-reply@milleniance.com', 'Humnafas');
                  $replyEmail->setTo($email_id);
                  $replyEmail->setSubject($replySubject);
                  $replyEmail->setMessage($replyMessage);

                  if ($replyEmail->send()) {
                    return view('templates/thankyou');
                } else {
                    echo "Failed to send email.";
                }
                
       

              }
          }
      }
  }

  public function login()
    {

        $userid = $this->request->getpost('email');
        $password = $this->request->getpost('password');

        $model = new RegisterModel();

        $id = $model->where('username', $userid)->first();

        $passwordnew = $model->where('password', $password)->first();


        if ($id && $passwordnew) {

            $output = view('templates/commonheader');
            $output .= view('files/useraccount');
            $output .= view('templates/commonfotter');
            return $output;
        } else {
            echo "user if or pasword wrong";
        }


    }

    public function thankyou(){


        return view('templates/thankyou');

    }

    public function useregister()
    {


        $user = new UserModel();

        $data = [

            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')


        ];

        $user->insert($data);


        return redirect('files/acount');



    }
    public function account(){



        $output =  view('templates/frontendheader');
        $output .= view('files/acount');
        $output .=view('templates/frontendfotter');
        return $output;

    }

 

    public function saree(){
        $categoryModel = new CategoryModel();
        $productModel = new ProductModel();
        $categoryName = "Saree";
    
        $category = $categoryModel->where('category_name', $categoryName)->first();
        if (!$category) {
            return "Category not found.";
        }
    
        $categoryId = $category['id'];
        $products = $productModel->where('category_id', $categoryId)->findAll();
    
        if (empty($products)) {
            return "No products found for the category '$categoryName'.";
        }
    
    
        $data['products'] = $products;
        $data['categoryName'] = $categoryName;
    
        return view('templates/frontendheader')
               . view('files/saree', $data)
               . view('templates/frontendfotter');
    }
    


    


    public function suits(){
        
        $categoryModel = new categoryModel();
        $productModel = new ProductModel();
    
        $categoryName ="Suits";

        $category = $categoryModel->where('category_name', $categoryName)->first();
    
        if (!$category) {

            return "Category not found.";
        }
    
       
        $categoryId = $category['id'];

        $products = $productModel->where('category_id', $categoryId)->findAll();
    
       
        if (empty($products)) {
            return "No products found for the category '$categoryName'.";
        }
    
        $data['products'] = $products;
        $data['categoryName'] = $categoryName;

        return view('templates/frontendheader')
             . view('files/suits', $data)
             . view('templates/frontendfotter');
    }

    public function orders(){

        $categoryModel = new categoryModel();
        $productModel = new ProductModel();
    
        $categoryName ="Corders";

        $category = $categoryModel->where('category_name', $categoryName)->first();
    
        if (!$category) {

            return "Category not found.";
        }
    
       
        $categoryId = $category['id'];

        $products = $productModel->where('category_id', $categoryId)->findAll();
    
       
        if (empty($products)) {
            return "No products found for the category '$categoryName'.";
        }
    
        $data['products'] = $products;
        $data['categoryName'] = $categoryName;

        return view('templates/frontendheader')
             . view('files/orders', $data)
             . view('templates/frontendfotter');
    }


    public function dress(){


        $categoryModel = new categoryModel();
        $productModel = new ProductModel();
    
        $categoryName ="Dress";

        $category = $categoryModel->where('category_name', $categoryName)->first();
    
        if (!$category) {

            return "Category not found.";
        }
    
       
        $categoryId = $category['id'];

        $products = $productModel->where('category_id', $categoryId)->findAll();
    
       
        if (empty($products)) {
            return "No products found for the category '$categoryName'.";
        }
    
        $data['products'] = $products;
        $data['categoryName'] = $categoryName;

        return view('templates/frontendheader')
             . view('files/dress', $data)
             . view('templates/frontendfotter');

    
    }
    public function duppata()
    {
        $categoryModel = new categoryModel();
        $productModel = new ProductModel();
    
        $categoryName ="Duppata";

        $category = $categoryModel->where('category_name', $categoryName)->first();
    
        if (!$category) {

            return "Category not found.";
        }
    
       
        $categoryId = $category['id'];

        $products = $productModel->where('category_id', $categoryId)->findAll();
    
       
        if (empty($products)) {
            return "No products found for the category '$categoryName'.";
        }
    
        $data['products'] = $products;
        $data['categoryName'] = $categoryName;

        return view('templates/frontendheader')
             . view('files/dupatta', $data)
             . view('templates/frontendfotter');
    }


    public function productdetail($slugus)
    {
        $productModel = new ProductModel();

        $data['product'] = $productModel->where('slugus', $slugus)->first();
        
        $data['product'] = [
            $productModel->where('slugus', $slugus)->first()
        ];
        
        if (empty($data['product'][0])) {
            return view('errors/404', ['message' => 'Product not found.']);
        }
        
        return view('files/productdetail', ['product' => $data['product']]);
        
    }
    




    
    
    
    public function producst_category($slug)
    {
        $ProductModel = new CategoryModel();

        $data['shop_detail'] = $ProductModel->where('slugs',$slug)->findAll();

        if (!$data['shop_detail']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }


        // Pass data to the view
        echo view('templates/frontendheader')
       . view('files/orders', $data)
            . view('templates/frontendfooter'); // Corrected spelling of 'footer'
    }
    
    public function cart(){



        $output =  view('templates/frontendheader');
        $output .= view('files/cart');
        $output .=view('templates/frontendfotter');
        return $output;

    }


    public function checkout()
    {

        
        $output =  view('templates/frontendheader');
        $output .= view('files/checkout');
        $output .=view('templates/frontendfotter');
        return $output;

    }
    public function wish(){



        $output =  view('templates/frontendheader');
        $output .= view('files/wish');
        $output .=view('templates/frontendfotter');
        return $output;

    }
    
        public function importData()
        {
            return view('files/exceldata');  
        }
    

        
        public function uploadData()
        {
            $table = 'producttable';
            $allowedFields = [
                'Productimage',
                'collection',
                'sub_category',
                'style_num',
                'product_name',
                'techinque',
                'productprice',
                'sale_price',
                'colors',
                'washinginstruction',
                'fabricdetails',
                'package_consent',
                'styling_Inspiration',
                'size_and_fit',
                'productdetails',
                'deliverytimeline'
            ];
        
            $file = $this->request->getFile('excel_file');
        
            if (!$file || !$file->isValid()) {
                return redirect()->back()->with('error', 'Invalid file uploaded.');
            }
        
            $fileType = $file->getClientMimeType();
            if ($fileType !== 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' &&
                $fileType !== 'application/vnd.ms-excel') {
                return redirect()->back()->with('error', 'Please upload a valid Excel file.');
            }
        
            try {
                $spreadsheet = IOFactory::load($file->getTempName());
                $sheet = $spreadsheet->getActiveSheet();
                $data = $sheet->toArray();
                $drawings = $sheet->getDrawingCollection(); 
            } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
                return redirect()->back()->with('error', 'Error reading the Excel file: ' . $e->getMessage());
            }
        
            $uploadPath = FCPATH . 'assets/uploads/products/';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true); // Create the directory if it doesn't exist
            }
        
            $images = [];
            foreach ($drawings as $drawing) {
                if ($drawing instanceof Drawing) {
                    $coordinates = $drawing->getCoordinates(); 
                    $imagePath = $drawing->getPath();
                    $imageContent = file_get_contents($imagePath);
                    $imageName = uniqid('product_', true) . '.png'; 
                    $savedPath = $uploadPath . $imageName; 
                    file_put_contents($savedPath, $imageContent);
                    $images[$coordinates] = 'assets/uploads/products/' . $imageName; // Store relative path
                }
            }
        
            $db = \Config\Database::connect();
            $builder = $db->table($table);
        
            $successCount = 0;
            $errorCount = 0;
        
            foreach ($data as $index => $row) {
                if ($index === 0) {
                    continue;
                }
        
                $rowData = [];
                foreach ($allowedFields as $key => $field) {
                    $rowData[$field] = $row[$key] ?? null;
                }
        
                $imageCell = "A" . ($index + 1); 
                if (isset($images[$imageCell])) {
                    $rowData['Productimage'] = $images[$imageCell]; 
                }
        
                try {
                    $builder->insert($rowData);
                    $successCount++;
                } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
                    $errorCount++;
                    log_message('error', 'Error inserting data: ' . $e->getMessage());
                }
            }
        
            $logo = $this->request->getFile('add_logo');
            $logoName = '';
        
            if ($logo && $logo->isValid() && !$logo->hasMoved()) {
                $logoUploadPath = FCPATH . 'assets/uploads/casestudy/';
                if (!is_dir($logoUploadPath)) {
                    mkdir($logoUploadPath, 0777, true); // Create the directory if it doesn't exist
                }
        
                $logoName = $logo->getRandomName();
                $logo->move($logoUploadPath, $logoName);
            }
        
            return redirect()->back()->with('success', "$successCount records successfully imported, $errorCount failed.");
        }
        
}
