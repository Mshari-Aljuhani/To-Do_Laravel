<!-- Modal -->
<div class="modal fade" id="TaskModal{{$task->id}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">{{$task->description}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- reusable form, for Create & Edit the task-->
                <form action="{{route('task.update', $task)}}" method="POST">
                    @method('patch')
                    @include('components.taskForm', ['btnText'=>'Edit'])
                </form>
                <!-- END Form-->

            </div>
        </div>
    </div>
</div>
