<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $images =Image::all();
        return response()->json([
            'success'=>true,
            'data'=>$images
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
        //stores the images
        $image = new Image();
        $image->url= $request->url;
        $image->gadget_id = $request->gadget_id ;

        $image->save();

        return response()->json([
            'success'=> true,
            'message'=>'Gadget posted successfully',
            'data'=>$image
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
        //shows the gadgets with the specified id
        $image = Image::find($id);
        
        if($image){
            return response()->json([
                'success'=>true,
                'data'=>$image
            ]);
        }else{
            return response()->json([
                'success'=>false,
                'message'=>'No image with the id was found.'
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
        //update gadgets data
        $image = Image::find($id);
        if(!$image){
            return response()->json([
                'success'=>false,
                'message'=>'No company with the supplied id was found.'
            ]);
        }

        $image->url= $request->url;
        $image->gadget_id = $request->gadget_id ;
        //

        $update = $image->save();

        if(!$update){
            return response()->json([
                'success'=>false,
                'message'=>'Unable to update your info, Please try again.'
            ]);
        }else{
            return response()->json([
                'success'=>true,
                'message'=>'Image updated successfully',
                'data'=>$image
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
        //
    }
}
