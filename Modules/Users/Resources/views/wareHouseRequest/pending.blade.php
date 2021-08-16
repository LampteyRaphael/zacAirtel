@extends('users::layouts.master', [
    'class' => 'fa fa-edit',
    'elementActive' => ''
])

@section('content')
<?php $i=1;?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">
           <b>Pending</b>
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
                    @foreach($wareHouseRequest ?? '' as $key => $value)
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
                            <a href="{{ route('wareHouseRequest.show',$value->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                            <a href="{{ route('wareHouseRequest.destroy',$value->id) }}" onclick="return confirm('Are you sure you want to delete the request pending?')" class="btn btn-danger"><i class="fa fa-recycle"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

    </div>
</div>
@endsection
