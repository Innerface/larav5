<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Person</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                /*height: 100vh;*/
                margin: 0;
            }

            .full-height {
                height: 70vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 48px;
            }

            .links > a {
                color: #336b6f;
                padding: 0 25px;
                font-size: 24px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body oncontextmenu="event.returnValue=false">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content download">
                <div class="title m-b-md">
                    Work makes the workman
                </div>

                <div class="links" style="padding:10px 10px 10px 10px;">
                    <a href="" style="background-color: #cc0000; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Ebay</a>
                    <a href="" style="background-color: #cc3333; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Amazon</a>
                    <a href="" style="background-color: #cc6666; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Wish</a>
                    <a href="" style="background-color: #cc9999; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Aliexpress</a>
                    <a href="" style="background-color: #ccaaaa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Lazada & linio</a>
                    <a href="" style="background-color: #ccbbbb; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Joom</a>
                    <a href="" style="background-color: #cccccc; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Paytm</a>
                    <a href="" style="background-color: #ccdddd; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Shopee</a>
                    <a href="" style="background-color: #cceeee; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Yahoo</a>
                </div>

                <div class="links" style="padding:50px 10px 50px 10px;">
                    <a href="" style="background-color: #0000aa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Php</a>
                    <a href="" style="background-color: #3333aa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Linux</a>
                    <a href="" style="background-color: #6666aa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Apache</a>
                    <a href="" style="background-color: #9999aa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Nginx</a>
                    <a href="" style="background-color: #aaaaaa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Mysql</a>
                    <a href="" style="background-color: #bbbbaa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Redis</a>
                    <a href="" style="background-color: #ccccaa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Mongo</a>
                    <a href="" style="background-color: #ddddaa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Memcache</a>
                    <a href="" style="background-color: #eeeeaa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Vagrant</a>
                </div>

                <div class="links" style="padding:10px 10px 10px 10px;">
                    <a href="" style="background-color: #009900; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">C#</a>
                    <a href="" style="background-color: #339933; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">OpenCV</a>
                    <a href="" style="background-color: #669966; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Docker</a>
                    <a href="" style="background-color: #999999; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Sphinx</a>
                    <a href="" style="background-color: #aa99aa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">APIStore</a>
                    <a href="" style="background-color: #bb99bb; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">GitHub</a>
                    <a href="" style="background-color: #cc99cc; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Laravel</a>
                    <a href="" style="background-color: #dd99dd; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Yii</a>
                    <a href="" style="background-color: #ee99ee; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">AI</a>
                </div>

            </div>
        </div>
    </body>
</html>
