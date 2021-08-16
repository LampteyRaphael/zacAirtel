@extends('users::layouts.master', [
   'class' => '',
    'elementActive' => ''
])

@section('content')
<?php $i=1;?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title float-right">
            <a class="btn btn-success" data-toggle='modal' data-target='#items' href="{{ url('users/items/create') }}">Create New Item</a>
        </h5>
        <p class="card-text">
            <table class="table table-condensed table-hover table-responsive-lg">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Item</th>
                        <th>Brands </th>
                        <th>Categories</th>
                        <th>Serial</th>
                        <th>Model</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>User</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inventory as $key => $value)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $value->item->name??''}}</td>
                        <td>{{ $value->brand->name??''}}</td>
                        <td>{{ $value->category->name??''}}</td>
                        <td><span class="badge badge-pill badge-warning">{{ $value->serial??''}}</span></td>
                        <td><span class="badge badge-pill badge-danger">{{ $value->model}}</span></td>
                        <td>{{ $value->description??''}}</td>
                        <td><span class="badge badge-pill badge-success">{{ $value->status0->name??''}}</span></td>
                        <td>{{ $value->user->name??''}}</td>
                        <td>{{ $value->created_at??''}}</td>
                        <td>
                            <a href="{{ route('user-inventory.edit',$value->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                        </td>
                        <td>
                            <a href="{{ route('user-inventory.destroy',$value->id) }}" onclick="return confirm('Are you sure you want to delete the request pending?')" class="btn btn-danger btn-sm"><i class="fa fa-recycle"></i></a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </p>
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
                    {!! Form::label('status', 'Status', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::select('status',$status+[''=>'Choose Option'],null, ['class'=>'form-control']) !!}
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
