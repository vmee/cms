<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <title>{{ Theme::getTitle() }}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

<body id="page-top" class="index">

    {!! Theme::partial('header') !!}
    <div class="container">
        <div class="row">
        {!! Theme::partial('user_nav') !!}
            <div class="col-lg-9 col-md-9">
                {!! Theme::content() !!}
            </div>
         </div>
    </div>
    {!! Theme::partial('footer') !!}
    {!! Theme::asset()->container('footer')->scripts() !!}
</body>
</html>
