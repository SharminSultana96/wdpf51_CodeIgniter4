<?php

namespace App\Controllers;

use App\Database\Migrations\Products as MigrationsProducts;
use App\Models\ProductModel;
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
        $model = new ProductModel();
        $data["products"] = $model->findAll();
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
        return view('products/product_entry');
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
            'product_name' => 'required|min_length[5]|max_length[20]',
            'product_details' => 'min_length[10]',
            'product_price' => 'required|numeric'
        ];

        $errors =
        [
                'product_name' => [
                    'required' => 'product name must be fill',
                    'min_length' => 'minimum length 5',
                    'max_length' => 'Product name must be fill',
            ],
                'product_details' => [
                    'required' => 'product name must be fill',
                    'min_length' => 'Minimum length 10',
            ],

                'product_price' => [
                    'required' => 'product name must be fill',
                    'numeric' => 'Number only',
                ],

            ];

            $validation = $this->validate($rules, $errors);
            if(!$validation){
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }else{
                $model = new ProductModel();
                $data = $this->request->getPost();
                $model->save($data);
                return redirect()->to('products')->with('add', "Added Successfully");
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
            'product_price' => 'required|numeric'
        ]);
        
        if(!$validate){
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }else{
            $model = new ProductModel();
            $data['product_name'] = $this->request->getPost('product_name'); 
            $data['product_details'] = $this->request->getPost('product_details'); 
            $data['product_price'] = $this->request->getPost('product_price'); 
            $model->update($id, $data);
            return redirect()->to('products')->with('msg', "Updated Successfully");
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
