<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(Request $request){
        $categories = Category::all();
        return view('category.index',compact('categories'));
        
    }
    public function addForm() {
        return view('category.add');
    }
    public function store(Request $request) {
        $name = $request->input('name');
        $category = new Category;
        $category->name = $name;
        $category->save();
        return redirect()->route('category.index');
    }
    public function editForm($id){
        $model = Category::find($id);
        return view('category.edit',compact('model'));

    }
    public function saveEdit($id){
        $name = $request->input('name');
        $model = Category::find($id);
        $model->name = $name;
        $model->save();
        return redirect()->route('category.index');

    }
}
