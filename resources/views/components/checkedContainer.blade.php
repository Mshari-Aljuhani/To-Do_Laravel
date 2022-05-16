<div class="container">

    <div class="card">
        <div class="card-header">
            Checked Tasks
        </div>
        <div class="tasksList">
            @if($checkedTasks->count() > 0)
                @foreach($checkedTasks as $task)
                    @include('components.task', $task)
                @endforeach
            @else
                <div class="noTasksDiv">
                    <h3 style="color: white">
                        There's no completed task
                    </h3>
                </div>
            @endif
        </div>
    </div>

</div>
