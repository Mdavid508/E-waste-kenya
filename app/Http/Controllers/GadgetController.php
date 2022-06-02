<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Gadget;
use App\Models\Image;

class GadgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //search for a gadget
        if($request->query('q') && $request->query('q')!=''){
            $searchString = $request->query('q');
            $gadgets = Gadget::where(function ($query) use ($searchString){
                $query->where('name','LIKE',"%$searchString%");
            })->get();
            
            return response()->json([
                'success'=>true,
                'data'=>$gadgets
            ]);
        }
        //Get all gadgets in the database        
        $gadgets = Gadget::with('images')->get();
        return response()->json([
            'success'=>true,
            'data'=>$gadgets
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
        //store gadgets in the database
        
        //save the companies data to the gadget model
        $gadget = new Gadget();
        $gadget->user_id = $request->user_id;        
        $gadget->category_id = $request->category_id;
        $gadget->name = $request->name;
        $gadget->location = $request->location;
        $gadget->description = $request->description;
        
        $gadget->save();

        if(!$request->image){
            return response()->json([
                'success'=>false,
                'message'=>'At least one image is required'
            ]);
        }

        $ext = explode('/',explode(':',substr($request->image, 0, strpos($request->image, ';')))[1])[1];
        $filename = 'images/'.time().".".$ext;

        $fileExact = explode(',', $request->image)[1];
        $file = base64_decode($fileExact);
        $location = fopen(public_path($filename), "a");
        $success = fwrite($location, $file);
        fclose($location);

        $image = new Image();
        $image->url = $filename;

        $gadget->images()->save($image);

        return response()->json([
            'success'=> true,
            'message'=>'Gadget Registered successfully',
            'data'=>$gadget
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
        $gadget = Gadget::with(['images','user'])->find($id);
        
        if($gadget){
            return response()->json([
                'success'=>true,
                'data'=>$gadget
            ]);
        }else{
            return response()->json([
                'success'=>false,
                'message'=>'No gadget with the id was found.'
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
        $gadget = Gadget::find($id);
        if(!$gadget){
            return response()->json([
                'success'=>false,
                'message'=>'No gadget with the supplied id was found.'
            ]);
        }

        $gadget->name = $request->name;  
        $gadget->description = $request->description;
        $gadget->location = $request->location;
        // $user->password = $request->password;

        $update = $gadget->save();

        if(!$update){
            return response()->json([
                'success'=>false,
                'message'=>'Unable to update your info, Please try again.'
            ]);
        }else{
            return response()->json([
                'success'=>true,
                'message'=>'Gadget updated successfully',
                'data'=>$gadget
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
        //delete a gadget
        $gadget = Gadget::find($id);
        if(!$gadget){
            return response()->json([
                'success'=>false,
                'message'=>'No gadget with the supplied id was found'
            ]);
        }
        $gadget->delete();
        return response()->json([
            'success'=>true,
            'message'=>'Gadget deleted successfully'
        ]);
    }


    //custom methods appear here
    //all user gadgets
    public function getUserGadgets(Request $request, $id){
        $user = User::find($id);
        if(!$user){
            return response()->json([
                'success'=>false,
                'message'=>'No user with the supplied Id was found'
            ]);
        }

        $userGadgets = User::with('gadgets')->get();
        return response()->json([
            'success'=>true,
            'data'=>$userGadgets
        ]);
    }
    //single user gadget
    public function getUserGadget(Request $request,$userId, $gadgetId){
        $user = User::find($userId);
        if(!$user){
            return response()->json([
                'success'=>false,
                'message'=>'No user with the supplied Id was found'
            ]);
        }

        $userGadget = User::with('gadget')->get();
    }
}
