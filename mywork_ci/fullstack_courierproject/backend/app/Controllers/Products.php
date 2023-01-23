<?php

namespace App\Controllers;

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
        $data["products"] = $model->orderBy('id', 'ASC')->findAll();
        // print_r($data);
        return view("products/product_list", $data);
        // return $this->respond($data);
    
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
        $model = new ProductModel();
        $data['product'] = $model->orderBy('id', 'ASC')->findAll();
        return view('products/product_entry', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = [
            'product_category' => 'required|min_length[5]|max_length[20]',
            'product_details' => 'min_length[3]',
            'product_image' => [
                'uploaded[product_image]',
                'mime_in[product_image,image/jpg,image/jpeg,image/png]',
                'max_size[product_image,1024]',
            ]
        ];

        $errors = [
            'product_category' => [
                'required' => 'Category Name must be fill',
                'min_length' => 'Minimum length must be 5',
                'max_length' => 'Category Name must be fill',
            ],

            'product_details' => [
                'required' => 'Product Details must be fill',
                'min_length' => 'Minimum length 10',
        ],


            'product_image' => [
                'mime_in' => 'Only jpg,jpeg,png are allowed',
                'max_size' => 'Not more than 1MB',
            ]
        ];

        $validation = $this->validate($rules, $errors);
        if(!$validation){
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }else{
            $img = $this->request->getFile('product_image');
            $path = "assets/uploads/";
            $img->move($path);

            $data['product_category'] = $this->request->getPost('product_category');
            $data['product_details'] = $this->request->getPost('product_details');
    
            $namepath = $path . $img->getName();
            $data['product_image'] = $namepath;

            $model = new ProductModel();
            // $data = $this->request->getPost();
            $model->save($data);
            return redirect()->to('products')->with('add', "Added Successfully");
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
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
        $validate = $this->validate([
            'product_category' => 'required|min_length[5]|max_length[20]',
            'product_details' => 'min_length[3]',
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

        $data['product_category'] = $this->request->getPost('product_category');
        $data['product_details'] = $this->request->getPost('product_details');

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
