@extends('layouts.app')

@section('projectEdit')
    <form action="{{route('project.update', $project)}}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" value="{{$project->name}}">
        
        <br>
        
        <label for="description">Description</label>
        <input type="text" name="description" value="{{$project->description}}">
        
        <br>
        
        <label for="main_image">Url img</label>
        <input type="text" name="main_image" value="{{$project->main_image}}">
        
        <br>
        
        <label for="release_date">release_date</label>
        <input type="date" name="release_date" value="{{$project->release_date}}">
        
        <br>
        
        <label for="repo_link">Repo link</label>
        <input type="text" name="repo_link" value="{{$project->repo_link}}">
        
        <br>
        
        <input type="submit" value="Update project">
    </form>   
@endsection