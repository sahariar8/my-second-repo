<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(){
        return view('backend/pages/dashboard');
    }
    public function create(){
        return view('backend/pages/category');
    }
    public function createproduct(){
        return view('backend/pages/product');
    }
    public function insert(Request $request){

        $category = new Category;
        $category->cname = $request->cname;
        $category->img = $request->img;
        $category->save();

        return back()->with('notification','Category added successfully');
        return view('backend/pages/category');
        
    }
    public function store(){
        $category = Category::all();
        return view('backend.pages.mcategory',compact('category'));
    }

}
