<!DOCTYPE html>
<html>
    <head>
        <title>{!! Theme::get('title') !!}</title>
        <link rel="SHORTCUT ICON" href="../assets/img/rafraf.jpg">
        <meta charset="utf-8">
        <meta name="keywords" content="{!! Theme::get('keywords') !!}">
        <meta name="description" content="{!! Theme::get('description') !!}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf_token" content="{{ csrf_token() }}">
        {!! Theme::asset()->styles() !!}
    </head>
    <body>
    <input type="hidden" id="baseURL" value="{{ url('') }}" >
<!--        {!! Theme::partial('header') !!}-->

        <div class="container">
            {!! Theme::content() !!}
        </div>

<!--        {!! Theme::partial('footer') !!}-->
        {!! Theme::asset()->scripts() !!}
        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>
