<?php

namespace App\Controllers;
use App\Models\BranchModel;
use CodeIgniter\RESTful\ResourceController;

class Branches extends ResourceController
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
        // $model = new BranchModel();
        // $data["branch"] = $model->findAll();
        $model = new BranchModel();
        $data["branches"] = $model->orderBy('id', 'ASC')->findAll();
        // print_r($data);
        return view("branches/branch_list", $data);
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
        $model = new BranchModel();
        $data['branch'] = $model->orderBy('id', 'ASC')->findAll();
        return view('branches/branch_entry', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = [
            'branch_name' => 'required|min_length[5]|max_length[20]',
            'branch_phone' => 'min_length[10]',
            'branch_details' => 'min_length[3]',
            'branch_image' => [
                'uploaded[branch_image]',
                'mime_in[branch_image,image/jpg,image/jpeg,image/png]',
                'max_size[branch_image,1024]',
            ]
        ];

        $errors = [
            'branch_name' => [
                'required' => 'Branch name must be fill',
                'min_length' => 'Minimum length must be 5',
                'max_length' => 'Branch name must be fill',
            ],

            'branch_phone' => [
                'required' => 'Branch Phone must be fill',
                'min_length' => 'Minimum length must be 10',
            ],

            'branch_details' => [
                'required' => 'Branch Details must be fill',
                'min_length' => 'Minimum length 10',
        ],


            'branch_image' => [
                'mime_in' => 'Only jpg,jpeg,png are allowed',
                'max_size' => 'Not more than 1MB',
            ]
        ];

        $validation = $this->validate($rules, $errors);
        if(!$validation){
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }else{
            $img = $this->request->getFile('branch_image');
            $path = "assets/uploads/";
            $img->move($path);

            $data['branch_name'] = $this->request->getPost('branch_name');
            $data['branch_phone'] = $this->request->getPost('branch_phone');

            $data['branch_details'] = $this->request->getPost('branch_details');
    
            $namepath = $path . $img->getName();
            $data['branch_image'] = $namepath;

            $model = new BranchModel();
            // $data = $this->request->getPost();
            $model->save($data);
            return redirect()->to('branches')->with('add', "Added Successfully");
        }

    }
        
        // $validate = $this->validate([
        //     'staff_name' => 'required|min_length[5]|max_length[20]',
        //     'staff_email' => 'required|min_length[10]|max_length[30]',
        //     'staff_phone' => 'required|min_length[10]|max_length[20]',
        //     'branch_id' => 'required|numeric'
        // ]);

        // if(!$validate){
        //     return view("staffs/staff_entry", ['validation' => $this->validator]);
        // }else{
        //     $model = new StaffModel();
        //     $data = $this->request->getPost();
        //     $model->save($data);
        //     return redirect()->to('staffs');
        // }
    

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
       $model = new BranchModel();
       $data['branch'] = $model->find($id);
       return view("branches/branch_edit", $data);
    }
    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
       $validate = $this->validate([
            'branch_name' => 'required|min_length[5]|max_length[20]',
            'branch_phone' => 'required|min_length[10]',
            'branch_details' => 'required|min_length[10]',
            'branch_image' => [
                'uploaded[branch_image]',
                'mime_in[branch_image,image/jpg,image/jpeg,image/png]',
                'max_size[branch_image,1024]',
            ]
       ]);

       if(!$validate){
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
       }else{
        $img = $this->request->getFile('branch_image');
        $path = "assets/uploads/";
        $img->move($path);
        $namepath = $path . $img->getName();
        $data['branch_image'] = $namepath;

        $data['branch_name'] = $this->request->getPost('branch_name');
        $data['branch_phone'] = $this->request->getPost('branch_phone');
        $data['branch_details'] = $this->request->getPost('branch_details');

        $model = new BranchModel();
        $model->update($id, $data);
        return redirect()->to('branches')->with('update', "Updated Successfully");
    
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new BranchModel();
        $model->delete($id);
        return redirect()->to("branches")->with('delete', "Deleted Successfully");
    }
}
