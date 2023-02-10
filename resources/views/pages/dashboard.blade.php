@extends('layouts.app')

@section('content')
<div class="btn-add">
   <a href="{{route('project.create')}}" >Add new project</a>
</div>
<ul class="container-list">
   @foreach ($projects as $project)
       <li class="element-list">

           <div>
            <a href="{{route('project.show', $project)}}">
               <img src="{{ asset('storage/'. $project ->main_image)}}" alt="img">
               <h2>
                  {{$project -> name}}            
               </h2>
            </a>
           </div>

           <div>
              <a href="{{route('project.destroy', $project)}}" class="delete">DELETE</a>
               <a href="{{route('project.edit', $project)}}" class="edit">EDIT</a>
           </div>
           
       </li>
   @endforeach
</ul>
@endsection
