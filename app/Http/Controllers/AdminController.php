<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;


class AdminController extends Controller
{
    public function view_category(){
        $data=category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request){
        
        $data=new category;
        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message','Categoria Adicioanda com sucesso');
}     

    public function delete_category($id){
        $data=category::find($id);

        $data->delete();
        return redirect()->back()->with('message','Categoria Deletado com sucesso');
    }

    public function view_product(){
        $category=category::all();
        return view('admin.product', compact('category'));
    }


    public function add_product(Request $request){
        
        $data=new category;
        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message','Categoria Adicioanda com sucesso');
}     

}