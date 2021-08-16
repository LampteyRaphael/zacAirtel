@extends('users::layouts.master', [
/*    'class' => '',
    'elementActive' => 'brands'*/
])

@section('content')
<?php $i=1;?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">List The Item You Use In Your Business</h5>
        <p class="card-text">
            {!! Form::open(['method'=>'POST','action'=>'Modules\Users\Http\Controllers\ItemsController@store']) !!}
                <div class="row">
                    <div class="col-md-2">
                    {!! Form::label('name', 'Create New Item', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::text('name',null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="row">
                <div class="form-group">
                    {!! Form::submit('Saved', ['class'=>'btn btn-success float-right']) !!}
                </div>
                </div>
            {!! Form::close() !!}
        </p>
    </div>
</div>

@endsection
