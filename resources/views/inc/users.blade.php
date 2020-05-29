@extends('layouts.app')

@section('content')

<main role="main" class="flex-shrink-0">


    <section class="py-6">
        <h2>Dashboard</h2>
        @include('inc.admin-navbar')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                {{-- <div class="pull-left">
                    <h2>Users Management</h2>
                </div> --}}
                <div class="pull-right">
                    <a class="btn btn-success" href="create">Create New User</a>
                </div>
            </div>
        </div>
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Roles</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($admins) > 0)
                @foreach ($admins as $admin)

                <tr>
                    <th scope="row">{{  $admin->id }}</th>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>
                        <label class="badge badge-success">{{ $admin->role }}</label>
                    </td>
                    <td>
                        <a class="btn btn-info" href="#">Show</a>
                        <a class="btn btn-primary" href="#">Edit</a>
                        {{-- <a class="btn btn-danger" href="#">Delete</a> --}}
                        {!!Form::open(['action'=>['AdminController@destroy',
                        $admin->id],'method'=>'POST','class'=>'float-right'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                        {!!Form::close()!!}
                    </td>
                </tr>
                @endforeach
                @endif


            </tbody>
        </table>
    </section>
</main>
@endsection

<style scoped>
    .btn-danger {
        padding-right: 5rem !important;

    }
</style>