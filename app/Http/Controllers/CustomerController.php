<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function deleteCustomer($id){
        return view('modules.customer.delete', compact('id'));
    }

    function editCustomer($id){
        return view('modules.customer.edit', compact('id'));
    }

    function addCustomer(){
        return view('modules.customer.add');
    }
}
