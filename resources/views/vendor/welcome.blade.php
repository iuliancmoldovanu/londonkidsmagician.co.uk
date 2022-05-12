@extends('layouts.app')
@section('title', 'Home')
@section('content')

    <div class="container-fluid main-content">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row content">
                    <div class="panel-heading">
                        <h1 class="red-text">London best magician for hire</h1>
                    </div>
                    <div class="panel-body">
                        <p>Welcome to <b>"Russell's Magic"</b>. Russell is an Ultimate Magician in London for adults and
                            children’s show. He performs amazing tricks for close-up & stand-up illusion magic, children
                            birthday party, street show, Christmas party, christening party, corporate event, wedding
                            magician, table to table show, stage show, entertainer for family party, house party, adult
                            party, office show, kids party, after dinner party, private party, entertainer for school,
                            X-mas party and any fun event. </p>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="//www.youtube.com/embed/3fk4dpujKyY"
                                            allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                        <li data-target="#myCarousel" data-slide-to="3"></li>
                                        <li data-target="#myCarousel" data-slide-to="4"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="{{ asset('images/index/russell1_n.jpg') }}" alt="magician"
                                                 width="250"
                                                 height="333">
                                        </div>

                                        <div class="item">
                                            <img src="{{ asset('images/index/russell2.jpg') }}" alt="magician"
                                                 width="250"
                                                 height="333">
                                        </div>

                                        <div class="item">
                                            <img src="{{ asset('images/index/russell3.jpg') }}" alt="magician"
                                                 width="250"
                                                 height="333">
                                        </div>

                                        <div class="item">
                                            <img src="{{ asset('images/index/russell4.jpg') }}" alt="magician"
                                                 width="250"
                                                 height="333">
                                        </div>

                                        <div class="item">
                                            <img src="{{ asset('images/index/russell5.jpg') }}" alt="magician"
                                                 width="250"
                                                 height="333">
                                        </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button"
                                       data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="//www.youtube.com/embed/K6LkVD_iYKE"
                                            allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p class="red-text" style="text-indent: 0; text-align: left">
                                            If you need additional services with some additional cost:
                                        </p>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-8">
                                            <ul class="list_style">
                                                <li><h4>Live Rabbit</h4></li>
                                                <li><h4>Babbles</h4></li>
                                                <li><h4>Balloon Modelling</h4></li>
                                                <li><h4>Games</h4></li>
                                                <li><h4>LED Music Speaker System (PA) 160W 10" Bluetooth, Wireless
                                                        Microphone</h4></li>
                                                <li><h4>Smoke/Fog Machine 500W</h4></li>
                                                <li><h4>Mini Disco Laser Projector Lighting</h4></li>
                                                <li><h4>2 Pcs Sperking Firework Lighting Fountain System For Wedding
                                                        Stage</h4></li>
                                                <li><h4>Chocolate Fountain depending on demand</h4></li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-4">
                                            <img class="img-responsive" src="{{ asset('images/rabbit_190.png') }}"
                                                 width="158"
                                                 height="190"
                                                 alt="london magician">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row margin-top-20">
                            <div class="col-md-12">

                                <p>
                                    He knows how to blend illusion with emotion, humour and promises to fool you again
                                    and again
                                    in the most entertaining way. Russell's magic shows are perfect for any fun event.
                                    Russell
                                    caters for audiences large or small. He is an internationally known magician. He has
                                    performed in France, Egypt, Turkey, Jordan, Dubai, Spain, India & Bangladesh and now
                                    performs all over in the world as well as in London, UK.
                                </p>
                                <p>
                                    Russell has performed on television channels. He participated in national and
                                    international
                                    magic conventions and he was awarded with a crest and certificate. Russell is
                                    reliable and
                                    honest entertainment service operating in the last 25 years. He has CRB/DBS checked.
                                    Russell
                                    is based in London, and while he performs primarily in the Greater London area,
                                    Russell may
                                    be available for booking all over the world, so contact him by email or call, to
                                    discuss
                                    your needs.
                                </p>
                                <p>
                                    If you are looking to take your event to the next level & hire an entertainer to
                                    amaze & surprise your guests, Magician Russell is the right fit for the show. One of
                                    London's top magician specialist.
                                    London best magician for Kids Birthday Party, Wedding event, Corporate show,
                                    Christmas party, Halloween, New Year, Summer Funfair, Punjabi festival, Indian
                                    party, Diwali Festival, Corporate show, Private party, Entertainer for school, X-mas
                                    party & any fun event. Street magician, Hen party etc.
                                </p>
                            </div>
                        </div>
                        <p class="red-text"><i>
                                <b>Magic is an art.</b> I believe that magic has the power to inspire us at the same
                                time as we are lost in wonder.
                                Magician - Russell</i>
                        </p>

                        <p class="covering-text">
                            You have never seen magic like Russell's Magic, a very unique & stylish talent magician.
                            Book best magician,
                            Children entertainer
                            Top magicians,
                            All magicians,
                            Amazing magician,
                            London best magician,
                            Magician in London,
                            Magician for Kids,
                            Magicians for hire
                            Corporate events,
                            Trade show,
                            Magician for hire,
                            Close up magician,
                            Magician in South West London,
                            Cheapest magician,
                            Magician to book,
                            Magicians,
                            Party magician,
                            Magicians for a party,
                            Birthday magician,
                            Wadding magician,
                            Kids magician,
                            Children magician,
                            Entertainer,
                            Entertainers,
                            Magician in Crawley,
                            Magician in Croydon,
                            Magician in Kent,
                            Magician in Surrey,
                            Magician in Guildford,
                            Magician in Kingston,
                            Magician in Esher.
                        </p>
                    </div>
                    @include('layouts.footer')
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

