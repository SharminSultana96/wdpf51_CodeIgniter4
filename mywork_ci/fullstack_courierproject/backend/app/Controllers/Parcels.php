<?php

namespace App\Controllers;

use App\Models\BranchModel;
use App\Models\ParcelModel;
use CodeIgniter\RESTful\ResourceController;

class Parcels extends ResourceController
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
        $brmodel = new BranchModel();
        $data['branch'] = $brmodel->findAll();
        $model = new ParcelModel();
        $data["parcels"] = $model->orderBy('id', 'ASC')->findAll();
        // print_r($data);
        return view("parcels/parcel_list", $data);
        
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        // echo 'Hello';
        $model = new ParcelModel();
        $data['parcel'] = $model->find($id);
        // print_r($data);
        return view("parcels/view_parcel", $data);
        
    }

    

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        // $model = new ParcelModel();
        // $data['parcel'] = $model->orderBy('id', 'ASC')->findAll();
        $brmodel = new BranchModel();
        // $data['branch'] = $brmodel->findAll();
        $data['branch'] = $brmodel->orderBy('branch_name', 'ASC')->findAll();
        return view('parcels/parcel_entry', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        // $rules = [
        //     'reference_number' => 'required|min_length[5]|max_length[20]',
        //     'sender_name' => 'required|min_length[4]',
        //     'recipient_name' => 'required|min_length[4]',
        //     'status' => 'min_length[5]',
            
        // ];

        // $errors = [
        //     'reference_number' => [
        //         'required' => 'Reference Number must be fill',
        //         'min_length' => 'Minimum length must be 5',
        //     ],

        //     'sender_name' => [
        //         'required' => 'Sender Name must be fill',
        //         'min_length' => 'Minimum length 4',
        // ],
        //     'recipient_name' => [
        //         'required' => 'Recipient Name must be fill',
        //         'min_length' => 'Minimum length 4',
        // ],
        //     'status' => [
        //         'required' => 'Parcel Status Must be fill',
        //         'min_length' => 'Minimum length 5',
        // ],

        // ];

        // $validation = $this->validate($rules, $errors);
        // if(!$validation){
        //     return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        // }else{
            $data['reference_number'] = $this->request->getPost('reference_number');
            $data['sender_name'] = $this->request->getPost('sender_name');
            $data['sender_address'] = $this->request->getPost('sender_address');
            $data['sender_contact'] = $this->request->getPost('sender_contact');
            $data['recipient_name'] = $this->request->getPost('recipient_name');
            $data['recipient_address'] = $this->request->getPost('recipient_address');
            $data['recipient_contact'] = $this->request->getPost('recipient_contact');
            $data['type'] = $this->request->getPost('type');
            $data['from_branch_id'] = $this->request->getPost('branch_name');
            $data['to_branch_id'] = $this->request->getPost('branch_name');
            $data['weight'] = $this->request->getPost('weight');
            $data['height'] = $this->request->getPost('height');
            $data['width'] = $this->request->getPost('width');
            $data['length'] = $this->request->getPost('length');
            $data['price'] = $this->request->getPost('price');
            $data['status'] = $this->request->getPost('status');
            $model = new ParcelModel();
            // $data = $this->request->getPost();
            $model->save($data);
            return redirect()->to('parcels')->with('add', "Added Successfully");
        // }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $model = new ParcelModel();
        $data['parcel'] = $model->find($id);
        return view("parcels/parcel_edit", $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
    //     $validate = $this->validate([
    //         'reference_number' => 'required|min_length[5]|max_length[20]',
    //         'sender_name' => 'min_length[4]',
    //         'recipient_name' => 'min_length[4]',
    //         'status' => 'min_length[5]',
            
    //    ]);

    //    if(!$validate){
    //     return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    //    }else{
        $data['reference_number'] = $this->request->getPost('reference_number');
            $data['sender_name'] = $this->request->getPost('sender_name');
            $data['sender_address'] = $this->request->getPost('sender_address');
            $data['sender_contact'] = $this->request->getPost('sender_contact');
            $data['recipient_name'] = $this->request->getPost('recipient_name');
            $data['recipient_address'] = $this->request->getPost('recipient_address');
            $data['recipient_contact'] = $this->request->getPost('recipient_contact');
            $data['type'] = $this->request->getPost('type');
            $data['from_branch_id'] = $this->request->getPost('branch_name');
            $data['to_branch_id'] = $this->request->getPost('branch_name');
            $data['weight'] = $this->request->getPost('weight');
            $data['height'] = $this->request->getPost('height');
            $data['width'] = $this->request->getPost('width');
            $data['length'] = $this->request->getPost('length');
            $data['price'] = $this->request->getPost('price');
            $data['status'] = $this->request->getPost('status');

        $model = new ParcelModel();
        $model->update($id, $data);
        return redirect()->to('parcels')->with('update', "Updated Successfully");
    
        // }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new ParcelModel();
        $model->delete($id);
        return redirect()->to("parcels")->with('delete', "Deleted Successfully");
    }
}
