@extends('layouts.app')

@section('projectGuestShow')
    <div class="list-show">

        <h1>
            {{$project -> name}} 
        </h1>
        <h2>
            {{$project -> description }}
        </h2>
        <img src="{{ asset('storage/'. $project ->main_image)}}" alt="">
        <div>
            {{$project -> release_date }}   
        </div>   
        <div>
            {{$project -> repo_link }}   
        </div>
    </div>
@endsection