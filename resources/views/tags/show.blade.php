@extends('master.master')
@section('title', 'Produkt numer')

@section('content')

    <div class="container-fluid">

        <h5>name {!! $tag->name !!}</h5>
        <h6> body {!! $tag->body !!}</h6>
 		<h6> 1 of options- {!! $tag->options[0]->name !!}</h6>
 		<h6> 1 of params-  {!! $tag->params[0]->name !!}</h6>
 		<h6> 1 of imgs-    {!! $tag->images[0]->name !!}</h6>

<!--         {!! Form::model($option = new printon\Option, ['class' => 'form-horizontal', 'role' => 'form', 'url' => 'options']) !!}

                    {!! Form::hidden('id', $tag->id, ['class' => 'form-control']) !!}

                    <div class="form-group">
					    {!! Form::label('qty', 'Ilosc', ['class' => 'control-label', 'for' => 'name']) !!}
					    {!! Form::text('qty', null, ['class' => 'form-control']) !!}
					</div>

                    {!! Form::button('<i class="glyphicon glyphicon-share"></i> Order', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}

        {!! Form::close() !!} -->
    </div>




 
 
     
     
     
@endsection