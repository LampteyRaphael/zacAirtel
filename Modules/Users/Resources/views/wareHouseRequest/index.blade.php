@extends('users::layouts.master', [
/*    'class' => '',
    'elementActive' => 'brands'*/
])

@section('content')
<?php $i=1;?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title float-right">
            <a class="btn btn-success" data-toggle='modal' data-target='#items' href="{{ url('users/items/create') }}">Create New Item</a>
        </h5>

            <table class="table table-condensed table-hover table-responsive-lg">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>User</th>
                        <th>Item</th>
                        <th>Quanntity </th>
                        <th>Ware House</th>
                        <th>quantityIssued</th>
                        <th>remark</th>
                        <th>autOfficer</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($wareHouseRequest as $key => $value)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><span class="badge badge-pill badge-success">{{ $value->user->name??''}}</span></td>
                        <td>{{ $value->item->name??''}}</td>
                        <td>{{ $value->quantity}}</td>
                        <td><span class="badge badge-pill badge-light">{{ $value->wareHouse->ware_house_name??''}}</span></td>
                        <td>{{ $value->quantityIssued}}</td>
                        <td>
                        @if(!empty($value))
                            @if($value->remarks->name =='approved')
                            <span class="badge badge-pill badge-success">{{ $value->remarks->name??''}}</span>
                            @elseif($value->remarks->name =='pending')
                            <span class="badge badge-pill badge-warning">{{ $value->remarks->name??''}}</span>
                            @elseif($value->remarks->name =='rejected')
                            <span class="badge badge-pill badge-danger">{{ $value->remarks->name??''}}</span>
                            @elseif($value->remarks->name =='hold')
                            <span class="badge badge-pill badge-info">{{ $value->remarks->name??''}}</span>
                            @endif
                        @endif
                        </td>
                        <td>{{ $value->autOfficer}}</td>
                        <td>{{ $value->created_at->diffForHumans()}}</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa fa-recycle"></i></button>
                            <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

    </div>
</div>


{!! Form::open(['method'=>'POST','route'=>'user-inventory.store', 'class'=>"modal fade" ,'id'=>"items", 'data-backdrop'=>"static", 'data-keyboard'=>"false", 'tabindex'=>"-1", 'aria-labelledby'=>"staticBackdropLabel", 'aria-hidden'=>"true"]) !!}
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header  bg-dark">
        <h5 class="modal-title" id="staticBackdropLabel">Add New Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('item_id', 'Add Item', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::select('item_id',$items+[''=>'Choose Option'],null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('category_id', 'Add Category', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::select('category_id',$categorys+[''=>'Choose Option'],null, ['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('brand_id', 'Add Brand', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::select('brand_id',$brands+[''=>'Choose Option'],null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('serial', 'Add Serial', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::text('serial',null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('model', 'Item Model Number', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::text('model',null, ['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('description', 'Description', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::textarea('description',null, ['class'=>'form-control','rows'=>2]) !!}
                    </div>
                </div>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        {!! Form::submit('Saved', ['class'=>'btn btn-primary float-right']) !!}
      </div>
    </div>
  </div>
  {!! Form::close() !!}

@endsection
