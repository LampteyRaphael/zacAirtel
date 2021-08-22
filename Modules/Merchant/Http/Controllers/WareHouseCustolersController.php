<?php

namespace Modules\Merchant\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Merchant\Entities\Items;
use Modules\Merchant\Entities\remarks;
use Modules\Merchant\Entities\wareHouse;
use Modules\Merchant\Entities\wareHouseRequest;

class WareHouseCustolersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function pending()
    {
        $wareHouseRequest=wareHouseRequest::where('remark',1)->get();
        return view('merchant::customers.pending',compact('wareHouseRequest'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function approved()
    {
        $wareHouseRequest=wareHouseRequest::where('remark',2)->get();

        return view('merchant::customers.approved',compact('wareHouseRequest'));
    }


    public function rejected()
    {
        $wareHouseRequest=wareHouseRequest::where('remark',3)->get();

        return view('merchant::customers.rejected',compact('wareHouseRequest'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('merchant::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        try{
            $wareHouseRequest=wareHouseRequest::where('id',$id)->firstOrFail();
            $items=Items::where('user_id',auth()->user()->id)->pluck('name','id')->all();
            $warehouses=wareHouse::pluck('ware_house_name','warehouse_id')->all();
            $remarks=remarks::pluck('name','id')->all();
            return view('merchant::customers.form',compact('wareHouseRequest','items','warehouses','remarks'));
        }catch (ModelNotFoundException $exception){
            return back()->withError('Ware House Request not found by ID ' . $id)->withInput();
        }
        // return view('merchant::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        try{
            $ware=wareHouseRequest::where('id',$id)->firstOrFail();

            $ware->quantity=$request->quantity;
            $ware->remark=$request->remark;
            $ware->autOfficer=auth()->user()->id;
            $ware->save();
            return redirect()->back()->with(['success'=>'Successfully Posted Messages']);
        }catch (ModelNotFoundException $exception){
            return back()->withError('Ware House Request not found by ID ' . $id)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
