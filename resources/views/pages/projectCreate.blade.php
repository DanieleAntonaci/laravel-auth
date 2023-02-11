@extends('layouts.app')

@section('projectCreate')
    <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data" class="my_form">
        @csrf
       <div>
           <label for="name">Name</label>
           <input type="text" name="name">
        </div> 
        
       <div>
           <label for="description">Description</label>
           <textarea name="description"></textarea>
        </div>     
        
       <div>
           <label for="main_image">Url img</label>
           <input type="file" name="main_image">
        </div>     
        
       <div>
           <label for="release_date">release_date</label>
           <input type="date" name="release_date">
        </div>     
        
       <div>
           <label for="repo_link">Repo link</label>
           <input type="text" name="repo_link">
        </div>     
        
        
        <input type="submit" value="Create new project">
    </form>   
@endsection