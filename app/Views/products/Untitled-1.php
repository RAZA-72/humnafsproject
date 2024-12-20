
        $shop = new ProductModel();

        $data['shop'] = $shop->find($id);


        $output = view('templates/commonheader');
        $output .= view('templates/sideview');
        $output .= view('products/edit', $data);
        $output .= view('templates/commonfotter');

        return $output;