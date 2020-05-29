@extends('layouts.app')

@section('content')

<main role="main" class="flex-shrink-0">


    <section class="py-6">
        <h2>Dashboard</h2>
        <div class="container">
            @if (count($posts)>0)
            @foreach ($posts as $post)
            <div class="card mb-3" style="max-width: 840px;">
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->tittle}}</h5>
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="card--text"><small class="text-muted">Authors:</small></p>
                                </div>
                                <div class="col-md-9">
                                    <p class="card-text">{{$post->author}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="card--text"><small class="text-muted">Department:</small></p>
                                </div>
                                <div class="col-md-9">
                                    <p class="card-text">
                                        {{$post->department->dept_name}}
                                    </p>
                                </div>
                            </div>

                            <p class="card-text"><small class="text-muted">Last updated {{$post->updated_at}} by
                                    {{$post->user->name}}</small></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body">
                            <a href="#" class="btn btn-info">Edit</a>
                            <br><br>
                            <a href="{{ url('admin/destroy') }}" class="btn btn-danger">Delete</a>
                            <br>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p>You have not posted any book before</p>
            @endif

        </div>
    </section>
</main>
@endsection
