@extends('users::layouts.master', [
/*    'class' => '',
    'elementActive' => 'brands'*/
])

@section('content')
<?php $i=1;?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title float-right">
            <a class="btn btn-success" data-toggle='modal' data-target='#items' href="{{ url('users/items/create') }}">Create New Brands</a>
        </h5>
        <p class="card-text">
            <table class="table table-condensed table-hover table-responsive-lg">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Category Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
            <tbody>
                @foreach($brands as $key => $value)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $value->name}}</td>
                        <td>{{ $value->created_at->diffForHumans()}}</td>
                        <td>{{ $value->updated_at->diffForHumans()}}</td>
                        <td>
                            <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger"><i class="fa fa-recycle"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </p>
    </div>
</div>

{!! Form::open(['method'=>'POST','route'=>'brands.store', 'class'=>"modal fade" ,'id'=>"items", 'data-backdrop'=>"static", 'data-keyboard'=>"false", 'tabindex'=>"-1", 'aria-labelledby'=>"staticBackdropLabel", 'aria-hidden'=>"true"]) !!}
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header  bg-dark">
        <h5 class="modal-title" id="staticBackdropLabel">This form is to add new brand of an items</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
                <div class="row">
                    <div class="col-md-2">
                    {!! Form::label('name', 'Create New Brand', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::text('name',null, ['class'=>'form-control']) !!}
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
