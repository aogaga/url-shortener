<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Compressed CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <!-- Compressed JavaScript -->
{{--        <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>--}}
{{--       --}}


    </head>
    <body>

    <div class="page-wrapper">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell auto"></div>
                <div class="cell small-8">
                    <a id="response-message"></a>
                </div>
                <div class="cell auto"></div>
            </div>
        </div>


        <div class="grid-container">

            <div class="grid-x grid-margin-x">
                <div class="cell auto"></div>
                <div class="cell small-5">

                    {{Form::open(['url'=>'/api/', 'method'=>'post'])}}

                    <label>Url

                        {!! Form::text('url', '', ['class' => 'form-control', 'placeholder'=>'http://domain']) !!}
                    </label>

                    <label>Email

                        {!! Form::email('email', '', ['class' => 'form-control', 'placeholder'=>'email@domain.com']) !!}
                    </label>

                    <button type="submit" class="success button large expanded">Submit</button>

                    {{Form::close()}}

                </div>

                <div class="cell auto"></div>
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
