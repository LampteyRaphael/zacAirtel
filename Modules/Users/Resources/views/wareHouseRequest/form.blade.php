@extends('users::layouts.master', [
    'class' => '',
    'elementActive' => ''
])

@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Title</h5>
        <p class="card-text">
            {!!  Form::model($wareHouseRequest, ['route' => ['wareHouseRequest.update', $wareHouseRequest->id]]) !!}
            {{-- {!! Form::model($wareHouseRequest,['method'=>'PUT','action'=>['Modules\Users\Http\Controllers\WareHouseRequestController@update',$wareHouseRequest->id],'onsubmit' => 'return ConfirmDelete()'])!!} --}}
            {{-- {!! Form::model($wareHouseRequest,['method'=>'post','route'=>['wareHouseRequest.update'] ]) !!} --}}
            <div class="row form-group">
                <div class="col-md-2">
                {!! Form::label('ware_id', 'Request Ware House', ['class'=>'control-label']) !!}
                </div>
                <div class="col-md-8">
                    {!! Form::select('ware_id',[$wareHouseRequest->ware_id=>$wareHouseRequest->wareHouse->ware_house_name]+$warehouses,null, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-2">
                {!! Form::label('item_id', 'Request Item', ['class'=>'control-label']) !!}
                </div>
                <div class="col-md-8">
                    {!! Form::select('item_id',[$wareHouseRequest->item_id=>$wareHouseRequest->item->name]+$items,null, ['class'=>'form-control']) !!}
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
            {!! Form::submit('Saved', ['class'=>'btn btn-success float-right']) !!}
          {!! Form::close() !!}
        </p>
    </div>
</div>
@endsection
