@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-offset-2">
                {!! Form::open(['route' => 'voter.store', 'class' => 'form']) !!}
                {!! Form::hidden('location', $currentLocation->id) !!}
                <section>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title" id="profileNumber">Voter Profile </h1>
                        </div>
                        <div class="panel-body">
                            <div class="form-group well well-sm">
                                {!! Form::label('first_name', 'First Name') !!}
                                {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                                {!! Form::label('middle_name', 'Middle Name') !!}
                                {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
                                {!! Form::label('last_name', 'Last Name') !!}
                                {!! Form::text('last_name', null, ['class' => 'form-control'])!!}
                                {!! Form::label('gender', 'Gender') !!}
                                {!! Form::select('gender', ['male' => 'Male', 'female' => 'Female'], null, ['class' => 'form-control']) !!}
                                {!! Form::label('dob', 'Date of Birth') !!}
                                {!! Form::date('dob', null, ['class' => 'form-control']) !!}
                                {!! Form::label('maritalStatus', 'Marital Status') !!}
                                {!! Form::select('maritalStatus', ['single' => 'Single', 'divorced' => 'Divorced', 'married' => 'Married'], null, ['class' => 'form-control']) !!}
                                <p>Number of children</p>
                                {!! Form::label('male', 'Male') !!}
                                {!! Form::number('male', null, ['class' => 'form-control', 'step' => '1', 'min' => '0']) !!}
                                {!! Form::label('female', 'Female') !!}
                                {!! Form::number('female', null, ['class' => 'form-control', 'step' => '1', 'min' => '0']) !!}
                            </div>
                            <div class="form-group well well-sm">
                                {!! Form::label('education[highSchool]', 'HighSchool Education') !!}
                                {!! Form::text('education[highSchool]', null, ['class' => 'form-control']) !!}
                                {!! Form::label('education[university]', 'College/University Education') !!}
                                {!! Form::text('education[university]', null, ['class' => 'form-control']) !!}
                                {!! Form::label('education[gradSchool]', 'Graduate School') !!}
                                {!! Form::text('education[gradSchool]', null, ['class' => 'form-control']) !!}
                                <p>Currently Employed?</p>
                                {!! Form::label('employed', 'No') !!}
                                {!! Form::radio('employed', 'No', true) !!}
                                {!! Form::label('employed', 'Yes') !!}
                                {!! Form::radio('employed', 'Yes', null) !!}
                                {!! Form::label('employerName', 'Employer') !!}
                                {!! Form::text('employerName', null, ['class' => 'form-control']) !!}

                                {!! Form::label('unioned', 'No') !!}
                                {!! Form::radio('unioned', 'No', true) !!}
                                {!! Form::label('unioned', 'Yes') !!}
                                {!! Form::radio('unioned', 'Yes', null) !!}
                                {!! Form::label('unionName', 'Union Name') !!}
                                {!! Form::text('unionName', null, ['class' => 'form-control']) !!}

                            </div>

                            <div class="form-group well well-sm">
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                {!! Form::label('homePhone', 'Home Phone') !!}
                                {!! Form::number('homePhone', null, ['class' => 'form-control']) !!}
                                {!! Form::label('cellPhone', 'Cell Phone') !!}
                                {!! Form::number('cellPhone', null, ['class' => 'form-control']) !!}
                                {!! Form::label('workPhone', 'Work Phone') !!}
                                {!! Form::number('workPhone', null, ['class' => 'form-control']) !!}
                                {!! Form::label('whatsappNumber', 'WhatsApp Number') !!}
                                {!! Form::number('whatsappNumber', null, ['class' => 'form-control']) !!}
                                {!! Form::label('facebook', 'Facebook Email') !!}
                                {!! Form::email('facebook', null, ['class' => 'form-control']) !!}
                                {!! Form::label('twitter', 'Twitter Email') !!}
                                {!! Form::email('twitter', null, ['class' => 'form-control']) !!}
                                {!! Form::label('instagram', 'Instagram Id') !!}
                                {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group well well-sm">
                                {!! Form::label('registrationStatus', 'Registration Status') !!}
                                {!! Form::select('registrationStatus', ['registered' => 'Registered', 'plan to register' => 'Plan to Register', 'not Registering' => 'Not Registering'], null, ['class' => 'form-control']) !!}

                                {!! Form::label('partyAffiliation', 'Party Affiliation') !!}
                                {!! Form::select('partyAffiliation', ['plp' => 'PLP', 'fnm' => 'FNM', 'dna' => 'DNA', 'gateKeepters' => 'Gate Keepers', 'independent' => 'Independent'], null, ['class' => 'form-control']) !!}

                                {!! Form::label('LastElection[status]', 'Last Election') !!}
                                {!! Form::select('LastElection[status]', ['voted' => 'Voted', 'Not Vote' => 'Not Vote'], null, ['class' => 'form-control']) !!}

                                {!! Form::label('LastElection[supported]', 'Last Election Supported') !!}
                                {!! Form::select('LastElection[supported]', ['plp' => 'PLP', 'dna' => 'DNA', 'fnm' => 'FNM'], null, ['class' => 'form-control']) !!}

                                {!! Form::label('supportFredMitchell', 'Fred Mitchell Support') !!}
                                {!! Form::select('supportFredMitchell', ['will Support' => 'will Support', 'might Support' => 'might Support', 'not Supporting' => 'Not Supporting'], null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group well well-sm">
                                {!! Form::label('constituencyConcerns', 'Constituency Concerns') !!}
                                {!! Form::textarea('constituencyConcerns', null, ['class' => 'form-control']) !!}

                                {!! Form::label('governmentConcerns', 'Government Concerns') !!}
                                {!! Form::textarea('governmentConcerns', null, ['class' => 'form-control']) !!}

                                {!! Form::label('repConcerns', 'Representative Concerns') !!}
                                {!! Form::textarea('repConcerns', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </section>
                {!! Form::submit('Save & Next', ['class' => 'btn btn-primary btn-block btn-large']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop