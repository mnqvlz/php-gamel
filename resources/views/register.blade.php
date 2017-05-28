@extends('layouts.master')

@section('content')


    <h1>Register here</h1>
    <p class="lead">Add your details below.</p>
    <hr>


    @if(isset($errors) && $errors->any())
        <ul class='alert alert-danger'>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif


    {!! Form::open(array('action' => 'UserController@store', 'method' => 'POST')) !!}

    <div class="form-group">
        {!! Form::label('username', 'Username:', ['class' => 'control-label']) !!}
        {!! Form::text('username', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('age', 'Age:', ['class' => 'control-label']) !!}
        {!! Form::text('age', null, ['class' => 'form-control']) !!}
    </div>




    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}


@stop