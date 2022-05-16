<div class="container">
    <div class="card">
        <div class="card-header">
            Uncompleted tasks
        </div>
        <div class="tasksList">
            @if($tasks->count() > 0)
                @foreach($tasks as $task)
                    @include('components.task', $task)
                @endforeach
            @else

            <div class="noTasksDiv">
                <h3 style="color: white">
                    There's no tasks assigned
                </h3>
            </div>
            @endif
        </div>
    </div>
</div>
