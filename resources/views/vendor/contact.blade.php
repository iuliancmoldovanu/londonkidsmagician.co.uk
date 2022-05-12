@extends('layouts.app')

@section('title', 'Contact')

@section('style')
    @parent
    <link href="{{ asset('css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    @parent
    <script src="{{ asset('js/moment-with-locales.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            var currentDate = new Date();
            $('#datetimepicker').datetimepicker({
                format: 'dddd, Do ' + 'of' + ' MMMM YYYY, HH:mm',
                minDate: currentDate.setDate(currentDate.getDate() + 1),
                maxDate: currentDate.setDate(currentDate.getDate() + 30),
                ignoreReadonly: true,
                showClose: true,
                showClear: true
            });
        });

    </script>
@endsection

@section('content')

    <div class="container-fluid main-content">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row content">
                    <div class="panel-heading">
                        <h1 class="red-text">Contact</h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                {!! Form::open(['route'=>'contact']) !!}

                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    {!! Form::label('Name:') !!}
                                    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Type Name']) !!}
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>

                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    {!! Form::label('Email:') !!}
                                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Type Email']) !!}
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>

                                <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                                    {!! Form:: label ('phone_number', 'Phone Number' )!!}
                                    {!! Form:: text ('phone_number', old('email'), ['class'=>'form-control', 'placeholder' => 'eg. 02080021xxx']) !!}
                                    <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                </div>

                                <div class="form-group {{ $errors->has('postcodeEvent') ? 'has-error' : '' }}">
                                    {!! Form:: label ('postcodeEvent', 'Postcode of event' )!!}
                                    {!! Form:: text ('postcodeEvent', old('postcodeEvent'), ['class'=>'form-control', 'placeholder' => 'eg. SW1A 2SD']) !!}
                                    <span class="text-danger">{{ $errors->first('postcodeEvent') }}</span>
                                </div>

                                <div class="form-group {{ $errors->has('dateTimeEvent') ? 'has-error' : '' }}">
                                    {!! Form:: label ('dateTimeEvent', 'Event start date/time' )!!}
                                    <div class='input-group date' id='datetimepicker'>
                                        {!! Form:: text ('dateTimeEvent', old('dateTimeEvent'), ['class'=>'form-control', 'readonly'=>'readonly']) !!}

                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                    <span class="text-danger">{{ $errors->first('dateTimeEvent') }}</span>
                                </div>

                                <div class="form-group">
                                    {!! Form:: label ('event_type', 'Select Event Type:' )!!}
                                    <div class='input-group'>
                                        {!! Form::select('event_type', [
                                                'Birthday party' => 'Birthday party',
                                                'Wedding party' => 'Wedding party'
                                                ], null, ['class' => 'selectpicker', 'name' => 'event_type'])
                                         !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form:: label ('event_type', 'Extra services:' )!!}
                                    <div class='input-group'>
                                        {!! Form::select('extras',[
                                                'Balloon\'s modelling' => 'Balloon\'s modelling',
                                                'Games' => 'Games',
                                                'Live white rabbit' => 'Live white rabbit',
                                                'Disco Lighting' => 'Disco Lighting',
                                                'Bubbles' => 'Bubbles',
                                                'Chocolate fountain' => 'Chocolate fountain',
                                                'Pop Corn' => 'Pop Corn',
                                                'Candy floss' => 'Candy floss',
                                                'Smooth' => 'Smooth'
                                                ], null, [
                                                    'class' => 'selectpicker',
                                                    'multiple' => true,
                                                    'name' => 'extras[]',
                                                    'data-selected-text-format' => "count > 3",
                                                    'data-none-selected-text' => "Select extra services"])
                                         !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('Message:') !!}
                                    {!! Form::textarea('enquiry', old('enquiry'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
                                </div>

                                <div class="form-group">
                                    {{ Form::submit('Send', array('class' => 'btn btn-success')) }}
                                    {{ Form::reset('Clear', array('class' => 'btn btn-default')) }}
                                </div>

                                {!! Form::close() !!}
                            </div>

                            <div class="col-md-4">

                                <img class="img-responsive center-block" src="images/contact.png" alt="contact"/>

                                <span class="contact-text"> Mobile: 07919657582</span>

                                <span class="contact-text">Home: 02086772295</span>

                                <span class="contact-text">
                                    <a href="mailto:russellsmagic@gmail.com">russellsmagic@yahoo.co.uk</a>
                                </span>

                                <span class="contact-text">Address: Pathfield Road. London. SW16 5NN</span>
                                <br/>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9951.993606075395!2d-0.130868!3d51.421456!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad28012279922b63!2sRussell&#39;s+Magic!5e0!3m2!1sen!2suk!4v1429267948782">
                                    </iframe>
                                </div>
                            </div>

                        </div>
                        <p class="covering-text">
                            Don't Miss Out & Book Today.
                            Russell's Magic covers at Anerley SE20, SE19, Barnes SW13, Battersea SW11, Bayswater W2,
                            Balham SW12, Banstead CR5, Beckenham BR3, Belmond SM2, Brixton SW2, Berrylands KT5,
                            Bexleyheath DA6, Biggin Hill TN16, Brockley SE4, Bromley BR1, BR2, BR3, BR4, Camberwell SE5,
                            SE14, Carshalton SM5, Catford SE6, Chelsea SW3, SW10, Clapham SW4, Chessington KT9, Coulsdon
                            CR3, Croydon CR0, Crystal Palace SE19, Dulwich SE21, Earlsfield SW18, East Dulwich SE22,
                            Epsom KT17, Eltham SE9, Forest Hill SE23, Fulham SW6, Gipsy Hill SE19, Greenwich SE10,
                            Harrow HA2, Hayes BR2, Herne Hill SE24, Hounslow TW4, Isleworth TW7, Kennington SE17, SE11,
                            Kenley CR3, Kensington W8, Kingston KT1, KT2, Lee Green SE12, Lewisham SE13, Maida Vale NW8,
                            New Malden KT4, Mitcham CR4, Morden SM4, Mortlake SW14, New Cross SE14, New Malden KT1,
                            Norbiton KT2, Norbury SW16, Orpington BR6, Parsons Green SW6, Peckham SE15, Purley CR8,
                            Putney SW15, Richmond TW9, Streatham SW16, Streatham Vale SW16, Sanderstead CR2, Shepherds
                            Bush SW12, South Norwood SE25, Southall UB1, South Croydon CR2, Sutton SM1, SM2, St John’s
                            Wood NW8, Stockwell SW8, Surbiton KT6, Sydenham SE26, Teddington TW11, Thornton Heath CR7,
                            Tooting Bec SW17, Tolworth KT6, Tulse Hill SW2, SE27, Twickenham TW1, Uxbridge UB8,
                            Wallington SM6, Wandsworth SW18, Wembley HA0, West Brompton SW5, West Kensington, Wallington
                            SM5, West Norwood SE27, West Wickham BR4, Wimbledon SW19, SW20, Worcester Park KT4.
                        </p>
                    </div>
                    @include('layouts.footer')
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    </div>

@endsection