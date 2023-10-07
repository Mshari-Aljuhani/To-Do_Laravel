<!-- reusable form, for Create & Edit the task-->
    @csrf
    <!-- Description -->
    <label for="description">Task</label>

    <input type="hidden" name="project_id" value="{{$project->id}}">

    <input id="description" class="form-control mb-3" type="text" name="description" placeholder="Enter the task"
       @isset($task) value="{{$task->description}}" @endisset
       value="{{ old('description') }}"
       required>
        <!-- Due date -->
        <label for="dueDate">Due date <small>*not required*</small></label>
        <input id="dueDate" class="form-control mb-3" type="date" name="dueDate" placeholder="Enter the due date"
       @isset($task) value={{$task->dueDate}}@endisset>

    <label class="circle" style="background-color: #4a75ba" for="blue"></label>
    <input id="blue" class="form-check-input" type="radio" name="color" value="#4a75ba"
           @isset($task) @if($task->color == "#4a75ba") checked @endif @endisset>

    <label class="circle" for="red" style="background-color: #b04141"></label>
    <input id="red" class="form-check-input" type="radio" name="color" value="#b04141"
           @isset($task) @if($task->color == "#b04141") checked @endif @endisset>

    <label class="circle" style="background-color: #d4c050" for="yellow"></label>
    <input id="yellow" class="form-check-input" type="radio" name="color" value="#d4c050"
           @isset($task) @if($task->color == "#d4c050") checked @endif @endisset>

    <label class="circle" style="background-color: #88db89" for="green"></label>
    <input id="green" class="form-check-input" type="radio" name="color" value="#88db89"
           @isset($task) @if($task->color == "#88db89") checked @endif @endisset>
        <br>

    <button type="submit" class="btn btn-outline-primary mt-3">{{$btnText}}</button>
<!-- END Form-->
