<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\subcategoryStroeRequest;
use Illuminate\Support\Facades\Session;

class subCatecogryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories=SubCategory::all();
       return view('subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=category::get(['id','name']);

       return view('subcategory.create',compact('categories'));
    }

    public function store(subcategoryStroeRequest $request)
    {

        SubCategory::create([
          'category_id'=>$request->category_id,
          'name'=>$request->subcategoy_name,
          'slug'=>Str::slug($request->subcategoy_name),
          'is_active'=>$request->filled('is_active')

        ]);
        Session::flash('status','successfully created subcategory Item');
        return redirect()->route('subcategory.index');
        // dd($request->all());

    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=category::get(['id','name']);
        $subcategory=SubCategory::find($id);
        return view('subcategory.edit',compact('categories','subcategory'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(subcategoryStroeRequest $request, $id)
    {
         $SubCategory=SubCategory::find($id);
         $SubCategory->update([
            'category_id'=>$request->category_id,
            'name'=>$request->subcategoy_name,
            'slug'=>Str::slug($request->subcategoy_name),
            'is_active'=>$request->filled('is_active')

          ]);
          Session::flash('status','successfully subcategory updated');
         return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubCategory::find($id)->delete();
        Session::flash('status','successfully subcategory deleted');
        return redirect()->route('subcategory.index');
    //    dd($id);
    }
}
