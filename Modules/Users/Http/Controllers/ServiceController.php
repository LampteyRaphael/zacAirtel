<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Users\Entities\Service;
use Modules\Users\Entities\Payments;
use Yajra\DataTables\Facades\DataTables;
use MyOne4All\TppClient;
use MyOne4All\Exceptions\TppException;
use MyOne4All\Models\DataBundle;
use MyOne4All\NetworkCodes;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $api="95ee7430f90011eb893cc98034d40326";
        $secrete="MCoU4dmgzN";
        $tppClient = new TppClient($api, $secrete, "retailer");

        return $tppClient->getBalance(); # 0.0

// send airtime implementation
// $airtime_response = $tppClient->sendAirtime("0249577997", 1, "trans03423423", NetworkCodes::AUTO_DETECT);
// if($airtime_response->isSuccessful()){
//     echo "airtime sent";
// }else{
//     echo "Failed: ".$airtime_response->getErrorMessage();
// }

        $service=  Service::all();
        return view('users::service.index',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('users::service.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
       $service=new Service();
       $service['service_name'] = $request["service_name"];
       if ($file = $request->file('photo')) {
        $name = time() . $file->getClientOriginalName();
        $file->move('images', $name);
        $service['photo'] = $name;
    }
        $service->save();
       return redirect()->back()->with(['success'=>'Saved']);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('users::service.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Request $request, $id)
    {
         if ($request->ajax()) {

            // return Payments::all();
            // $id=Auth::user()->district_id;

           // $locals_id=Locals::where('district_id',$id)->pluck('id');

            // $data = User::select('id','members_id','role_id','created_at','photo_id','name','region_id','area_id','district_id','local_id','birthDate','is_active')->whereIn('local_id', $locals_id)->whereIn('role_id',[1,2,3,4,5])
            //     ->where('is_active', 3)->where('officeHeld','=','children ministry')->get();
             return Datatables::of(Payments::all())

             ->editColumn('reseller_id', function ($data) {
               return $data->service->service_name??'';
            })

            ->editColumn('status_status_id', function ($data) {
              return $data->status->name??'';
           })

           ->editColumn('created_at', function ($data) {
            return $data->created_at->diffForHumans();
         })

            ->rawColumns(['reseller_id','status_status_id','created_at'])->make(true);


            //  return Datatables::collection(Service::all())->make(true);
         }

        return view('users::service.edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
       $rand= rand(999999,000000);

       $payment=new Payments();
       $payment['amount']=$request['amount'];
       $payment['transaction_id']=$rand;
       $payment['commission_id']=1;
       $payment['status_status_id']=1;
       $payment['user_id']=1;
       $payment['reseller_id']=1;
       $payment->save();

       return redirect()->back()->with(['success'=>'Requested! Please wait']);

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
