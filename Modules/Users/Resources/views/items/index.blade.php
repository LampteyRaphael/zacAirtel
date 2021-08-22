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
        <p class="card-text">
            <table class="table item-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Images</th>
                        <th>Product Name</th>
                        <th>Unit Price</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </p>
    </div>
</div>


{!! Form::open(['method'=>'POST','action'=>'Modules\Users\Http\Controllers\ItemsController@store','files'=>true, 'class'=>"modal fade" ,'id'=>"items", 'data-backdrop'=>"static", 'data-keyboard'=>"false", 'tabindex'=>"-1", 'aria-labelledby'=>"staticBackdropLabel", 'aria-hidden'=>"true"]) !!}
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
                <div class=" form-group row">
                    <div class="col-md-2">
                    {!! Form::label('name', 'Create New Item', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::text('name',null, ['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-2">
                    {!! Form::label('item_unit_price', 'Item Unit Price', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::text('item_unit_price',null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                    {!! Form::label('item_image', 'Item Image', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::file('item_image',null, ['class'=>'form-control']) !!}
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

<div id="approveAdmin" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
               <div class="modal-header bg-warning">
                   <div class="modal-title">Edit User Profile</div>
                </div>
            <div class="modal-body">
                <p>
                     <div class=" form-group row">
                    <div class="col-md-2">
                    {!! Form::label('name', 'Create New Item', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::text('name',null, ['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-2">
                    {!! Form::label('item_unit_price', 'Item Unit Price', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::text('item_unit_price',null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                    {!! Form::label('item_image', 'Item Image', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::file('item_image',null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
