<div class="container">

    <div class="card">
        <div class="card-header">
            Checked Tasks
        </div>
        <div class="tasksList">
            @isset($checkedTasks)
                @foreach($checkedTasks as $task)

                @endforeach
            @else
                <div class="noTasksDiv">
                    <h3 style="color: white">
                        There's no completed task
                    </h3>
                </div>
            @endisset
        </div>
    </div>

</div>
