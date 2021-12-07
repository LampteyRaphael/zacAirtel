@extends('layouts.master_table')
@section('content')
    @if($service)
        @foreach($service as $key => $value)
        <div class="col-md-3">
        <div class="panel">
            <div class="panel-body" id="main">
                <p class="panel-text">
                    <img id='imgg' src="{{$value->photo}}" alt="img" style="height:150px; width:250px;">
                </p>
                 <p class="panel-text">
                   Recharge <a id='btn' href="{{route('service.edit',$value->service_id)}}" class="btn btn-primary btn-xs" role="button">Button</a>
                </p>
            </div>
            <div class="panel-footer">
            </div>
        </div>

        </div>

        @endforeach
    @endif



@endsection

