@extends('layouts.app')

@section('content')
<div class="ebay-flex-center ebay-position-ref ebay-full-height">
    <div class="ebay-content">
        <div class="ebay-title ebay-m-b-md">
            {{$name}}
        </div>

        <div class="ebay-links">
            <a href="{{$documention}}">Documentation</a>
            <a href="{{$pdf}}">pdf</a>
            <a href="{{$git}}">GitHub</a>
            <a href="{{$manul}}">Manual</a>
        </div>
    </div>
</div>
@endsection