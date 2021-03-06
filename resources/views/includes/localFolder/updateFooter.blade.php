<div class="col-md-12">
    <div class="panel mb0" id="step6">
        <div class="panel-heading border">
            <ol class="breadcrumb mb0 no-padding">
                <li>
                    <a href="javascript:;">OFFICE USE ONLY</a>
                </li>
            </ol>
        </div>
        <div class="panel-body">
{{--            <ul class="nav">--}}
{{--                <li><span id="name_error5" class="text text-danger bold "></span></li>--}}
{{--            </ul>--}}
            @if(Auth::user()->role_id==8)
                <div class="col-md-4">
                    <div class="form-group ">
                        {!! Form::label('role_id','Role',['class'=>'control-label bold']) !!}
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                            {!! Form::select('role_id',$Adminsroles,null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
            @elseif(Auth::user()->role_id==12)
                <div class="col-md-4">
                    <div class="form-group ">
                        {!! Form::label('role_id','Role',['class'=>'control-label bold']) !!}
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                            {!! Form::select('role_id',$specialAdmins,null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('role_id','Role',['class'=>'control-label bold']) !!}
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                            {!! Form::select('role_id',[$user->role_id=>$user->role->name]+$roles,$user->role_id,['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>

            @endif

            <div class="col-md-4">
                <div class="form-group ">
                    {!! Form::label('is_active','Active Status',['class'=>'control-label bold']) !!}
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                        {!! Form::select('is_active',[1=>'Active',0=>'Not Active',3=>'Deceased'],null,['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group ">
                    {!! Form::label('password','Password',['class'=>'control-label bold']) !!}
                    <div class="input-group">
                        {!! Form::password('password',['class'=>'form-control','id'=>'myInput']) !!}
                        <div class="input-group-addon"><input type="checkbox"  onclick="myFunction()">Show
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group ">
                    {!! Form::label('members_id','Membership ID',['class'=>'control-label bold']) !!}
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user-secret"></i></div>
                        {!! Form::number('members_id',substr($user->members_id,6,9),['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>

            <div class="col-md-14">
                <div class="">
                    <div class="form-group">
                        {!! Form::label('photo_id','Photo',['class'=>'control-label']) !!}
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-photo"></i></div>
                            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">

{{--                    <button id="btn11" class="btn btn-default pull-left" onclick="return step6BackFunction()">Back</button>--}}
                    <button class="btn btn-primary pull-right" type="submit" onclick='return submitFunction()'>Update</button>
                    {!! Form::close() !!}

                    {!! Form::model($user,['method'=>'DELETE','action'=>['Locals\RegisterLocalMembersController@destroy',$user->id],'onsubmit' => 'return ConfirmDelete()'],['class'=>'form-inline'])!!}
                    <button class="btn btn-danger pull-right" type="submit">Delete</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
