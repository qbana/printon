@extends('master.master')

@section('title', 'Nowa opcja produktu')


@section('content')

        <div class="container-fluid">

                <h1 class='page-heading'>Nowa opcja produktu</h1>

                @include('errors.list')

                {!! Form::model($option = new printon\Option, ['class' => 'form-horizontal', 'role' => 'form', 'url' => 'options']) !!}

                    @include('options.partials.form')

                {!! Form::close() !!}


                <h5>Lista opcji produktu</h5>
                <ul class="list">
                    @foreach ($options as $option)
                        <li> {!! HTML::link(action('OptionController@edit',[$option->slug]), $option->name) !!}</li>

                        {!! Form::open(['method' => 'DELETE', 'route' => ['options.destroy', $option->slug]])!!}
                                
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', ['class' => 'btn btn-danger form-control', 'type' => 'submit']) !!}
 
                         {!! Form::close() !!}
                    @endforeach
                </ul>

        </div>

@endsection