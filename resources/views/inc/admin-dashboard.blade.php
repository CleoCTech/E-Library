@extends('layouts.app')

@section('content')
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">


    <section class="py-6">
        <h2>Dashboard</h2>
        @include('inc.admin-navbar')
        <div class="container">
            @if (count($recent_posts)>0)
            @foreach ($recent_posts as $recent_post)
            <div class="card mb-3" style="max-width: 840px;">
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <img src="/storage/cover_images/{{$recent_post->cover_image}}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">{{$recent_post->tittle}}</h5>
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="card--text"><small class="text-muted">Authors:</small></p>
                                </div>
                                <div class="col-md-9">
                                    <p class="card-text">{{$recent_post->author}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="card--text"><small class="text-muted">Department:</small></p>
                                </div>
                                <div class="col-md-9">
                                    <p class="card-text">
                                        {{$recent_post->department->dept_name}}
                                    </p>
                                </div>
                            </div>

                            <p class="card-text"><small class="text-muted">Last updated {{$recent_post->updated_at}} by
                                    {{$recent_post->user->name}}</small></p>
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
<style scoped>

    .img-fluid {
        
        height: 100% !important;
    }
</style>