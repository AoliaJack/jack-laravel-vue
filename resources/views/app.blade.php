<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta name="api-base-url" content="{{ url('http://localhost/9000') }}" />
        <meta charset="utf-8">
        <title></title>
        <style media="screen">
        @font-face {
        font-family: "Montserrat-Bold";
        src: url("{{ asset('fonts/Montserrat-Bold.otf')}}") format('opentype');
        }
        @font-face {
        font-family: "Montserrat-Light";
        src: url("{{ asset('fonts/Montserrat-Light.otf')}}") format('opentype');
        }
        @font-face {
        font-family: "Roboto-Regular";
        src: url("{{ asset('fonts/Roboto-Regular.ttf')}}") format('truetype');
        }
        @font-face {
        font-family: "Roboto-Medium";
        src: url("{{ asset('fonts/Roboto-Medium.ttf')}}") format('truetype');
        }
        .border-top {
            border-top: .1rem solid #f5f5f5;
        }
        .price-title {
            font-family: 'Montserrat-Bold';
        }
        .icons-size {
            font-size: 16px !important;
        }
        .bb {
            border-bottom: .1rem solid #f5f5f5;
        }
        .bfooter {
            background:#333;
        }
        .small-line {
            width: 100px;
            height: 5px;
            margin: auto;
        }
        .footer li,p {
            line-height: 2;
            font-size: 0.85em;
            font-family: 'Roboto-Medium';
        }
        body {
            font-family: 'Roboto-Regular', sans-serif;
        }
        .title {
        font-family: 'Montserrat-Bold';
        }
        .title-medium {
        font-family: 'Roboto-Medium', sans-serif;
        }
        .subtitle {
        font-family: 'Montserrat-Light';
        }
        .list-check li span {
            font-family: 'Montserrat-Light';
        }
        </style>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div id="app"><com-app></com-app></div>
        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </body>
</html>
