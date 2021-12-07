@extends('layouts.master_table')

@section('content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel">
      <div class="panel-body">
        <h5 class="panel-title">Network To Recharge</h5>
        <p class="panel-text">
             <table class="m-0">
                 <tbody>
                 <tr>
                   <td>
                        <input class="" type="radio" name="service" id='mServe' onclick="return mtns()">
                    </td>
                    <td>
                        <img class="service" src="{{asset('/photos/mtn-logo.png')}}" alt="img" height='50' width'50' style="padding:10px;">
                    </td>
                    <td>
                        <input class="" type="radio" name="service" onclick="return vodafones()">
                    </td>
                    <td>
                        <img class="" src="{{asset('/photos/vodafone.jpeg')}}" alt="img" height='50' width'50' style="padding:10px;">
                    </td>
                    <td>
                         <input class="" type="radio" name="service" onclick="return glos()">
                    </td>
                    <td>
                        <img class="" src="{{asset('/photos/glo.jpg')}}" alt="img" height='50' width'50' style="padding:10px;">
                    </td>
                    <td>
                         <input class="" type="radio" name="service" onclick="return airtels()">
                         </td>
                    <td>
                        <img class="" src="{{asset('/photos/airtel.jpg')}}" alt="img" height='50' width'50' style="padding:10px;">
                    </td>
                 </tr>
                 </tbody>
             </table>
        </p>

        <p>
            <tr> 
            <td>
                <img id='mtn' src="{{asset('/photos/mtn-logo.png')}}" alt="img" height='100' width'50' >
            </td> 
            
            <td>
                <img id='vodafone' class="p-2" src="{{asset('/photos/vodafone.jpeg')}}" alt="img" height='100' width'50'>
            </td>
        
            <td>
                <img id='glo' class="p-2" src="{{asset('/photos/glo.jpg')}}" alt="img" height='100' width'50'>
            </td>
        
            <td>
                <img id='airtel' class="p-2" src="{{asset('/photos/airtel.jpg')}}" alt="img" height='100' width'50'>
            </td> 
        </tr> 
        </p>
        <p>
             
         {!! Form::open(['method'=>'POST','route'=>['service.update',1],'files'=>true,'class'=>'form-row'])!!}
        <tr>
            <td>
                <div class="col-sm-12">
                    <div class="form-group ">
                        {!! Form::label('amount','Amount',['class'=>'control-label bold']) !!}
                        {!! Form::text('amount',null,['class'=>'form-control','placeholder'=>'Amount']) !!}
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td colspan>
                <div class="col-sm-12">
                    <div class="form-group ">
                        {!! Form::label('phone_number','Phone Number',['class'=>'control-label bold']) !!}
                        {!! Form::text('phone_number',null,['class'=>'form-control','Phone Number']) !!}
                    </div>
                </div>
            </td>
        </tr>

         <tr>
            <td>
                <div class="">
                    <div class="form-group ">
                        {!! Form::submit('submit',['class'=>'btn btn-primary']) !!}
                    </div>
                </div>
            </td>
        </tr>   
      {!! Form::close() !!}
        </p>
      </div>
    </div>
  </div>
  
  
  <div class="col-sm-4">
    <div class="panel">
      <div class="panel-body">
        <h5 class="panel-title">Special title treatment</h5>
        <p class="panel-text">
        
            <div class="fa fa-circle-thin float-right">
                <i class="float-right"></i>
            </div>
        
        </p>
      </div>
    </div>
  </div>


  <div class="col-sm-4">
    <div class="panel">
      <div class="panel-body">
        <h5 class="panel-title">Special title treatment</h5>
        <p class="panel-text">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
</div>



  <div class="table-responsive-sm">
    <div class="panel mb25">
        <div class="panel-body">
            <table class="table table-bordered table-condense" id="data-table">
                <thead>
                <tr>
                    <th>Transaction</th>
                    <th>Amount</th>
                    <th>Service</th>
                    <th>Status</th>
                     <th>created</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>


<script>
       $(document).ready(function() {
             $.ajaxSetup({
                 headers:{
                     'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                 }
             });
             $(function () {
                $.fn.dataTable.ext.errMode="javascript";
                 $('#data-table').DataTable({
                     processing: true,
                     serverSide: true,
                     "iDisplayLength":10,
                     ajax:"{{route('service.edit',1)}}",
                     columns: [
                         {data:'transaction_id',name:'transaction_id'},
                         {data:'amount',name:'amount'},
                         {data:'reseller_id',name:'reseller_id'},
                         {data:'status_status_id',name:'status_status_id'},
                         {data:'created_at',name:'created_at',orderable: true, searchable: true},
                     ],
                 });
             });
         });
</script>



<script>


var mtn=document.getElementById('mtn');
var vodafone=document.getElementById('vodafone');
var glo=document.getElementById('glo');
var airtel=document.getElementById('airtel');

var mtnserve=document.getElementById('mServe');


mtn.style.display="none";
vodafone.style.display="none";
glo.style.display="none";
airtel.style.display="none";


function mtns(){
mtn.style.display="block";
vodafone.style.display="none";
glo.style.display="none";
airtel.style.display="none";
}

function vodafones(){
mtn.style.display="none";
vodafone.style.display="block";
glo.style.display="none";
airtel.style.display="none";
}


function vodafones(){
    mtn.style.display="none";
vodafone.style.display="block";
glo.style.display="none";
airtel.style.display="none";
}

function glos(){
mtn.style.display="none";
vodafone.style.display="none";
glo.style.display="block";
airtel.style.display="none";

}


function airtels(){
 mtn.style.display="none";
vodafone.style.display="none";
glo.style.display="none";
airtel.style.display="block";

}

</script>

@endsection
