@extends('layouts.app')

@section('content')
     <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <h1>Upload Books</h1>
       
        {{-- {!! Form::select('items', $items, null, ) !!} --}}
        {!! Form::open(['action'=>'PostsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','', ['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('author','Author')}}
            {{Form::text('author','', ['class'=>'form-control','placeholder'=>'Author'])}}
        </div>
        @if (count($items2)>0)
            
            <div class="form-group">
                <label for="sel1">Select Fuculty:</label>
                <select class="form-control" id="sel1" name="faculty">
                    @foreach ($items2 as $item)
                    <option value="{{ $item->id }}">{{ $item->fuculty_name }}</option>
                @endforeach  
                
                </select>
          </div>
       
        {{-- {!! Form::select('items', $items, null, ) !!} --}}
        @endif
        @if (count($items)>0)
            
            <div class="form-group">
                <label for="sel1">Select Department:</label>
                <select class="form-control" id="sel1" name="department">
                    @foreach ($items as $item)
                    <option value="{{ $item->id }}">{{ $item->dept_name }}</option>
                @endforeach  
                
                </select>
          </div>
       
        {{-- {!! Form::select('items', $items, null, ) !!} --}}
        @endif
        
        <div class="form-group">
            {{Form::label('coverimage','Cover Image')}}
            {{Form::file('cover_image')}}
        
        </div>
        <div class="form-group">
            {{Form::label('book','Book File')}}
            {{Form::file('book_file')}}
        
        </div>
        {{Form::submit('submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close()!!}
    </main>
@endsection