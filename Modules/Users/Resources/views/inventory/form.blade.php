@extends('users::layouts.master', [
    'class' => '',
    'elementActive' => ''
])

@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Title</h5>
        <p class="card-text">
            {!!  Form::model($inventory, ['route' => ['user-inventory.update', $inventory->id]]) !!}
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
            {!! Form::submit('Update', ['class'=>'btn btn-success float-right']) !!}

          {!! Form::close() !!}
        </p>
    </div>
</div>
@endsection
