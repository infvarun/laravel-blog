@extends('main')
@section('title','Categories')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            @if(count($categories)>0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No Categories Found</p>
            @endif
        </div>

        <div class="col-md-3">
            <div class="well">
                {!! Form::open(['route'=>'categories.store']) !!}
                    <h2>New Category</h2>
                    {{ Form::label('name','Name:') }}
                    {{ Form::text('name',null,['class'=>'form-control']) }}

                    {{ Form::submit('Create New Category',['class'=>'btn btn-primary btn-block btn-h1-spacing']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection