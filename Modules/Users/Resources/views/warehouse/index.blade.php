@extends('users::layouts.master', [
   'class' => '',
    'elementActive' => ''
])

@section('content')
<?php  $i=1;?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">
           <b> List Of Ware House</b>
        </h5>
        <h5 class="card-title float-right">
            <a class="btn btn-success" data-toggle='modal' data-target='#items' href="#">Make Request To Ware House</a>
        </h5>
        <p class="card-text">
            <table class="table table-condensed table-hover table-responsive-lg">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Ware House</th>
                        <th>Ware House Code</th>
                        <th>Ware House Address </th>
                        <th>Ware House Telephone</th>
                        <th>Ware House Email</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($wareHouse as $key => $value)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><span class="badge badge-pill badge-success">{{ $value->ware_house_name??''}}</span></td>
                        <td>{{ $value->ware_house_code??''}}</td>
                        <td>{{ $value->ware_house_address??''}}</td>
                        <td><span class="badge badge-pill badge-warning">{{ $value->ware_house_tel??''}}</span></td>
                        <td>{{ $value->ware_house_email??''}}</td>
                        <td>{{ $value->created_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </p>
    </div>
</div>

{!! Form::open(['method'=>'POST','route'=>'warehouse.store', 'class'=>"modal fade" ,'id'=>"items", 'data-backdrop'=>"static", 'data-keyboard'=>"false", 'tabindex'=>"-1", 'aria-labelledby'=>"staticBackdropLabel", 'aria-hidden'=>"true"]) !!}
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-blue">
        <h5 class="modal-title" id="staticBackdropLabel">Make Request To Ware House</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>

                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('ware_id', 'Request Ware House', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::select('ware_id',$warehouses+[''=>'Choose Option'],null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('item_id', 'Request Item', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::select('item_id',[''=>'Choose Option']+$items,null, ['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('quantity', 'Quantities', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::number('quantity',null, ['class'=>'form-control','rows'=>2]) !!}
                    </div>
                </div>
        </p>
      </div>
      <div class="modal-footer bg-blue">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        {!! Form::submit('Saved', ['class'=>'btn btn-success float-right']) !!}
      </div>
    </div>
  </div>
  {!! Form::close() !!}
@endsection
