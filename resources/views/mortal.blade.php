@extends('app')

@section('title', 'Mortal')

<link href="/css/mortal.css" rel="stylesheet" type="text/css">

@section('content')
    <div id="mortal">
        <div id="sub-zero" class="character">
            <div class="head">
                <div class="face"></div>
            </div>
            <div class="body">
                <div class="hand hand-left">
                    <div class="bot">
                        <div class="wrist"></div>
                    </div>
                </div>
                <div class="hand hand-right">
                    <div class="bot">
                        <div class="wrist"></div>
                    </div>
                </div>
                <div class="breast-cut"></div>
                <div class="suite"></div>
            </div>
            <div class="footer">
                <div class="suite"></div>
                <div class="foot foot-left"></div>
                <div class="foot foot-right"></div>
            </div>

        </div>
    </div>
@endsection