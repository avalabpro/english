@extends('app')

@section('title', 'Home')

@section('content')

    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item active">
            <a class="nav-link active" id="lesson1-tab" data-toggle="tab" href="#lesson1" role="tab" aria-controls="lesson1" aria-selected="true">Lesson 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="lesson2-tab" data-toggle="tab" href="#lesson2" role="tab" aria-controls="lesson2" aria-selected="false">Lesson 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="lesson3-tab" data-toggle="tab" href="#lesson3" role="tab" aria-controls="lesson3" aria-selected="false">Lesson 3</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="lesson1" role="tabpanel" aria-labelledby="lesson1-tab">
            @include('include.lesson1')
        </div>
        <div class="tab-pane fade" id="lesson2" role="tabpanel" aria-labelledby="lesson2-tab">
            @include('include.lesson2')
        </div>
        <div class="tab-pane fade" id="lesson3" role="tabpanel" aria-labelledby="lesson3-tab">
            @include('include.lesson3')
        </div>
    </div>

@endsection