<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {

        return view("CRUD.index");
    }

    // Edit or Update
    public function createOrUpdate(Request $request ) {


    }

    // view 
    public function view($id) {


    
    }

    // Delete 
    public function delete($id) {


        
    }
}
