@csrf
<div class="text-center">

    <label>
        Name of the project
        <input type="text" class="form-control" name="name" placeholder="Enter a name of the project" @isset($project) value="{{$project->name}}" @endisset autocomplete="name" required/>
    </label>

    <br/>
    <button class="btn btn-outline-primary mt-3">{{$btnText}}</button>
</div>
