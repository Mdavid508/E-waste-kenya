<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //gets all categories in the dbase
        $categories = Category::all();
        return response()->json([
            'success'=>true,
            'data'=>$categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $category = new Category();
        $category->name = $request->name;        
                
        $category->save();

        return response()->json([
            'success'=> true,
            'message'=>'category Registered successfully',
            'data'=>$category
        ]);
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
        $category = Category::find($id);
        
        if($category){
            return response()->json([
                'success'=>true,
                'data'=>$category
            ]);
        }else{
            return response()->json([
                'success'=>false,
                'message'=>'No category with the id was found.'
            ]);
        }
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
        $category = Category::find($id);
        if(!$category){
            return response()->json([
                'success'=>false,
                'message'=>'No category with the supplied id was found.'
            ]);
        }

        $category->name = $request->name;  
        
        // $user->password = $request->password;

        $update = $category->save();

        if(!$update){
            return response()->json([
                'success'=>false,
                'message'=>'Unable to update your info, Please try again.'
            ]);
        }else{
            return response()->json([
                'success'=>true,
                'message'=>'category updated successfully',
                'data'=>$category
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete a category
        $category = Category::find($id);
        if(!$category){
            return response()->json([
                'success'=>false,
                'message'=>'No category with the supplied id was found'
            ]);
        }
        $category->delete();
        return response()->json([
            'success'=>true,
            'message'=>'Category deleted successfully'
        ]);
    }
}
