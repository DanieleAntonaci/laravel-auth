@extends('layouts.app')


@section('list-project')
    <ul class="container-list">
        @foreach ($projects as $project)
            <li class="element-list">
                <div>
                        
                        <img src="{{$project -> main_image}}" alt="img">
                        {{$project -> name}}            

                        
                    </div>
            </li>
        @endforeach
    </ul>
@endsection