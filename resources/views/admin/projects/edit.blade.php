@extends('layouts.app')

@section('colorMode')
dark
@endsection

@section('content')
<div class="container p-5">
    <div class="row ">
        <h2 class="mb-3">Edit project details:</h2>
        <form class="bg-primary-subtle p-3 rounded" action="{{ route( 'projects.update', $project ) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="" class="form-label">Title:</label>
              <input type="text" name="title" class="form-control" value="{{ old('title') ?? $project->title }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Url:</label>
                <input type="text" name="url" class="form-control" value="{{ old('url') ?? $project->url }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Slug:</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug') ?? $project->slug }}">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit" >
        </form>
    </div>
</div>
@endsection