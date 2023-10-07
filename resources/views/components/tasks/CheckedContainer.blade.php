<div class="container">
    <div class="card CheckedList">
        <div class="card-header">
            Checked Tasks
        </div>
        <div id="box" class="tasksList">
            @if($checkedTasks->count() > 0)
                @foreach($checkedTasks as $task)
                    @include('components.tasks.task', ['task'=>$task,'btn'=>'danger', 'sign'=>'X'])
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
