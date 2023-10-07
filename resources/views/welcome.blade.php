@extends('layouts.app')
@section('content')
<head>
    <link href="{{ asset('css/pages/projects.css') }}" rel="stylesheet"> <!-- Customize CSS -->
</head>

    <div class="welcomeDiv">
        <h2>Welcome <b>{{Auth::user()->name}}</b> to your ToDo App!</h2>
    </div>

    <div class="container mainContainer mx-auto">
        @include("components.projects.index")
    </div>
@endsection
