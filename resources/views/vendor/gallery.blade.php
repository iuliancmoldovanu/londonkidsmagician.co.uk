@extends('layouts.app')

@section('title', 'Gallery')

@section('style')
    @parent
    <link href="{{ asset('css/jquery.bsPhotoGallery.css') }}" rel="stylesheet">
    <style>
        ul {
            padding: 0;
            margin: 0;
        }

        ul li {
            list-style: none;
            margin-bottom: 10px;
        }

        ul li img {
            cursor: pointer;
        }

        .modal-body {
            padding: 5px !important;
        }

        .modal-content {
            border-radius: 0;
        }

        .modal-dialog img {
            text-align: center;
            margin: 0 auto;
        }

        .controls {
            width: 50px;
            display: block;
            font-size: 11px;
            padding-top: 8px;
            font-weight: bold;
        }

        .next {
            float: right;
            text-align: right;
        }

        /*override modal for demo only*/

        .modal-dialog {
            max-width: 85%;
            padding-top: 90px;
            margin: 0 auto !important;
        }

        @media screen and (min-width: 768px) {
            .modal-dialog {
                width: 500px;
                padding-top: 90px;
            }
        }

        @media screen and (max-width: 1500px) {
            #ads {
                display: none;
            }
        }

        .img-responsive {
            border: 2px solid #FFF;
        }
    </style>
@endsection

@section('scripts')
    @parent
    <script src="{{ asset('js/jquery.bsPhotoGallery.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('ul.first').bsPhotoGallery({});
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
                        <h1 class="text-red">Russell's magic gallery</h1>
                    </div>
                    <div class="panel-body">
                        <ul class="row first">
                            <?php
                            $highFrame = glob( "images/150_113/*.jpg" );
                            $img_150 = array();
                            $img_113 = array();

                            for ( $i = 0; $i < count( $highFrame ); $i++ )
                            {
                                if ( getimagesize( $highFrame[ $i ] )[ 0 ] == 150 )
                                {
                                    $img_150[ $i ] = $highFrame[ $i ];
                                } else
                                {
                                    $img_113[ $i ] = $highFrame[ $i ];
                                }
                            }
                            foreach ( $img_150 as $img )
                            {
                                echo '<li>';
                                echo '<img src="' . $img . '">';
                                echo '</li>';
                            }
                            foreach ( $img_113 as $img )
                            {
                                echo '<li>';
                                echo '<img src="' . $img . '">';
                                echo '</li>';
                            }
                            ?>

                        </ul>
                    </div>
                    @include('layouts.footer')
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection