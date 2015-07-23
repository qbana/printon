
<div class="form-group">
    {!! Form::label('name', 'Opcja', ['class' => 'control-label', 'for' => 'name']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Opis', ['class' => 'control-label', 'for' => 'body']) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('subOpts', 'Czy produkt posiada sub opcje ?', ['class' => 'control-label', 'for' => 'subOpts']) !!}
    {!! Form::checkbox('subOpts', 'Yes', false) !!}
</div>



<hr>
<div class="btn-group col-md-offset-10" role="group" aria-label="...">
    {!! Form::button('<i class="glyphicon glyphicon-remove-sign"></i> Clear', ['type' => 'submit', 'class' => 'btn btn-default']) !!}
    {!! Form::button('<i class="glyphicon glyphicon-share"></i> Submit', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
</div>

