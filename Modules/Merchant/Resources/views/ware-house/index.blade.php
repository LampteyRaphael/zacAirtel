@extends('merchant::layouts.master')
{{-- @extends('users::layouts.master', [
   'class' => '',
    'elementActive' => ''
]) --}}
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
                        <td>
                            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                        </td>
                        <td>
                            <a href="" onclick="return confirm('Are you sure you want to delete the request pending?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </p>
    </div>
</div>

{!! Form::open(['method'=>'POST','route'=>'ware-Houses.store', 'class'=>"modal fade" ,'id'=>"items", 'data-backdrop'=>"static", 'data-keyboard'=>"false", 'tabindex'=>"-1", 'aria-labelledby'=>"staticBackdropLabel", 'aria-hidden'=>"true"]) !!}
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-blue">
        <h5 class="modal-title" id="staticBackdropLabel">List Of Ware House</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>

                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('ware_house_name', 'Name Of Ware House', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::text('ware_house_name',null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('ware_house_category', 'Ware House Category', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::select('ware_house_category',[''=>'Choose Option']+$wareHouseCategory,null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('ware_house_code', 'Ware House Code', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::text('ware_house_code',null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('ware_house_address', 'Ware House Address', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::text('ware_house_address',null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('ware_house_tel', 'Ware House Tel', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::number('ware_house_tel',null, ['class'=>'form-control','rows'=>2]) !!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('ware_house_email', 'Ware House Email', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::text('ware_house_email',null, ['class'=>'form-control']) !!}
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
