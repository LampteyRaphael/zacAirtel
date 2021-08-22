<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Users\Entities\Items;
use Modules\Users\Http\Requests\ItemsRequest;
use Yajra\DataTables\Facades\DataTables;
use App\DataTables\ExportDataTable;
class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Items;
     */
    public function index(Request $request)
    {
 //return $dataTable->render('export') 


        if ($request->ajax()) {
            $data = Items::where('wareh_id',auth()->user()->ware_id)->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $toshow=route('item.index',$data->id);
                    $dataDeletes=route('item.destroy',$data->id);
                    $btn='<a data-toggle="modal"  data-target="#approveAdmin" data-names="'.$data->name.'" data-unit="'.$data->item_unit_price.'" class="btn btn-primary btn-xs" onclick="return ConfirmUpdate()" href="'.$toshow.'"><i class="fa fa-edit"></i></a>

                    <a onclick="return confirm("Are You Sure You want to delete?")" class="btn btn-danger btn-xs" href="'. $dataDeletes.'"><i class="fa fa-edit"></i></a>
                    ';
                    return $btn;
                })

                ->editColumn('created_at',function($data){
                    return $data->created_at->diffForHumans();
                })
                ->editColumn('updated_at',function($data){
                    return $data->updated_at->diffForHumans();
                })
                ->addColumn('image', function ($data) {
                    return '<img class="img-rounded" height="50" width="50" src="/images/'.$data->item_image.'" alt="">';
                })
                ->addColumn('remove',function ($data){
                    $dataDeletes=route('item.destroy',$data->id);
                    $deletes='<a onclick="return confirm("Are You Sure, You want to delete?")" class="btn btn-danger btn-xs" href="'. $dataDeletes.'"><i class="fa fa-edit"></i></a>';
                    return $deletes;
                })
                ->rawColumns(['action','image'])
                ->make(true);
        }
       return view('users::items.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('users::items.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(ItemsRequest $request)
    {
           $item=new Items();
           $item['name']=$request['name'];
           $item['user_id']=auth()->user()->id;
           $item['wareh_id']=auth()->user()->ware_id;;

           if ($file = $request->file('item_image')) {
            $request->validate([
                'item_image'=>'mimes:jpeg,bmp,png'
            ]);

            $imageNName = time() . $file->getClientOriginalName();
            $file->move('images', $imageNName);

            $item['item_image'] = $imageNName;
        }

           $item->save();

        if($item){
            return redirect()->back()->with('success','Item Successfully Saved');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('users::items.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('users::items.edit');
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
