<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all users
        $users = User::all();
        return response()->json([
            'success'=>true,
            'data'=>$users
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
        $pass1 = $request->password;
        $cPass = $request->cPassword;
        if($pass1 != $cPass){
            return response()->json([
                'success'=> false,
                'message'=>'Passwords did not match'
            ]);
        }
        
        if(User::where('email', $request->email)->count() != 0){
            return response()->json([
                'success'=>false,
                'message'=>'A simmilar user with the same email exists.'
            ]);
        }
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->location = $request->location;
        $user->password = $request->password;
        
        $user->save();

        return response()->json([
            'success'=> true,
            'message'=>'User registered successfully',
            'data'=>$user
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
        $user = User::find($id);
        
        if($user){
            return response()->json([
                'success'=>true,
                'data'=>$user
            ]);
        }else{
            return response()->json([
                'success'=>false,
                'message'=>'No users with the id was found.'
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
        $user = User::find($id);
        if(!$user){
            return response()->json([
                'success'=>false,
                'message'=>'No user with the supplied id was found.'
            ]);
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->location = $request->location;
        // $user->password = $request->password;

        $update = $user->save();

        if(!$update){
            return response()->json([
                'success'=>false,
                'message'=>'Unable to update your info, Please try again.'
            ]);
        }

        return response()->json([
            'success'=>true,
            'message'=>'User updated successfully',
            'data'=>$user
        ]);
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if(!$user){
            return response()->json([
                'success'=>false,
                'message'=>'No user with the supplied id was found'
            ]);
        }
        $user->delete();
        return response()->json([
            'success'=>true,
            'message'=>'User deleted successfully'
        ]);
    }

    //custom methods here
    public function login(Request $request){
         
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email',$email)->first();

        if(!$user){
            return response()->json([
                'success'=>false,
                'message'=>'No user with the given email was found'
            ]);
        }
        
        if($user->password != $password){
            return response()->json([
                'success'=>false,
                'message'=>'Wrong password. Please try again'
            ]);
        }

        return response()->json([
            'success'=>true,
            'message'=>'Login successful',
            'data'=>$user
        ]);
   }
    
    public function getCompanyGadgets()
    {
        echo "I will be getting company gadgets in this method";
    }
}
