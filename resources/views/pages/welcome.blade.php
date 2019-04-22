@extends('main')
@section('content');

<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to My Blog!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p class="lead">This is my test website built with Laravel</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Latest posts</a>
        </div>
    </div>
</div> <!-- end of header .row -->

<div class="row">
    <div class="col-md-8">
        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <a href="#" class="btn btn-primary">Read more</a>
        </div>
        <hr>
        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <a href="#" class="btn btn-primary">Read more</a>
        </div>
        <hr>
        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <a href="#" class="btn btn-primary">Read more</a>
        </div>
        <hr>
    </div>

    <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
    </div>
</div>
@endsection

