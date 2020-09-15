<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(User $user)
    {
        $categories = Category::query()
            ->where('user_id',$user->id)
            ->get();

        return view('categories.index',[
            'categories'=>$categories ?? [],
            'user'=>$user
        ]);
    }

    public function create()
    {
        return view('categories.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required|string|min:5'
        ]);
        $data['user_id'] = auth()->id();
        Category::query()
            ->create($data);

        return redirect()->route('categories.index', auth()->user());
    }

    public function show(Category $category)
    {
        $creator = User::query()
            ->where('id',$category['user_id'])
            ->get("name")
            ->first();

        return view("categories.show",[
            "category"=>$category,
            "creator"=>$creator
        ]);
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
