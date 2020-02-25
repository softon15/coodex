<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Coodex</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('inc.menu')
        <div class="container" style="margin-top: 25px;">
            <div class="row">
                <div class="col-md-12">
                    @include('inc.messages')
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>