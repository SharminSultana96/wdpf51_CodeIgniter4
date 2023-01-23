<?php

namespace App\Controllers;

use App\Models\UserModel;

use App\Controllers\BaseController;

class Usercrud extends BaseController
{
    public function index()
    {
        $userObj = new UserModel();
        $data['myusers'] = $userObj->orderBy('id', 'DESC')->findAll();
        
        // $data['myusers'] = $userObj->find();
        // echo "<pre>";
        // print_r($data);
       
        return view('user_display', $data); 
    }

    //User create section
    public function create()
    {
        helper(['form']);
        return view('user_create');
    }

    public function store()
    {
    //Form Validation section
    helper(['form']);
    $rules = [
        'u_name' => 'required',
        'u_email' => 'required',
    ];
    if($this->validate($rules)){

    //User Insert section
        $userObj = new UserModel();
        $data['name'] = $this->request->getVar('u_name');
        $data['email'] = $this->request->getVar('u_email');
        // echo "<pre>";
        // print_r($data); 
        $userObj->insert($data);
        $this->response->redirect('/users');

        }else{
            $data['validation'] = $this->validator;
            return view('user_create', $data);
        }
    }

    //Delete section
    public function delete($id)
    {
        // echo $id;
        $userObj = new UserModel();
        $userObj->where('id', $id)->delete($id);
        // $this->response->redirect('/users');
    }

    //Edit section
    public function edit($id)
    {
        $userObj = new UserModel();
        // $userObj->where('id', $id)->find($id);
        // $userObj->find($id);
        $data['user'] = $userObj->find($id);
        // print_r($data);
        return view('user_edit', $data);
        $this->response->redirect('/users');

    }

    //Update section
    public function update()
    {
        $userObj = new UserModel();
        $id = $this->request->getVar('u_id');
        $data['name'] = $this->request->getVar('u_name');
        $data['email'] = $this->request->getVar('u_email');
        $userObj->update($id, $data);
        $this->response->redirect('/users');
        
    }
}