@extends('users::layouts.pointOfSale', [
   'class' => '',
    'elementActive' => ''
])

@section('content')
<?php $i=1;?>
 <div class='row mt-2'>
           <div class="col">
          <div class="card bg-primary">
              <div class="card-body">
                  <h5 class="card-title">Title2</h5>
                  <p class="card-text">Content</p>
              </div>
          </div>
      </div>
      <div class="col">
          <div class="card bg-success">
              <div class="card-body">
                  <h5 class="card-title">Title3</h5>
                  <p class="card-text">Content</p>
              </div>
          </div>
      </div>
      <div class="col">
          <div class="card  bg-warning">
              <div class="card-body">
                  <h5 class="card-title">Title4</h5>
                  <p class="card-text">Content</p>
              </div>
          </div>
      </div>
</div>


<div class="row">

    <div class="col-4" height='100'>
        <div class="card pointlft">
            <div class="card-body">
                <p class="card-text">
                    
                    <div class='row'>
                          <div class='col-md-3'>
                               @foreach($pointOfSale as $key => $value)
                              
                              <div class="card">
                                  <div class="card-body">
                                      <p class="card-text">Content</p>
                                  </div>
                              </div>
                              @endforeach
                          </div>
                    </div>
                </p>
            </div>
        </div>
    </div>
   
    <div class="col-4 mt-5">
        <div class="card pointrt">
            <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">
                {!! Form::open(['method'=>'POST','action'=>'Modules\Users\Http\Controllers\PointOfSaleController@store' ]) !!}
                    <div class="col-md-2">
                    {!! Form::label('item_id', 'Item', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            {!! Form::select('item_id',$item,null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('qty', 'Quanntity', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::number('qty',0, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('unit_price', 'Unit Price', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::number('unit_price',0, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('charges', 'Charges', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::number('charges',0, ['class'=>'form-control']) !!}
                    </div>
                </div>

                 <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('discount', 'Discount', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::number('discount',0, ['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-2">
                    {!! Form::label('sub_total', 'Sub total', ['class'=>'control-label']) !!}
                    </div>
                    <div class="col-md-8">
                        {!! Form::number('sub_total',0, ['class'=>'form-control','rows'=>2]) !!}
                    </div>
                </div>
                        {!! Form::submit('Saved', ['class'=>'btn btn-primary']) !!}

                {!! Form::close() !!}
                </p>
            </div>
       


        <div class='row mt-5'>
           <div class="col">
          <div class="card bg-primary">
              <div class="card-body">
                  <h5 class="card-title">Daily Total</h5>
                  <p class="card-text">Content</p>
              </div>
          </div>
      </div>
      <div class="col">
          <div class="card bg-success">
              <div class="card-body">
                  <h5 class="card-title">Monthly Total</h5>
                  <p class="card-text">Content</p>
              </div>
          </div>
      </div>
      <div class="col">
          <div class="card  bg-warning">
              <div class="card-body">
                  <h5 class="card-title">Yearly Total</h5>
                  <p class="card-text">Content</p>
              </div>
          </div>
      </div>
        </div>

 <div class='row mt-2'>
           <div class="col">
          <div class="card bg-primary">
              <div class="card-body">
                  <h5 class="card-title">Title2</h5>
                  <p class="card-text">Content</p>
              </div>
          </div>
      </div>
      <div class="col">
          <div class="card bg-success">
              <div class="card-body">
                  <h5 class="card-title">Title3</h5>
                  <p class="card-text">Content</p>
              </div>
          </div>
      </div>
      <div class="col">
          <div class="card  bg-warning">
              <div class="card-body">
                  <h5 class="card-title">Title4</h5>
                  <p class="card-text">Content</p>
              </div>
          </div>
      </div>
        </div>
    </div>
     <div class="col-4">
        <div class="card pointlft">
            <div class="card-body">
                <p class="card-text">
                    <table class="table table-hover table-sm table-responsive-lg table-success shadow-lg">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Item Name</th>
                                <th>Qty</th>
                                <th>Charges</th>
                                <th>U.Price</th>
                                <th>Sub Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $a=1;?>
                        @if($data)
                             @foreach($data as $key => $value)
                                <tr>
                                    <td>{{ $a++ }}</td>
                                    <td>{{ $value->item->name??'' }}</td>
                                    <td>{{ $value->qty }}</td>
                                    <td>{{ $value->charges??'' }}</td>
                                    <td>{{ $value->unit_price??'' }}</td>
                                    <td>{{ $value->sub_total??'' }}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    {{$data->links()}}
                </p>
               
            </div>
        </div>
    </div>
</div>
 </div>
@endsection

  @if($data)
        @foreach($data as $key => $value)
        <tr class='wow fadeInRight'>
            <td>{{ $a++ }}</td>
            <td>{{ $value->item->name??'' }}</td>
            <td>{{ $value->qty }}</td>
            <td>{{ $value->charges??'' }}</td>
            <td>{{ $value->unit_price??'' }}</td>
            <td>{{ $value->sub_total??'' }}</td>
        </tr>
        @endforeach
    @endif