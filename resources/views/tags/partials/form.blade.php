
<div class="form-group">
    {!! Form::label('name', 'Produkt', ['class' => 'control-label', 'for' => 'name']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Opis', ['class' => 'control-label', 'for' => 'body']) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <p>{!! Form::label('params', 'Parameter produktu', ['class' => 'control-label', 'for' => 'params']) !!}</p>
    @if(count($params) > 0)
        @for($i=0;$i<count($params);$i++)
            <input type="checkbox" id='params' name='params[]' value='{!! $params[$i]["id"] !!}' @foreach($oldParams  as $old) @if($params[$i]['id'] == $old) checked='true' @endif @endforeach/>
            <span>{!! $params[$i]["name"] !!}</span>
        @endfor 
    @endif
</div>

<div class="form-group">
    <p>{!! Form::label('options', 'Opcje produktu', ['class' => 'control-label', 'for' => 'options']) !!}</p>
    @if(count($options) > 0)
        @for($i=0;$i<count($options);$i++)
            <input type="checkbox" id='options' name='options[]' value='{!! $options[$i]["id"] !!}' @foreach($oldOptions  as $old) @if($options[$i]['id'] == $old) checked='true' @endif @endforeach/>
            <span>{!! $options[$i]["name"] !!}</span>
        @endfor 
    @endif
</div>
 
<div>
    <p>Old Image Data - </p>
</div>
<div class="form-group">
    {!! Form::label('images', 'Images', ['class' => 'control-label', 'for' => 'images']) !!}
    {!! Form::file('images[]',['multiple', 'id' => 'file-demo', 'class' => 'file form-control', 'data-preview-file-type' => 'true']) !!}
</div>

<div class="form-group">
    {!! Form::label('img_desc', 'Opis obrazka', ['class' => 'control-label', 'for' => 'img_desc']) !!}
    {!! Form::textarea('img_desc', $oldImages, ['class' => 'form-control']) !!}
</div>

<hr>
<div class="btn-group col-md-offset-10" role="group" aria-label="...">
    {!! Form::button('<i class="glyphicon glyphicon-remove-sign"></i> Clear', ['type' => 'submit', 'class' => 'btn btn-default']) !!}
    {!! Form::button('<i class="glyphicon glyphicon-share"></i> Submit', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
</div>

 




