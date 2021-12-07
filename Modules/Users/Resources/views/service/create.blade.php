@extends('layouts.master_table')
@section('content')
  {!! Form::open(['method'=>'POST','action'=>'Modules\Users\Http\Controllers\ServiceController@store','files'=>true,'class'=>'form-row'])!!}
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('service_name','service_name',['class'=>'control-label bold']) !!}
                {!! Form::text('service_name',null,['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('photo','Photo',['class'=>'control-label bold']) !!}
                {!! Form::file('photo',null,['class'=>'form-control']) !!}
            </div>
        </div>


        <div class="">
            <div class="form-group ">
                {!! Form::submit('submit',['class'=>'btn btn-primary']) !!}
            </div>
        </div>
  {!! Form::close() !!}
@endsection