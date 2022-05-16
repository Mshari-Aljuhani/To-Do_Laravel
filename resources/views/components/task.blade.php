<div class="task"
     style="background: linear-gradient(to right, #232323 70%, {{$task->color}} 100%);">
    <div class="row">
        <div class="col-1 align-middle checkBtnDiv">
           <button class="btn btn-outline-success checkBtn">✓</button>
        </div>
        <div class="col-11 taskDetails">
            <h2 class="taskDesc">{{$task->description}}</h2>
            <div style="display: inline-block">
                @isset($task->dueDate)
                    <span>Due Date: {{$task->dueDate}}</span>
                @else
                    <span>No due date</span>
                @endisset
                <button class="badge bg-info text-dark ms-3" data-bs-toggle="modal" data-bs-target="#TaskModal{{$task->id}}">Edit</button>
                <button class="badge bg-danger text-dark"  data-bs-toggle="modal" data-bs-target="#deleteTask{{$task->id}}">Delete</button>
            </div>
        </div>
        </div>
</div>
@include('components.editTaskModal')
<!-- Modal -->
<div class="modal fade" id="deleteTask{{$task->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <!-- reusable form, for Create & Edit the task-->
                <form action="{{route('task.destroy', $task)}}" method="POST" enctype="multipart/form-data" style="text-align: center">
                    @csrf
                    @method('delete')
                    <h3>Are you sure you want delete this post ?</h3>
                    <button type="submit" class="btn btn-outline-danger ">Delete</button>
                </form>
                <!-- END Form-->
            </div>
        </div>
    </div>
</div>


