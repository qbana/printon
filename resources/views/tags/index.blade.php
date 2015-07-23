@extends('master.master')
@section('title', 'Produkty')

@section('content')

    <div class="container-fluid">

        <h5>Produkty</h5>
        <ul class="list">
            @foreach ($tags as $tag)
            <li> {!! HTML::link(action('TagController@show',[$tag->slug]), $tag->name) !!}</li>
            @endforeach
        </ul>

 
    </div>




 
 
     
     
     
@endsection