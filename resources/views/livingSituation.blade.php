@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">Living Situation</h1>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'home.store', 'class' => 'form']) !!}
                        <div class="form-group well well-sm">
                            <h3 class="section-title">Address</h3>
                            {!! Form::label('address1', 'Address line 1', ['class' => 'form-label']) !!}
                            {!! Form::text('address1', null, ['class' => 'form-control', 'autofocus' => 'true']) !!}
                            {!! Form::label('address2', 'Address line 2', ['class' => 'form-label']) !!}
                            {!! Form::text('address2', null, ['class' => 'form-control']) !!}
                            {!! Form::label('city', 'City') !!}
                            {!! Form::text('city', null, ['class' => 'form-control']) !!}
                            {!! Form::label('island', 'Island', ['class'  => 'form-label']) !!}
                            {!! Form::select('island', [
                            'Abaco' => 'Abaco',
                            'Acklins' => 'Acklins',
                            'Andros' => 'Andros',
                            'Berry Island' => 'Berry Island',
                            'Bimini' => 'Bimini',
                            'Cat Island' => 'Cat Island',
                            'Crooked Island' => 'Crooked Island',
                            'Eleuthera' => 'Eleuthera',
                            'Exuma' => 'Exuma',
                            'Grand Bahama' => 'Grand Bahama',
                            'Harbour Island' => 'Harbour Island',
                            'Inagua' => 'Inagua',
                            'Long Island' => 'Long Island',
                            'Mayaguana' => 'Mayaguana',
                            'New Providence' => 'New Providence',
                            'Paradise Island' => 'Paradise Island',
                            'Ragged Island' => 'Ragged Island',
                            'Rum Cay' => 'Rum Cay',
                            'San Salvador' => 'San Salvador'], null, ['class' => 'form-control']) !!}
                            {!! Form::label('pollingDivision', 'Polling Division Number', ['class' => 'form-label']) !!}
                            {!! Form::number('pollingDivision', null, ['class' => 'form-control', 'step' => '1', 'min' => '0']) !!}
                        </div>
                        <div class="form-group well well-sm">
                            <h3 class="section-title">House Description</h3>
                            {!! Form::label('primaryColor', 'Primary Color') !!}
                            {!! Form::text('primaryColor', null, ['class' => 'form-control']) !!}

                            {!! Form::label('secondaryColor', 'Secondary Color') !!}
                            {!! Form::text('secondaryColor', null, ['class' => 'form-control']) !!}

                            {!! Form::label('classification', 'Classification') !!}
                            {!! Form::select('classification', ['Single Family' => 'Single Family',
                                                                 'Duplex' => 'Duplex',
                                                                 'Triplex' => 'Triplex',
                                                                  'MultiUnit Apt' => 'Multi-Unit Apt'], null, ['class' => 'form-control']) !!}

                            {!! Form::label('persons', 'Number of Persons In household') !!}
                            {!! Form::number('persons', '1',  ['class' => 'form-control', 'step' => '1', 'min' => '0']) !!}

                            {!! Form::label('voters', 'Number of Eligible Voters') !!}
                            {!! Form::number('voters', '1', ['class' => 'form-control', 'step' => '1', 'min' => '0']) !!}

                            {!! Form::label('otherDetails', 'Other Details/Descriptions') !!}
                            {!! Form::textarea('otherDetails', null, ['class' => 'form-control']) !!}

                        </div>
                        {!! Form::submit('Save & Next', ['class' => 'btn btn-primary btn-block btn-large']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop