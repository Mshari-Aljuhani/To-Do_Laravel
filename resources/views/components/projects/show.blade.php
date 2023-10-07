@extends('layouts.app')
@section('content')

    <div class="btnContainer">
        @include('components.tasks.forms.newTaskModal')
    </div>

    <div class="container mainContainer mx-auto">
        <div class="tasksContainer">
            @include('components.tasks.unCheckedContainer')
        </div>

        <div class="tasksContainer">
            @include('components.tasks.CheckedContainer')
        </div>
    </div>

@endsection
