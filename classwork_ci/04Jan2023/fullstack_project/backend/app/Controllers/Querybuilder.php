<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Querybuilder extends BaseController
{
    public function index()
    {

    // Q-1:
        $db     = \Config\Database::connect('query_builder');

        // $builder = $db->table('employees')->select('firstName, lastName, email');

        // $raw = $builder->where(array('jobTitle' => 'Sales Rep'));
        // echo "<pre>";;
        // $data['employees'] = $raw->get()->getResultArray();
        // print_r($data);
       
        // Ans:16


        // Q-2:

        // $builder = $db->table('employees')->select('firstName, lastName, email');

        // $raw = $builder->where(array('jobTitle' => 'Sales Rep'));
        // $result = $raw->where(array('reportsTo' => '1143'));

        // echo "<pre>";;
        // $data['employees'] = $result->get()->getResultArray();
        // print_r($data);

        // Ans:5


        // Q-3:

        //  $builder = $db->table('employees, offices')->select('firstName, lastName, email, city, country');

        // $raw = $builder->where(array('employees.officeCode = offices.office'));
        // $result = $raw->where(array('country' => 'USA'));

        // echo "<pre>";;
        // $data = $result->get()->getResultArray();
        // print_r($data);

        // Q-4:

        // $builder = $db->table('orders');
        // $builder->select('customerName, phone, city, orderNumber, orderDate, status');
        // $row = $builder->join('customers', 'customers.customerNumber' = 'orders.customerNumber');
        // $data = $row->get()->getResult();
        // echo "<pre>";
        // print_r($data);


        // Q-5:

        // $builder = $db->table('customers');
        // $builder->select('customerName, phone, city, orders.orderNumber, orderDate, status, quantityOrdered, priceEach');
        // $raw = $builder->join('orders', 'orders.customerNumber = customers.customerNumber');
        // $raw = $builder->join('orderdetails', 'orderdetails.orderNumber = orders.orderNumber');
        // echo "<pre>";
        // $data = $raw->get()->getResultArray();
        // print_r($data);

        // Ans: 2995




    }
    
}