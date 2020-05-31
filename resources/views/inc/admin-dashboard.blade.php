@extends('layouts.app')

@section('content')
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">


    <section class="py-6">
        <h2>Dashboard</h2>
        @include('inc.admin-navbar')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <a class="btn btn-success" href="posts/create">Create New Post</a>
                </div>
                {{-- <div class="pull-right">
                    <a class="btn btn-success" href="posts/create">Create New Post</a>
                </div> --}}
            </div>
        </div>
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
                            <a href="/posts/{{$recent_post->id}}/edit" class="btn btn-info">Edit</a>
                            <br><br>
                        {{-- <label for="">{{ $recent_post->id }}</label> --}}
                            {{-- <a href="{{ url('admin/destroy/{id}') }}" class="btn btn-danger">Delete</a> --}}
                            @if (!Auth::guest())
                            @if (Auth::user()->id == $recent_post->user_id or Auth::user()->role == "Admin")
                            {!!Form::open(['action'=>['AdminController@destroy1', $recent_post->id],'method'=>'GET','class'=>'float-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}     
                            {!!Form::close()!!}
                            @endif
                            @endif
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
    .btn-danger{
        margin-right: 6.5rem;
    }
    .btn-info{
        padding-right: 1.7rem !important;

    }
    .pull-left {
        padding-left: 1rem;
    }
</style>