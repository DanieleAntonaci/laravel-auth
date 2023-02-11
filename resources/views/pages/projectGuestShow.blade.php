@extends('layouts.app')

@section('projectGuestShow')
    <div class="list-show">

        <h1>
            {{$project -> name}} 
        </h1>
        <img src="{{ asset('storage/'. $project ->main_image)}}" alt="">
        <h2>
            {{$project -> description }}
        </h2>
        <div>
            {{$project -> release_date }}   
        </div>   
        <div>
            {{$project -> repo_link }}   
        </div>
    </div>
@endsection