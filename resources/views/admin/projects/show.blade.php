@extends('layouts/app')

@section('content')
<div class="container py-5">
    <h1>{{$project->name}}</h1>
    <p>({{$project->type->name}})</p>


    <div class=" text-center image">
        <img src=" {{asset('storage/' . $project->preview)}}" alt="image preview">
    </div>
    <p class="mt-3"> {{$project->description}}</p>
    <p>Technologies: {{$project->technologies}}</p>
    <p>Link: {{$project->link}}</p>

    <div>
        <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-primary">Edit</a>

        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
        </form>
    </div>


</div>

<style>
    .image {
        width: 800px;
        height: 500px;

        img {
            width: 100%;
            height: 100%;
        }
    }
</style>



@endsection