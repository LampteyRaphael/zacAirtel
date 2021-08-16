<?php

namespace Modules\Merchant\Http\Controllers;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Merchant\Entities\WareHouse;
use Modules\Merchant\Entities\WareHouseCategory;

class WareHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $wareHouse=WareHouse::all();
        $wareHouseCategory=WareHouseCategory::pluck('name','ware_house_categoryID')->all();
        return view('merchant::ware-house.index',compact('wareHouse','wareHouseCategory'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('merchant::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        try{
            $ware=new WareHouse();
            $ware->ware_house_name=$request->ware_house_name;
            $ware->ware_house_code=$request->ware_house_code;
            $ware->ware_house_tel=$request->ware_house_tel;
            $ware->ware_house_address=$request->ware_house_address;
            $ware->ware_house_category=$request->ware_house_category;
            $ware->user_id=auth()->user()->id;
            $ware->ware_house_email=$request->ware_house_email;
            $ware->save();
            return redirect()->back();
        }catch(Exception $e){
             return $e->getMessage();
        }
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
        return view('merchant::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
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
