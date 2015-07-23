@extends('master.master')

@section('title', 'Edytuj produkt')


@section('content')

    <div class="container-fluid">

        <h1 class='page-heading'>Edytuj opcje produktu</h1>

        @include('errors.list')

        {!! Form::model($option, ['method' => 'PATCH', 'class' => 'form-horizontal', 'role' => 'form', 'action' => ['OptionController@update', $option->slug]]) !!}

        @include('options.partials.form')

        {!! Form::close() !!}

    </div>

@endsection