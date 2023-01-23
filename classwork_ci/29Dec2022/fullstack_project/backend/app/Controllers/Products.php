<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;
use CodeIgniter\RESTful\ResourceController;

class Products extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    function __construct(){
        helper(['form', 'url']);
    }
    public function index()
    {
        $model = new CategoryModel();
        $data["category"] = $model->findAll();
        $model = new ProductModel();
        $data["products"] = $model->orderBy('id', 'ASC')->findAll();
        //print_r($data);
        return view("products/product_list", $data);
  
       
  
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $model = new CategoryModel();
        $data['category'] = $model->orderBy('category_name', 'ASC')->findAll();
        return view('products/product_entry', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        // $validation = \Config\Services::validation();

        $rules =
        [
            'product_name' => 'required|min_length[3]|max_length[50]',
            'product_details' => 'min_length[3]',
            'product_price' => 'required|numeric',
            'product_image' => [
                    'uploaded[product_image]',
                    'mime_in[product_image,image/jpg,image/jpeg,image/png]',
                    'max_size[product_image,1024]',
            ]
        ];

        $errors =
        [
                'product_name' => [
                    'required' => 'Product Name must be fill',
                    'min_length' => 'minimum length 5',
                    'max_length' => 'Product name must be fill',
            ],
                'product_details' => [
                    'required' => 'Product Details must be fill',
                    'min_length' => 'Minimum length 10',
            ],

                'product_price' => [
                    'required' => 'Product Price must be fill',
                    'numeric' => 'Number only',
                ],

                'product_image' => [
                    'mime_in' => 'Only jpg,jpeg,png are allowed',
                    'max_size' => 'Not more than 1MB',
                ]

            ];

            echo $validation = $this->validate($rules, $errors);
            if(!$validation){
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }else{
                $img = $this->request->getFile('product_image');
                $path = "assets/uploads/";
                $img->move($path);

                $data['product_name'] = $this->request->getPost('product_name');
                $data['product_details'] = $this->request->getPost('product_details');
                $data['product_price'] = $this->request->getPost('product_price');
                $data['product_category'] = $this->request->getPost('category_name');
                
                $namepath = $path . $img->getName();
                $data['product_image'] = $namepath;

                $model = new ProductModel();
                $model->save($data);
                return redirect()->to('products')->with('add', "Add Successfully");
            }


        // $validate = $this->validate([
        //     'product_name' => 'required|min_length[5]|max_length[20]',
        //     'product_details' => 'required|min_length[10]',
        //     'product_price' => 'required|numeric'                                                                                                                                                                                                                                                                                                                                                                    
        // ]);
        
        // if(!$validate){
        //     return view("products/product_entry", ['validation' => $this->validator]);
        // }else{
        //     $model = new ProductModel();
        //     $data = $this->request->getPost();
        //     $model->save($data);
        //     return redirect()->to('products');
        // }
        // echo "<pre>";
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
    //   echo "Yes";
    $model = new ProductModel();
    $data['product'] = $model->find($id);
    return view("products/product_edit", $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        // echo "yes";

        $validate = $this->validate([
            'product_name' => 'required|min_length[5]|max_length[20]',
            'product_details' => 'required|min_length[10]',
            'product_price' => 'required|numeric',
            'product_image' => [
                // 'uploaded[product_image]',
                'mime_in[product_image,image/jpg,image/jpeg,image/png]',
                'max_size[product_image,1024]',
            ]
        ]);
        
        if(!$validate){
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }else{
            $img = $this->request->getFile('product_image');
                $path = "assets/uploads/";
                $img->move($path);
                $namepath = $path . $img->getName();
                $data['product_image'] = $namepath;

                $data['product_name'] = $this->request->getPost('product_name');
                $data['product_details'] = $this->request->getPost('product_details');
                $data['product_price'] = $this->request->getPost('product_price');
                

                $model = new ProductModel();
                $model->update($id, $data);
                return redirect()->to('products')->with('update', "Updated Successfully");
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
       $model = new ProductModel();
       $model->delete($id);
       return redirect()->to("products")->with('delete', "Deleted Successfully");
    
    }
}
