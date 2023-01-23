<?php

namespace App\Controllers;

use App\Models\StaffModel;
use App\Models\BranchModel;
use CodeIgniter\RESTful\ResourceController;

class Staffs extends ResourceController
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
        $model = new BranchModel();
        $data["branch"] = $model->findAll();
        $model = new StaffModel();
        $data["staffs"] = $model->orderBy('id', 'ASC')->findAll();
        // print_r($data);
        return view("staffs/staff_list", $data);
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
        $data['branch'] = $model->orderBy('branch_name', 'ASC')->findAll();
        return view('staffs/staff_entry', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = [
            'staff_name' => 'required|min_length[5]|max_length[20]',
            'staff_email' => 'min_length[10]|max_length[30]',
            'staff_phone' => 'min_length[10]',
            'branch_id' => 'required|numeric',
            'staff_image' => [
                'uploaded[staff_image]',
                'mime_in[staff_image,image/jpg,image/jpeg,image/png]',
                'max_size[staff_image,1024]',
            ]
        ];

        $errors = [
            'staff_name' => [
                'required' => 'Staff name must be fill',
                'min_length' => 'Minimum length must be 5',
                'max_length' => 'Staff name must be fill',
            ],

            'staff_email' => [
                'required' => 'Staff Email must be fill',
                'min_length' => 'Minimum length must be 10',
                'max_length' => 'Staff name must be fill',
            ],

            'staff_phone' => [
                'required' => 'Staff Phone must be fill',
                'min_length' => 'Minimum length must be 10',
            ],

            'branch_id' => [
                'required' => 'Staff Branch ID must be fill',
                'numeric' => 'Number only', 
            ],

            'staff_image' => [
                'mime_in' => 'Only jpg,jpeg,png are allowed',
                'max_size' => 'Not more than 1MB',
            ]
        ];

        $validation = $this->validate($rules, $errors);
        if(!$validation){
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }else{
            $img = $this->request->getFile('staff_image');
            $path = "assets/uploads/";
            $img->move($path);

            $data['staff_name'] = $this->request->getPost('staff_name');
            $data['staff_email'] = $this->request->getPost('staff_email');
            $data['staff_phone'] = $this->request->getPost('staff_phone');
            $data['branch_id'] = $this->request->getPost('branch_id');

            
            $namepath = $path . $img->getName();
            $data['staff_image'] = $namepath;

            $model = new StaffModel();
            // $data = $this->request->getPost();
            $model->save($data);
            return redirect()->to('staffs')->with('add', "Added Successfully");
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
       $model = new StaffModel();
       $data['staff'] = $model->find($id);
       return view("staffs/staff_edit", $data);
    }
    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
       $validate = $this->validate([
            'staff_name' => 'required|min_length[5]|max_length[20]',
            'staff_email' => 'required|min_length[10]',
            'staff_phone' => 'required|min_length[10]',
            'branch_id' => 'required|numeric',
            'staff_image' => [
                'uploaded[staff_image]',
                'mime_in[staff_image,image/jpg,image/jpeg,image/png]',
                'max_size[staff_image,1024]',
            ]
       ]);

       if(!$validate){
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
       }else{
        $img = $this->request->getFile('staff_image');
        $path = "assets/uploads/";
        $img->move($path);
        $namepath = $path . $img->getName();
        $data['staff_image'] = $namepath;

        $data['staff_name'] = $this->request->getPost('staff_name');
        $data['staff_email'] = $this->request->getPost('staff_email');
        $data['staff_phone'] = $this->request->getPost('staff_phone');
        $data['branch_id'] = $this->request->getPost('branch_id');

        $model = new StaffModel();
        $model->update($id, $data);
        return redirect()->to('staffs')->with('update', "Updated Successfully");
    
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new StaffModel();
        $model->delete($id);
        return redirect()->to("staffs")->with('delete', "Deleted Successfully");
    }
}
