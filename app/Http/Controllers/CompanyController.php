<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all companies
        $companies = Company::all();
        return response()->json([
            'success'=>true,
            'data'=>$companies
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
        //validate the password and email so that the password is consistent and email is not duplicated
        $pass1 = $request->password;
        $cPass = $request->cPassword;
        
        if($pass1 != $cPass){
            return response()->json([
                'success'=> false,
                'message'=>'Passwords did not match'
            ]);
        }
        if(Company::where('email', $request->email)->count() != 0){
            return response()->json([
                'success'=>false,
                'message'=>'A similar Company with the same email exists.'
            ]);
        }
        if(Company::where('phone', $request->phone)->count() != 0){
            return response()->json([
                'success'=>false,
                'message'=>'A similar Company with the same phone exists.'
            ]);
        }
        //save the companies data to the Company model
        $company = new Company();
        $company->name = $request->name;        
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->location = $request->location;
        $company->password = $request->password;
        
        $company->save();

        return response()->json([
            'success'=> true,
            'message'=>'Company Registered successfully',
            'data'=>$company
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
        //shows the company with the specified id
        $company = Company::find($id);
        
        if($company){
            return response()->json([
                'success'=>true,
                'data'=>$company
            ]);
        }else{
            return response()->json([
                'success'=>false,
                'message'=>'No Company with the id was found.'
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
        //update company data
        $company = Company::find($id);
        if(!$company){
            return response()->json([
                'success'=>false,
                'message'=>'No company with the supplied id was found.'
            ]);
        }

        $company->name = $request->name;        
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->location = $request->location;
        // $user->password = $request->password;

        $update = $company->save();

        if(!$update){
            return response()->json([
                'success'=>false,
                'message'=>'Unable to update your info, Please try again.'
            ]);
        }else{
            return response()->json([
                'success'=>true,
                'message'=>'Company updated successfully',
                'data'=>$company
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
        //delete a company
        $company = Company::find($id);
        if(!$company){
            return response()->json([
                'success'=>false,
                'message'=>'No Company with the supplied id was found'
            ]);
        }
        $company->delete();
        return response()->json([
            'success'=>true,
            'message'=>'Company deleted successfully'
        ]);
    }
}
