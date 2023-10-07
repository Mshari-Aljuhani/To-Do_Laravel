<button type="button" class="btn btn-outline-primary m-3" data-bs-toggle="modal" data-bs-target="#createProjectModal">
    <b>+ New Project!</b>
</button>

<!-- Modal -->
<div class="modal fade" id="createProjectModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- reusable form, for Create & Edit the task-->
                <form action="{{route('project.store')}}" method="post">
                    @include('components.projects.forms.fields', ['btnText'=>'Create'])
                </form>
                <!-- END Form-->

            </div>
        </div>
    </div>
</div>
