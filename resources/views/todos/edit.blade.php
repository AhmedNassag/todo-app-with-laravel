@extends('layouts.app')

@section('title','Edit Todo')

@section('content')

    <div class="container pt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Edit Todo</h1>
                    </div>
                    <div class="card-body">
                        @if($errors -> any())
                            <div class="alert alert-danger">
                           		<ul>
                           			@foreach($errors -> all() as $error)
                           				<li>{{$error}}</li>
                           			@endforeach
                           		</ul>
                            </div>
                        @endif
                        <form action="/todos/{{$todo -> id}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Todo Title" name="todoTitle" value="{{$todo -> title}}">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="Enter Todo Description" name="todoDescription">{{$todo -> description}}</textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success" style="width: 40%">Update Todo
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
