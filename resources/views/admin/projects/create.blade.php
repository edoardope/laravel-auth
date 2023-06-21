@extends('layouts.app')

@section('colorMode')
dark
@endsection

@section('content')
<div class="container p-5">
    <div class="row ">
        <h2 class="mb-3">Create new project:</h2>
        <form class="bg-primary-subtle p-3 rounded" action="{{route('projects.store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Title:</label>
              <input type="text" name="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Url:</label>
                <input type="text" name="url" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Slug:</label>
                <input type="text" name="slug" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
    </div>
</div>
@endsection