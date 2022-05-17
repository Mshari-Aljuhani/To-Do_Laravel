@extends('layouts.app')
@section('content')

    <div class="welcomeDiv">
        <h2>Welcome <b>{{Auth::user()->name}}</b> to your ToDo App!</h2>
    </div>

    <div class="btnContainer">
        @include('components.forms.newTaskModal')
    </div>

    <div class="container mainContainer mx-auto">
        <div class="tasksContainer">
            @include('components.unCheckedContainer')
        </div>

        <div class="tasksContainer">
            @include('components.CheckedContainer')
        </div>
    </div>

@endsection
