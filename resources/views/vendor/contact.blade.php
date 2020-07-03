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

                                <span class="contact-text"> Mobile: 07868746089</span>

                                <span class="contact-text">Home: 02086772295</span>

                                <span class="contact-text">
                                    <a href="mailto:russellsmagic@gmail.com">russellsmagic@gmail.com</a>
                                </span>

                                <span class="contact-text">Address: 120A Pendle Road, Streatham, London, SW16 6RY</span>
                                <br/>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9951.993606075395!2d-0.130868!3d51.421456!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad28012279922b63!2sRussell&#39;s+Magic!5e0!3m2!1sen!2suk!4v1429267948782">
                                    </iframe>
                                </div>
                            </div>

                        </div>
                        <p class="covering-text">
                            Covering: Fulham SW6, Clapham SW4, Balham SW12, Streatham SW16, Tooting SW17, Tulse Hill
                            SE27, SW2, Herne Hill SE24, Barnes SW13, Brixton SW2, Dulwich SE22, Earlsfield SW18,
                            Wimbledon SW19, SW20, Abbey Wood SE2, Acton W3, Anerley SE20, SE19, Ashford TW15, Kingston
                            KT1, KT2, New Malden KT3, Barking IG11, Barnes SW13, Barnet EN5, Barnsbury N1, Battersea
                            SW11, Bayswater W2, Beckenham BR3, Belgravia SW1, Bermondsey SE16, SE1, Bethnal Green E2,
                            Bexleyheath DA6, Biggin Hill TN16, Bishopsgate EC2, Blackheath SE3, Bloomsbury WC1, Borough
                            SE1, Bow E3, Bowes Park N13, N22, Brockley SE4, Bromley BR1, Camberwell SE5, Camden Town
                            NW1, NW3, Canary Wharf E14, SE16, Canning Town E16, Canonbury N1, Catford SE6, Charlton SE7,
                            Chelsea SW3, SW10, Chessington KT9, Chingford E4, Chislehurst BR7, Chiswick W4, City of
                            Westminster W2, Clapham SW4, Clapton E5, Clerkenwell EC1, Colindale NW9, Covent Garden WC2,
                            Cricklewood NW2, Crouch End N8, Croydon CR1, CR0, Dagenham RM10, Dalston E8, Deptford SE8,
                            SE14, Dulwich SE21, Ealing W13, W5, Earl’s Court SW5, East Dulwich SE22, East Finchley N2,
                            East Ham E6, East Sheen SW14, Edgware HA8, Edmonton N18, Eltham SE9, Enfield EN1, EN2,
                            Euston NW1, Feltham TW13, Finchley N3, Finsbury N4, Fleet Street EC4, Forest Gate E7, Forest
                            Hill SE23, Fulham SW6, Gipsy Hill SE19, Golders Green NW11, Greenford UB6, Greenwich SE10,
                            Hackney E2, E8, Hainault IG6, Hammersmith W14, W6, Hampstead NW3, Hanwell W7, Harefield UB9,
                            Harlesden NW10, Harrow HA2, Hatch End HA5, Hayes BR2, UB3, UB8, Hendon NW4, Herne Hill SE24,
                            Highams Park E4, Highbury N5, Highgate N6, N19, Holborn WC2, WC1, EC1, Holloway N7, Hornsey
                            N8, Hounslow TW4, TW3, Ilford IG1, Isle of Dogs E14, Isleworth TW7, Islington N1, Kennington
                            SE17, SE11, Kensal Green NW10, Kensington W8, Kentish Town NW5, Kilburn NW6, King’s Cross
                            WC1, Kingsbury NW9, HA3, Lee Green SE12, Lewisham SE13, Leyton E10, Leytonstone E11, Lower
                            Holloway N7, Maida Vale W9, NW6, Malden KT4, Manor Park E12, Marylebone NW1, Mayfair W1,
                            Merton SW19, SM4, SW20, Mill Hill NW7, Mitcham CR4, Moorgate EC2, Mortlake SW14, Mottingham
                            SE9, Muswell Hill N10, N2, New Cross SE14, New Malden KT3, New Southgate N11, North Finchley
                            N12, Northolt UB5, Northwood HA6, SE19, Notting Hill W8, W11, Orpington BR6, Paddington W9,
                            W2, Palmers Green N13, N14, Parsons Green SW6, Peckham SE15, Perivale UB6, Pimlico SW1,
                            Pinner HA5, Plaistow E13, Ponders End EN3, Poplar E14, Purley CR8, Putney SW15, Rainham
                            RM13, Richmond TW9, Romford RM1, Rotherhithe SE16, Ruislip HA4, Sanderstead CR2, Seven Kings
                            IG3, Shepherds Bush W12, Shoreditch EC2, E1, N1, Sidcup DA14, Sloane Square SW1, Soho W1,
                            South Bank SE1, South Harrow HA2, South Kensington SW7, South Norwood SE25, Southall UB1,
                            Southgate N14, Southwark SE5, SE1, St John’s Wood NW8, St Paul’s EC4, Stamford Hill N16,
                            N15, Stanmore HA7, Stepney Green E1, Stockwell SW8, SW9, Stoke Newington N16, Stratford E15,
                            Streatham SW16, Surbiton KT6, Sutton SM2, Sydenham SE26, Teddington TW11, Thamesmead SE2,
                            Thamesmead SE28, The City, Tooting Bec SW17, Tottenham N17, Tolworth KT6, Tulse Hill SW2,
                            Tulse Hill SE27, Twickenham TW1, Upminster RM14, Upton Park E6, Uxbridge UB8, Vauxhall SE11,
                            Vauxhall SW8, Victoria SW1, Wallington SM6, Walthamstow E17, Walworth SE17, Wandsworth SW18,
                            Wanstead E11, Wapping E1, Waterloo SE1, Wembley HA0, West Brompton SW5, West Drayton UB7,
                            West End WC2H, W1, West Kensington W14, West Norwood SE27, West Wickham BR4, Westminster
                            SW1, Whetstone N20, Whitechapel E1, Willesden NW10, Wimbledon SW19, Winchmore Hill N21, Wood
                            Green N22, Woodford IG8, Woolwich SE18, Worcester Park KT4.
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