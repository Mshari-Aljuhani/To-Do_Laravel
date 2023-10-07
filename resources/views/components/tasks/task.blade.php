<div class="task"
     style="background: linear-gradient(to right, #232323 70%, {{$task->color}} 100%);">
    <div class="row">
        <div class="col-1 align-middle checkBtnDiv">
            <form action="{{route('check')}}" method="post">
                @csrf
                @method('patch')
                <input type="hidden" value="{{$task->id}}" name="id">
                <button type="submit" id="btn" class="btn btn-outline-{{$btn}} checkBtn">{{$sign}}</button>
            </form>
        </div>
        <div class="col-11 taskDetails">
            <h2 class="taskDesc" @if($task->checked == 1) style="text-decoration:line-through" @endif>{{$task->description}}</h2>
            <div style="display: inline-block">
                @isset($task->dueDate)
                    <span>Due Date: {{$task->dueDate}}</span>
                @else
                    <span>No due date</span>
                @endisset
                <button class="badge bg-info text-dark ms-3" data-bs-toggle="modal"
                        data-bs-target="#TaskModal{{$task->id}}">Edit
                </button>
                <button class="badge bg-danger text-dark" data-bs-toggle="modal"
                        data-bs-target="#deleteTask{{$task->id}}">Delete
                </button>
            </div>
        </div>
    </div>
</div>
{{--@include('components.forms.editTaskModal')--}}
{{--@include('components.forms.deleteTaskModal')--}}

