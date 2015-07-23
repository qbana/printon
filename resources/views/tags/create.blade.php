@extends('master.master')

@section('title', 'Nowy produkt')


@section('content')

        <div class="container-fluid">

                <h1 class='page-heading'>Nowy tag - produkt</h1>

                @include('errors.list')

                {!! Form::model($tag = new printon\Tag, ['class' => 'form-horizontal', 'role' => 'form', 'url' => 'tags', 'enctype' => 'multipart/form-data']) !!}

                    @include('tags.partials.form')

                {!! Form::close() !!}


                <h5>Lista tagow - produktow</h5>
                <ul class="list">
                    @foreach ($tags as $tag)
                        <li> {!! HTML::link(action('TagController@edit',[$tag->slug]), $tag->name) !!}</li>
                        -------
                         {!! Form::open(['method' => 'DELETE', 'route' => ['tags.destroy', $tag->slug]])!!}
                            
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', ['class' => 'btn btn-danger form-control', 'type' => 'submit']) !!}

                         {!! Form::close() !!}
                    @endforeach
                </ul>

        </div>

@endsection