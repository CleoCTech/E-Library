@extends('layouts.app')

@section('content')
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <h1>Edit Uploaded Books</h1>

    {{-- {!! Form::select('items', $items, null, ) !!} --}}
    {!! Form::open(['action'=>['PostsController@update', $post->id], 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->tittle, ['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('author','Author')}}
        {{Form::text('author',$post->author, ['class'=>'form-control','placeholder'=>'Author'])}}
    </div>
    @if (count($items2)>0)

    <div class="form-group">
        <label for="sel1">Select Fuculty:</label>
        <select class="form-control" id="sel1" name="faculty">
            <option value="{{ $post->facaulty->id }}" selected="true">{{ $post->facaulty->fuculty_name }}</option>
            @foreach ($items2 as $item)
            <option value="{{ $item->id }}">{{ $item->fuculty_name }}</option>
            @endforeach

        </select>
    </div>

    {{-- {!! Form::select('items', $items, null, ) !!} --}}
    @endif


    <div class="form-group department">
        <label for="sel1">Select Department:</label>
        <select class="form-control department" id="sel2" name="department">
            <option value="{{ $post->department->id }}" selected="true">{{ $post->department->dept_name }}</option>
            {{-- <option value="{{ $item->id }}">{{ $item->dept_name }}</option> --}}

        </select>
    </div>

    {{-- {!! Form::select('items', $items, null, ) !!} --}}


    <div class="form-group">
        {{Form::label('coverimage','Cover Image')}}
        {{Form::file('cover_image', ['class'=>'btn'])}}

    </div>
    <div class="form-group">
        {{Form::label('book','Book File')}}
        {{Form::file('book_file', ['class'=>'btn'])}}

    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
</main>
@endsection
<style>
    label {
        color: #2d88cf;
    }
</style>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
  //your code here
  $('#sel1').on('change', function(){
       // console.log("changed");

        var fuculty_id =$(this).val();
       // console.log(fuculty_id);
        var div=$(this).parent();

        var op=" ";

        //ajax
        $.ajax({
            type: "get",
            url:"{!!URL::to('findDepartments')!!}",
            data:{'id':fuculty_id},
            success:function(data){
					//console.log('success');

					console.log(data);

					//console.log(data.length);
					op+='<option value="0" selected disabled>Choose Department</option>';
					for(var i=0;i<data.length;i++){
					    op+='<option value="'+data[i].id+'">'+data[i].dept_name+'</option>';
                    } 
                    $('#sel2').html(" ");
                    $('#sel2').append(op);
				},

            error:function(){
                
            }
        });

     });
});
</script>