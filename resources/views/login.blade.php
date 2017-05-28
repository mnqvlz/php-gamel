@extends('layouts.master')

@section('content')


    <h1>Login here</h1>

    <hr>


    @if(isset($errors) && $errors->any())
        <ul class='alert alert-danger'>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif


    {!! Form::open(array('url' => '/login', 'method' => 'POST')) !!}

    <div class="form-group">
        {!! Form::label('username', 'Username:', ['class' => 'control-label']) !!}
        {!! Form::text('username', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>




    {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}


@stop