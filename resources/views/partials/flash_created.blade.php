@if(Session::has('flashMsg'))
    <div class='alert alert-success fade in' id='errorAlert'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        {{ session('flashMsg') }}
        <hr style='margin:4px'>
        <p><button type="button" class="btn btn-success">Notify members</button></p>
    </div>
@endif
