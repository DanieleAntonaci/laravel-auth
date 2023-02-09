@extends('layouts.app')


@section('list-project')
    <ul class="container-list">
        @foreach ($projects as $project)
            <li class="element-list">
                <div>
                        <a href="{{route('project.guest.show', $project)}}">

                            <img src="{{$project -> main_image}}" alt="img">
                            {{$project -> name}}            
                            
                        </a>
                        
                    </div>
            </li>
        @endforeach
    </ul>
@endsection