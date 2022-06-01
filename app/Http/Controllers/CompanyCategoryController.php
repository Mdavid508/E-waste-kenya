<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories_company;
use App\Models\Category;
use App\Models\Company;
class CompanyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyCategories = Company::with('categories')->get();
        
        return response()->json([
            'success'=>true,
            'message'=>'',
            'data'=>$companyCategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $companyId, $categoryId)
    {
        $category =  Category::find($categoryId);
        if($category){
            return response()->json([
                'success'=>false,
                'message'=>'No category with the given Id was found'
            ]);
        }

        $Categories_company = new Categories_company();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
