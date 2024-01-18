<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('backend/category/index', compact('category'));
    }

    public function createfrom(){
        return view('backend/category/createfrom');
    }

    public function edit($category_id){
        $cat = Category::find($category_id);
        return view('backend/category/edit', compact('cat'));
    }

    public function insert(Request $request){
        // การป้องกันการกรอกข้อมูล
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255', 
        ],[
            'name.required' => "กรุณากรอกข้อมูลประเภทสินค้า",
            'name.unique' => "ชื่อนี้อยุ่ในฐานข้อมูลแล้ว",
            'name.max' => "กรอกข้อมูลได้ 255 ตัวอักษร"
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        alert()->success('บันทึกข้อมูลสำเร็จ','ข้อมูลถูกบันทึกแล้ว');
        return redirect()->route('category.index');
    }

    public function update(Request $request, $category_id){
        $category = Category::find($category_id);
        $category->name = $request->name;
        $category->update();
        alert()->success('แก้ไขข้อมูลสำเร็จ','ข้อมูลถูกบันทึกแล้ว');
        return redirect()->route('category.index');
    }

    public function delete($category_id){
        $category = Category::find($category_id);
        $category ->delete();
        alert()->success('ลบข้อมูลสำเร็จ','ข้อมูลถูกลบแล้ว');
        return redirect()->route('category.index');
    }
}
