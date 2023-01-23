<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class TestController extends BaseController
{
    public function index()
    {
        
        // $parser = \Config\Services::parser();

        $data['page_title'] = "Home Page";
        return view("pages/home_page");
        // return $perser
    }

    public function about()
    {
        return view("pages/about_page");
    }

    public function productList(){
        $pager = \Config\Services::pager();
        $model = new ProductModel();

        $data = [
            'products' => $model->paginate(3, 'group1'),
            'pager' => $model->pager,
        ];

        return view('products', $data);
    }
}
