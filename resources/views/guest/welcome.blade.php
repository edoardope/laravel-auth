@extends('layouts.app')
@section('content')


<section class="container-fluid">
    <div class="row">
        @foreach ($project as $item)
        <div class="card col-3 m-5">
            <img class="card-img-top" src="{{$item->url}}" alt="Title">
            <div class="card-body">
                <h4 class="card-title">{{$item->title}}</h4>
                <p class="card-text">Slug: {{$item->url}}</p>
            </div>
        </div>
        @endforeach
        
    </div>
</section>


@endsection