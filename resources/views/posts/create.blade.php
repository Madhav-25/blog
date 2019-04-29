@extends('main')
@section('title','| Create new post')
@section('styles')
    <link rel="stylesheet" href="/public/css/parsley.css"/>

    @endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create new post</h1>
            <hr>
            {!! Form::open(array('route' => 'posts.store','data-parsley-validate' => '')) !!}
            @csrf
                {{Form::label('title','Title:')}}
                {{Form::text('title',null,array('class'=>'form-control', 'required' => ''))}}

                {{Form::label('body','Post Body:')}}
                {{Form::textarea('body',null,array('class'=>'form-control', 'required' => ''))}}
                {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:2px'))}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="/public/js/parsley.min.js"></script>
@endsection