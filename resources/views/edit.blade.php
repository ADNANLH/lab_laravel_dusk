@extends('layouts.layout')
@extends('layouts.nav')

@section('content')
<div class="container" style="margin-top:30px;">
    @if (@session('success'))
        <div style="margin-bottom:30px;">
            <span class="font-medium text-success">{{session('success')}}</span>
        </div>
    @endif
    <form action=" {{route('update.task', ['id' => $task->id])}}" method="POST">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="projetId" class="form-label">Projet</label>
            <select name="projetId" id="">
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}" @if ($project->id == $task->projetId) selected @endif>
                        {{$project->nom}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{$task->nom}}">
            @error('nom')
                <div>{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label  for="description" class="form-label">Description</label>
            <textarea id="" cols="30" rows="3" class="form-control"  name="description">{{$task->description}}</textarea>
            @error('description')
                <div>{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>

    </form>
</div>

@endsection