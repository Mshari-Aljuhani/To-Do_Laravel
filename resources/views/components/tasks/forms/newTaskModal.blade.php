<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#TaskModal">
    <b>+ New Task!</b>
</button>

<!-- Modal -->
<div class="modal fade" id="TaskModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- reusable form, for Create & Edit the task-->
                <form action="{{route('task.store',  $project->id )}}" method="post">
                    @include('components.tasks.forms.taskForm', ['btnText'=>'Create'])
                </form>
                <!-- END Form-->

            </div>
        </div>
    </div>
</div>