@endsection

<?php
/*
 * This is needed for cookie based authentication to encrypt password in
 * cookie
 */
$cfg['blowfish_secret'] = 'xampp'; /* YOU SHOULD CHANGE THIS FOR A MORE SECURE COOKIE AUTH! */

/*
 * Servers configuration
 */
$i = 0;

/*
 * First server
 */
$i++;

/* Authentication type and info */
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = '';
$cfg['Servers'][$i]['extension'] = 'mysqli';
$cfg['Servers'][$i]['AllowNoPassword'] = true;
$cfg['Lang'] = '';

/* Bind to the localhost ipv4 address and tcp */
$cfg['Servers'][$i]['host'] = '127.0.0.1';
$cfg['Servers'][$i]['connect_type'] = 'tcp';

/* User for advanced features */
$cfg['Servers'][$i]['controluser'] = 'pma';
$cfg['Servers'][$i]['controlpass'] = '';

/* Advanced phpMyAdmin features */
$cfg['Servers'][$i]['pmadb'] = 'phpmyadmin';
$cfg['Servers'][$i]['bookmarktable'] = 'pma__bookmark';
$cfg['Servers'][$i]['relation'] = 'pma__relation';
$cfg['Servers'][$i]['table_info'] = 'pma__table_info';
$cfg['Servers'][$i]['table_coords'] = 'pma__table_coords';
$cfg['Servers'][$i]['pdf_pages'] = 'pma__pdf_pages';
$cfg['Servers'][$i]['column_info'] = 'pma__column_info';
$cfg['Servers'][$i]['history'] = 'pma__history';
$cfg['Servers'][$i]['designer_coords'] = 'pma__designer_coords';
$cfg['Servers'][$i]['tracking'] = 'pma__tracking';
$cfg['Servers'][$i]['userconfig'] = 'pma__userconfig';
$cfg['Servers'][$i]['recent'] = 'pma__recent';
$cfg['Servers'][$i]['table_uiprefs'] = 'pma__table_uiprefs';
$cfg['Servers'][$i]['users'] = 'pma__users';
$cfg['Servers'][$i]['usergroups'] = 'pma__usergroups';
$cfg['Servers'][$i]['navigationhiding'] = 'pma__navigationhiding';
$cfg['Servers'][$i]['savedsearches'] = 'pma__savedsearches';
$cfg['Servers'][$i]['central_columns'] = 'pma__central_columns';
$cfg['Servers'][$i]['designer_settings'] = 'pma__designer_settings';
$cfg['Servers'][$i]['export_templates'] = 'pma__export_templates';
$cfg['Servers'][$i]['favorite'] = 'pma__favorite';

/*
 * End of servers configuration
 */

?>
