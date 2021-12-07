<div class="col-md-12">
{{--    <progress id="progressbar"  value="0" max="100" style="width:100%"></progress>--}}
    <div class="panel mb0" id="step1">
        <div class="panel-heading border">
            <ol class="breadcrumb mb0 no-padding">
                <li>
                    <a href="javascript:;">PERSONAL DETAILS</a>
                </li>
                <li>
                    <span style="color: red">*</span> is compulsory
                </li>
            </ol>
        </div>
        <div class="panel-body">
            <ul class="nav">
                <li><span id="name_error" class="text text-danger bold "></span></li>
            </ul>
            <div class="col-sm-4">
                <div class="form-group clear">
                    {!! Form::label('name','Full Name',['class'=>'control-label bold']) !!}
                    <span style="color: red">*</span>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'FirstName/Middle Name/Surname','required'=>'required']) !!}
                    </div>

                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group clear">
                    {!! Form::label('gender','Gender',['class'=>'control-label bold']) !!}
                    <span style="color: red">*</span>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-genderless"></i></div>
                        {!! Form::select('gender',[''=>'--Choose Option--','male'=>'Male','female'=>'Female'],null,['class'=>'form-control','required'=>'required']) !!}
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group clear">
                    {!! Form::label('birthDate','Date Of Birth(YY-mm-dd))',['class'=>'control-label bold']) !!}
                    <span style="color: red">*</span>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        {!! Form::date('birthDate',null,['class'=>'form-control','Placeholder'=>'YY-mm-dd','required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group clear">
                    {!! Form::label('placeOfBirth','Place Of Birth',['class'=>'control-label']) !!}
                    <span style="color: red">*</span>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        {!! Form::text('placeOfBirth',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group ">
                    {!! Form::label('hometown','Hometown',['class'=>'control-label bold']) !!}
                    <span style="color: red">*</span>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        {!! Form::text('hometown',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group ">
                    {!! Form::label('hometown_region','Home Town Region',['class'=>'control-label bold']) !!}
                    <span style="color: red">*</span>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                        {!! Form::text('hometown_region',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-group ">
                    {!! Form::label('nationality','Nationality',['class'=>'control-label bold']) !!}
                    <span style="color: red">*</span>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>


                        {!! Form::select('nationality',[''=>'--Choose Options--']+nationality(),null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-group ">
                    {!! Form::label('languagess','Language(s) Spoken(eg.twi,english) maximum 5',['class'=>'control-label bold']) !!}
                    <span style="color: red">*</span>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                        {!! Form::text('languagess',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-group ">
                    {!! Form::label('maritalStatus','Marital Status',['class'=>'control-label bold']) !!}
                    <span style="color: red">*</span>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                        {!! Form::select('maritalStatus',[''=>'Choose Option','married'=>'Married','single'=>'Single',
                        'divorce'=>'Divorce','separated'=>'Separated','widow(er)'=>'Widow(er)'

                        ],null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    {!! Form::label('mariagetype','Type Of Marriage',['class'=>'control-label bold']) !!}
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                        {!! Form::select('mariagetype',[''=>'--Choose Option--','customary'=>'Customary','ordinance'=>'Ordinance'],null,['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-group">
                    {!! Form::label('spouseName','Name Of Spouse',['class'=>'control-label']) !!}
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        {!! Form::text('spouseName',null,['class'=>'form-control',]) !!}
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    {!! Form::label('numberOfChildren','Number Of Children',['class'=>'control-label']) !!}
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        {!! Form::number('numberOfChildren',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group ">
                    {!! Form::label('fathers_name',' Name Of Father',['class'=>'control-label','required'=>'required']) !!}
                    <span style="color: red">*</span>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        {!! Form::text('fathers_name',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group ">
                    {!! Form::label('fathers_hometown','Father\'s Hometown',['class'=>'control-label','required'=>'required']) !!}
                    <span style="color: red">*</span>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        {!! Form::text('fathers_hometown',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group ">
                    {!! Form::label('mothers_name',' Name Of Mother',['class'=>'control-label']) !!}
                    <span style="color: red">*</span>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        {!! Form::text('mothers_name',null,['class'=>'form-control','id'=>'mothers_name','required'=>'required']) !!}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group ">
                    {!! Form::label('mothers_hometown','Mother\'s  Hometown',['class'=>'control-label']) !!}
                    <span style="color: red">*</span>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        {!! Form::text('mothers_hometown',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>

{{--            <div class="col-md-12">--}}
{{--                <button id="btn2" class="btn btn-primary pull-right" onclick="step1Function();">Continue</button>--}}
{{--                <button id="btn1" class="btn btn-danger pull-right" onclick="step0BackFunction();">Back</button>--}}
{{--            </div>--}}

        </div>
    </div>
</div>
<?php
function nationality(){
    return  $nationaliyty=[
        "afghan"=>"afghan",
        "albanian"=> "albanian",
        "algerian"=> "algerian",
        "american"=>"american",
        "andorran"=> "andorran",
        "angolan"=>"angolan",
        "antiguans"=> "antiguans",
        "argentinean"=> "argentinean",
        "armenian"=> "armenian",
        "australian"=>"australian",
        "austrian"=>"austrian",
        "azerbaijani"=>"azerbaijani",
        "bahamian"=>"bahamian",
        "bahraini"=> "bahraini",
        "bangladeshi"=>"bangladeshi",
        "barbadian"=>"barbadian",
        "barbudans"=>"barbudans",
        "batswana"=>"batswana",
        "belarusian"=> "belarusian",
        "belgian"=> "belarusian",
        "belizean"=>"belizean",
        "beninese"=>"beninese",
        "bhutanese"=>"bhutanese",
        "bolivian"=> "bolivian",
        "bosnian"=>"bosnian",
        "brazilian"=>"brazilian",
        "british"=>"british",
        "bruneian"=> "bruneian",
        "bulgarian"=>"bulgarian",
        "burkinabe"=> "burkinabe",
        "burmese"=>"burmese",
        "burundian"=>"burundian",
        "cambodian"=>"cambodian",
        "cameroonian"=> "cameroonian",
        "canadian"=> "canadian",
        "cape verdean"=> "cape verdean",
        "central african"=>"central african",
        "chadian"=>"chadian",
        "chilean"=>"chilean",
        "chinese"=> "chinese",
        "colombian"=>"colombian",
        "comoran"=>"comoran",
        "congolese"=>"congolese",
        "costa rican"=> "costa rican",
        "croatian"=> "croatian",
        "cuban"=>"cuban",
        "cypriot"=>"cypriot",
        "czech"=>  "czech",
        "danish"=>"danish",
        "djibouti"=> "djibouti",
        "dominican"=>"dominican",
        "dutch"=>"dutch",
        "east timorese"=> "east timorese",
        "ecuadorean"=>"ecuadorean",
        "egyptian"=>"egyptian",
        "emirian"=>"emirian",
        "equatorial guinean"=>"equatorial guinean",
        "eritrean"=>"eritrean",
        "estonian"=>"estonian",
        "ethiopian"=> "ethiopian",
        "fijian"=> "fijian",
        "filipino"=>"filipino",
        "finnish"=>"finnish",
        "french"=> "french",
        "gabonese"=>"gabonese",
        "gambian"=>"gambian",
        "georgian"=>"georgian",
        "german"=>"german",
        "ghanaian"=>"ghanaian",
        "greek"=> "greek",
        "grenadian"=>"grenadian",
        "guatemalan"=> "guatemalan",
        "guinea-bissauan"=> "guinea-bissauan",
        "guinean"=> "guinean",
        "guyanese"=>  "guyanese",
        "haitian"=>"haitian",
        "herzegovinian"=> "herzegovinian",
        "honduran"=>"honduran",
        "hungarian"=> "hungarian",
        "icelander"=> "icelander",
        "indian"=> "indian",
        "indonesian"=>"indonesian",
        "iranian"=>  "iranian",
        "iraqi"=>"iraqi",
        "irish"=> "irish",
        "israeli"=>"israeli",
        "italian"=>"italian",
        "ivorian"=> "ivorian",
        "jamaican"=>"jamaican",
        "japanese"=>"japanese",
        "jordanian"=> "jordanian",
        "kazakhstani"=>"kazakhstani",
        "kenyan"=> "kenyan",
        "kittian and nevisian"=>"kittian and nevisian",
        "kuwaiti"=>"kuwaiti",
        "kyrgyz"=> "kyrgyz",
        "laotian"=> "laotian",
        "latvian"=>"latvian",
        "lebanese"=>"lebanese",
        "liberian"=> "liberian",
        "libyan"=> "libyan",
        "liechtensteiner"=>  "liechtensteiner",
        "lithuanian"=>"lithuanian",
        "luxembourger"=> "luxembourger",
        "macedonian"=>"macedonian",
        "malagasy"=> "malagasy",
        "malawian"=>"malawian",
        "malaysian"=> "malaysian",
        "maldivan"=>  "maldivan",
        "malian"=>  "malian",
        "maltese"=>"maltese",
        "marshallese"=>"marshallese",
        "mauritanian"=> "mauritanian",
        "mauritian"=> "mauritian",
        "mexican"=> "mexican",
        "micronesian"=>"micronesian",
        "moldovan"=>"moldovan",
        "monacan"=> "monacan",
        "mongolian"=>   "mongolian",
        "moroccan"=>  "moroccan",
        "mosotho"=>"mosotho",
        "motswana"=> "motswana",
        "mozambican"=> "mozambican",
        "namibian"=>"namibian",
        "nauruan"=> "nauruan",
        "nepalese"=>"nepalese",
        "new zealander"=> "new zealander",
        "ni-vanuatu"=> "ni-vanuatu",
        "nicaraguan"=>"nicaraguan",
        "nigerien"=>  "nigerien",
        "north korean"=>"north korean",
        "northern irish"=> "northern irish",
        "norwegian"=>"norwegian",
        "omani"=> "omani",
        "pakistani"=> "pakistani",
        "palauan"=> "palauan",
        "panamanian"=>  "panamanian",
        "papua new guinean"=> "papua new guinean",
        "paraguayan"=>  "paraguayan",
        "peruvian"=>  "peruvian",
        "polish"=>  "polish",
        "portuguese"=>  "portuguese",
        "qatari"=> "qatari",
        "romanian"=> "romanian",
        "russian"=>"russian",
        "rwandan"=> "rwandan",
        "saint lucian"=>"saint lucian",
        "salvadoran"=> "salvadoran",
        "samoan"=>  "samoan",
        "san marinese"=>"san marinese",
        "sao tomean"=> "sao tomean",
        "saudi"=>"saudi",
        "scottish"=>"scottish",
        "senegalese"=> "senegalese",
        "serbian"=> "serbian",
        "seychellois"=>  "seychellois",
        "sierra leonean"=>"sierra leonean",
        "singaporean"=> "singaporean",
        "slovakian"=> "slovakian",
        "slovenian"=>  "slovenian",
        "solomon islander"=> "solomon islander",
        "somali"=>   "somali",
        "south african"=> "south african",
        "south korean"=> "south korean",
        "spanish"=>"spanish",
        "sri lankan"=> "sri lankan",
        "sudanese"=> "sudanese",
        "surinamer"=> "surinamer",
        "swazi"=> "swazi",
        "swedish"=>  "swedish",
        "swiss"=>  "swiss",
        "syrian"=> "syrian",
        "taiwanese"=> "taiwanese",
        "tajik"=> "tajik",
        "tanzanian"=> "tanzanian",
        "thai"=> "thai",
        "togolese"=> "togolese",
        "tongan"=> "tongan",
        "trinidadian or tobagonian"=>  "trinidadian or tobagonian",
        "tunisian"=>"tunisian",
        "turkish"=>  "turkish",
        "tuvaluan"=>  "tuvaluan",
        "ugandan"=> "ugandan",
        "ukrainian"=> "ukrainian",
        "uruguayan"=> "uruguayan",
        "uzbekistani"=>  "uzbekistani",
        "venezuelan"=>"venezuelan",
        "vietnamese"=> "vietnamese",
        "welsh"=> "welsh",
        "yemenite"=>"yemenite",
        "zambian"=> "zambian",
        "zimbabwean"=> "zimbabwean",
    ];
}
?>