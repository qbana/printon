@extends('master.master')

@section('title', 'Edytuj produkt')


@section('content')

    <div class="container-fluid">

        <h1 class='page-heading'>Edytuj tag - produkt</h1>

        @include('errors.list')

        {!! Form::model($tag, ['enctype' => 'multipart/form-data', 'method' => 'PATCH', 'class' => 'form-horizontal', 'role' => 'form', 'action' => ['TagController@update', $tag->slug]]) !!}

        @include('tags.partials.form')

        {!! Form::close() !!}

    </div>

@endsection