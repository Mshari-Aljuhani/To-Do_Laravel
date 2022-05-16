<div class="container">
    <div class="card">
        <div class="card-header">
            Uncompleted tasks
        </div>
        <div class="tasksList">
            @isset($tasks)
                @foreach($tasks as $task)
                @endforeach
            @else
            <div class="noTasksDiv">
                <h3 style="color: white">
                    There's no tasks assigned
                </h3>
            </div>
            @endisset
        </div>
    </div>
</div>
