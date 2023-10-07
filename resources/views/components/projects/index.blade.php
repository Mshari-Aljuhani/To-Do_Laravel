
@include('components.projects.createModal')

<div class="row">
    @forelse($projects as $project)
        <div class="col-lg-4">
            <a href="{{route('show.project', $project)}}" style="text-decoration: none">
            <div class="projectButton">
                {{$project->name}}
                <div class="tasksInfo">
                    <ul>
                        <li> Total tasks: {{$project->tasks->count()}}</li>
                        <li> Completed tasks: {{ $project->tasks->filter(function ($task) {return $task->checked === 1; })->count() }}</li>
                        <li> Uncompleted tasks: {{ $project->tasks->filter(function ($task) {return $task->checked === 0; })->count() }}</li>
                    </ul>
                </div>
                <div class="teamInfo">
                    Team members: {{$project->users()->count()}}
                </div>
            </div>
            </a>
        </div>
    @empty
        <div class="projectButton"> You don't have any project</div>
    @endforelse
</div>
