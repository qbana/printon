@extends('master.master')

@section('title', 'Edytuj parmater')


@section('content')

    <div class="container-fluid">

        <h1 class='page-heading'>Edytuj parametry produktu</h1>

        @include('errors.list')

        {!! Form::model($parameter, ['method' => 'PATCH', 'class' => 'form-horizontal', 'role' => 'form', 'action' => ['ParameterController@update', $parameter->slug]]) !!}

            @include('parameters.partials.form')

        {!! Form::close() !!}

    </div>

@endsection