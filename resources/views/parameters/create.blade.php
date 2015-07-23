@extends('master.master')

@section('title', 'Nowy parametr')


@section('content')

        <div class="container-fluid">

                <h1 class='page-heading'>Nowy parametr produktu</h1>

                @include('errors.list')

                {!! Form::model($parameter = new printon\Parameter, ['class' => 'form-horizontal', 'role' => 'form', 'url' => 'parameters']) !!}

                    @include('parameters.partials.form')

                {!! Form::close() !!}


                <h5>Lista parametrow</h5>
                <ul class="list">
                    @foreach ($params as $parameter)
                        <li>
                             {!! HTML::link(action('ParameterController@edit',[$parameter->slug]), $parameter->name) !!}
                             -------
                             {!! Form::open(['method' => 'DELETE', 'route' => ['parameters.destroy', $parameter->slug]])!!}
                                
                                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', ['class' => 'btn btn-danger form-control', 'type' => 'submit']) !!}
 
                             {!! Form::close() !!}
                        </li>
                    @endforeach
                </ul>

        </div>

@endsection