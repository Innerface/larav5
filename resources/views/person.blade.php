<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #dddddd;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                /*height: 100vh;*/
                margin: 0;
                /*float: left;*/
            }

            .full-height {
                height: 90vh;
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
                color: #000000;
                padding: 0 25px;
                font-size: 24px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a:hover{
                color: #ffffff;
                padding: 0 25px;
                font-size: 24px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 20px;
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

            <div class="content">
                <div class="title m-b-md">
                    Work makes the workman
                </div>
                <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_weixin" data-cmd="weixin"></a></div>
                <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                <div class="links" style="padding:10px 10px 10px 10px;">
                    <a href="{{ url('/ebay') }}" style="background-color: #cc6677; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Ebay</a>
                    <a href="{{ url('/amazon') }}" style="background-color: #cc6688; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Amazon</a>
                    <a href="{{ url('/wish') }}" style="background-color: #cc6666; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Wish</a>
                    <a href="{{ url('/aliexpres') }}" style="background-color: #cc9999; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Aliexpress</a>
                    <a href="{{ url('/lazada') }}" style="background-color: #ccaaaa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Lazada & linio</a>
                    <a href="{{ url('/joom') }}" style="background-color: #ccbbbb; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Joom</a>
                    <a href="{{ url('/paytm') }}" style="background-color: #cccccc; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Paytm</a>
                    <a href="{{ url('/shopee') }}" style="background-color: #ccdddd; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Shopee</a>
                    <a href="{{ url('/yahoo') }}" style="background-color: #cceeee; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Yahoo</a>
                </div>

                <div class="links" style="padding:50px 10px 50px 10px;">
                    <a href="{{ url('/php') }}" style="background-color: #6677aa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Php</a>
                    <a href="{{ url('/linux') }}" style="background-color: #6688aa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Linux</a>
                    <a href="{{ url('/apache') }}" style="background-color: #6666aa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Apache</a>
                    <a href="{{ url('/nginx') }}" style="background-color: #9999aa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Nginx</a>
                    <a href="{{ url('/mysql') }}" style="background-color: #aaaaaa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Mysql</a>
                    <a href="{{ url('/redis') }}" style="background-color: #bbbbaa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Redis</a>
                    <a href="{{ url('/mongo') }}" style="background-color: #ccccaa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Mongo</a>
                    <a href="{{ url('/memcache') }}" style="background-color: #ddddaa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Memcache</a>
                    <a href="{{ url('/vagrant') }}" style="background-color: #eeeeaa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Vagrant</a>
                </div>

                <div class="links" style="padding:10px 10px 10px 10px;">
                    <a href="{{ url('/csharp') }}" style="background-color: #669977; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">C#</a>
                    <a href="{{ url('/opencv') }}" style="background-color: #669988; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">OpenCV</a>
                    <a href="{{ url('/docker') }}" style="background-color: #669966; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Docker</a>
                    <a href="{{ url('/sphinx') }}" style="background-color: #999999; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Sphinx</a>
                    <a href="{{ url('') }}" style="background-color: #aa99aa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">APIStore</a>
                    <a href="{{ url('/github') }}" style="background-color: #bb99bb; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">GitHub</a>
                    <a href="{{ url('/laravel') }}" style="background-color: #cc99cc; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Laravel</a>
                    <a href="{{ url('') }}" style="background-color: #dd99dd; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Yii</a>
                    <a href="{{ url('') }}" style="background-color: #ee99ee; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">AI</a>
                </div>

                <div class="links" style="padding:50px 10px 50px 10px;">
                    <a href="{{ url('/paypal') }}" style="background-color: #aa9a77; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Paypal</a>
                    <a href="{{ url('') }}" style="background-color: #6a9a88; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Tinkphp</a>
                    <a href="{{ url('') }}" style="background-color: #aa9a66; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Swoole</a>
                    <a href="{{ url('') }}" style="background-color: #aa9a99; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">DBA</a>
                    <a href="{{ url('') }}" style="background-color: #aa9aaa; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">Ali Server</a>
                </div>

                <div class="links" style="padding:10px 10px 10px 10px;">
                    <a href="https://github.com/WITHOUT7" style="background-color: #ffffff; padding:10px 10px 10px 10px; border-radius: 5px" class="btn btn-default btn-doc" target="_self">About Author</a>
                </div>

            </div>
        </div>
    </body>
</html>
