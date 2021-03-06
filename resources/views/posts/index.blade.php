@extends('main')
@section('title','All Posts')
@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            {{ Html::linkRoute('posts.create','Create New Post',array(),array('class'=>'btn btn-lg btn-primary btn-h1-spacing')) }}
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ substr(strip_tags($post->body),0,50) }}{{ (strlen(strip_tags($post->body))>50)?'...':'' }}</td>
                            <td>{{ date('M j, Y h:ia',strtotime($post->created_at)) }}</td>
                            <td>
                                {{ Html::linkRoute('posts.show','View',array($post->id),array('class'=>'btn btn-default btn-sm')) }} 
                                @if(Auth::user()->id===$post->user_id)  
                                    {{ Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-default btn-sm')) }}  
                                @endif                          
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>    
            <div class="text-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection