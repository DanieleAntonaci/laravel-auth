@extends('layouts.app')

@section('projectCreate')
    <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name">
        
        <br>
        
        <label for="description">Description</label>
        <input type="text" name="description">
        
        <br>
        
        <label for="main_image">Url img</label>
        <input type="file" name="main_image">
        
        <br>
        
        <label for="release_date">release_date</label>
        <input type="date" name="release_date">
        
        <br>
        
        <label for="repo_link">Repo link</label>
        <input type="text" name="repo_link">
        
        <br>
        
        <input type="submit" value="Create new project">
    </form>   
@endsection