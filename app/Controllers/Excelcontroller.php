<?php

namespace App\Controllers;

use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\ProductModel;

class Excelcontroller extends BaseController
{
    public function upload()
    {
        return view('files/exceldata'); // Create this view to upload the Excel file
    }

    public function import()
    {
        // Handle the uploaded file
        $file = $this->request->getFile('excel_file');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $filePath = $file->getTempName();

            // Load the Excel file
            $spreadsheet = IOFactory::load($filePath);
            $sheet = $spreadsheet->getActiveSheet();
            $data = $sheet->toArray();

            // Insert data into the database
            $model = new ProductModel();
            foreach ($data as $index => $row) {
                // Skip the header row
                if ($index == 0) {
                    continue;
                }

                $model->insert([
                    'Productimage' => $row[0], // Replace with your actual column names
                    'category_id' => $row[1],
                    'collection' => $row[2],
                    'style_num' => $row[3],
                    'product_name' => $row[4],
                    'techinque' => $row[5],
                    'productprice' => $row[6],
                    'sale_price' => $row[7],
                    'colors' => $row[8],
                    'washinginstruction' => $row[9],
                    'fabricdetails' => $row[10],
                    'productdetails' => $row[11],
                    'deliverytimeline' => $row[12],

                ]);
            }

            return redirect()->back()->with('success', 'Data imported successfully!');
        } else {
            return redirect()->back()->with('error', 'Invalid file or upload error.');
        }
    }
}
