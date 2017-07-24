<!DOCTYPE html>
<html>
    <head>
        <title>{!! Theme::get('title') !!}</title>
        <meta charset="utf-8">
        <meta name="keywords" content="{!! Theme::get('keywords') !!}">
        <meta name="description" content="{!! Theme::get('description') !!}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {!! Theme::asset()->styles() !!}
    </head>
    <body>
<!--        {!! Theme::partial('header') !!}-->

        <div class="container">
            {!! Theme::content() !!}
        </div>

<!--        {!! Theme::partial('footer') !!}-->
        {!! Theme::asset()->scripts() !!}
        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>
