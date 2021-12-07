<?php

namespace Modules\Users\Http\Controllers;

use App\DataTables\InventoryDatatables;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Users\Entities\Brands;
use Modules\Users\Entities\Category;
use Modules\Users\Entities\Inventory;
use Modules\Users\Entities\Items;
use Modules\Users\Entities\StatusCategory;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(InventoryDatatables $dataTable )
    {
         return $dataTable->render('users::inventory.index');

        //  $inventory=Inventory::where('ware_house_id',auth()->user()->ware_id)->get();
        //  $brands=Brands::where('user_id',auth()->user()->id)->pluck('name','id')->all();;
        //  $categorys=Category::where('user_id',auth()->user()->id)->pluck('name','id')->all();
        //  $items=Items::where('user_id',auth()->user()->id)->pluck('name','id')->all();
        //  $status=StatusCategory::pluck('name','id')->all();
        // return view('users::inventory.index',compact('inventory','brands','items','categorys','brands','status'));


    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('users::inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $inv=new Inventory();
        $inv['brand_id']=$request->brand_id;
        $inv['item_id']=$request->item_id;
        $inv['category_id']=$request->category_id;
        $inv['serial']=$request->serial;
        $inv['status']=$request->status;
        $inv['model']=$request->model;
        $inv['qty']=$request->qty;
        $inv['ware_house_id']=auth()->user()->ware_id;
        $inv['user_id']=auth()->user()->id;
        $inv['item_unit_price']=$request->item_unit_price;
        $inv['description']=$request->description;
        $inv->save();
        return redirect()->back()->with(['success'=> 'Successfully Save']);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('users::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $inventory=Inventory::where('id',$id)->where('user_id',auth()->user()->id)->firstOrFail();
        $brands=Brands::where('user_id',auth()->user()->id)->pluck('name','id')->all();;
        $categorys=Category::where('user_id',auth()->user()->id)->pluck('name','id')->all();
        $items=Items::where('user_id',auth()->user()->id)->pluck('name','id')->all();
        $status=StatusCategory::pluck('name','id')->all();
       return view('users::inventory.form',compact('inventory','brands','items','categorys','brands','status'));
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
            $inv=Inventory::where('id',$id)->where('user_id',auth()->user()->id)->firstOrFail();
            $inv['brand_id']=$request->brand_id;
            $inv['item_id']=$request->item_id;
            $inv['category_id']=$request->category_id;
            $inv['serial']=$request->serial;
            $inv['status']=$request->status;
            $inv['model']=$request->model;
            $inv['ware_house_id']=1;
            $inv['user_id']=auth()->user()->id;
            $inv['description']=$request->description;
            $inv->save();
            return redirect()->back();
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
        try{
            $inv=Inventory::where('id',$id)->where('user_id',auth()->user()->id)->firstOrFail();
            $inv->delete();
            return redirect()->back();
        }catch (ModelNotFoundException $exception){
            return back()->withError('Ware House Request not found by ID ' . $id)->withInput();
        }
    }
}
