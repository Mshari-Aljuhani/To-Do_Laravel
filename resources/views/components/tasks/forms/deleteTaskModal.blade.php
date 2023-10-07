<!-- Modal -->
<div class="modal fade" id="deleteTask{{$task->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <!-- reusable form, for Create & Edit the task-->
                <form action="{{route('task.destroy', $task)}}" method="POST" style="text-align: center">
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
