<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;
use App\Models\Gadget;

class CompanyGadgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($companyId)
    {
        $gadgets = Gadget::where('user_id', $companyId)->with('company')->get();
        
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
    public function store(Request $request, $companyId)
    {
        //
        $company = Company::find($companyId);
        if(!$company){
            return response()->json([
                'success'=>false,
                'message'=>'No company with the supplied Id was found'
            ]);
        }
        
        $gadget = new Gadget();
        $gadget->name = $request->name;
        $gadget->description = $request->description;
        $gadget->location = $request->location;

        $create = $company->gadgets()->create($gadget);
        if(!$create){
            return response()->json([
                'success'=>false,
                'message'=>'Unable to create gadget'
            ]);
        }

        return response()->json([
            'success'=>true,
            'data'=>$gadget
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($companyId, $gadgetId)
    {
        $gadget = Gadget::where('user_id', $companyId)->find($gadgetId);

        return response()->json([
            'success'=>true,
            'message'=>'',
            'data'=>$gadget
        ]);

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
