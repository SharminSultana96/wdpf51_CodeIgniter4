<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StaffModel;
use App\Models\BranchModel;
use App\Models\ProductModel;
use CodeIgniter\API\ResponseTrait;

class Frontend extends BaseController
{
     use ResponseTrait;
    public function StaffList()
    {
       $model = new StaffModel();
       $staffs = $model->orderBy('staff_name', 'ASC')->findAll();
       return $this->respond($staffs);
    }

    public function BranchList()
    {
       $model = new BranchModel();
       $branches = $model->orderBy('branch_name', 'ASC')->findAll();
       return $this->respond($branches);
    }

    public function ProductList()
    {
       $model = new ProductModel();
       $products = $model->orderBy('product_category', 'ASC')->findAll();
       return $this->respond($products);
    }
}
