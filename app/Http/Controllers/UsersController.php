<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    // public function index()
    // {
    //     return view('pages.users.users');
    // }
    public function __construct(User $users) {
        $this->user = $users;
    }
    
    public function index(Request $request) 
    {
        // dd($request);
        $findProducts = Product::all();        
        return view("pages.products.paginacao", compact('findProducts'));
    }
    
    public function delete(Request $request) 
    {
        
    }
}
