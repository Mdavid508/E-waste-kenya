<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class GadgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        return response()->json([
            'success'=>true,
            'message'=>'You hit the users index'
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
        echo "you hit user gadget show id: ".$id;
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
