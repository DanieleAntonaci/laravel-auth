@extends('layouts.app')

@section('content')
<a href="{{route('project.create')}}">Add new project</a>
<ul class="container-list">
   @foreach ($projects as $project)
       <li class="element-list">
           <div>
            <a href="{{route('project.show', $project)}}">
               <img src="{{$project -> main_image}}" alt="img">
               <h2>
                  {{$project -> name}}            
               </h2>
            </a>
           </div>
           <a href="{{route('project.destroy', $project)}}">X</a>
       </li>
   @endforeach
</ul>
@endsection
