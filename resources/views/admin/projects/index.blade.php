@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($projects as $project)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{ $project->title }}</div>
                        <div class="card-body">{{ $project->description }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection