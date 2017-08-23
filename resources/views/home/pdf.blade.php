<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            height: 100%;
        }
        .content{
            height: 98%;
            margin: 0 20% 0 20%;
        }
    </style>
    <script type="text/javascript" src="{{ URL::asset('js/pdfobject.js') }}"></script>
    <script type="text/javascript">
        window.onload = function() {
            PDFObject.embed("{{ URL::asset('pdf/XML_Documentation_Intl._V158771171_.pdf') }}", "#pdf");
        };
    </script>
</head>
<body>
<div class="content" id="pdf">

</div>
</body>
</html>
