@if(Session::has('mensaje'))
    <p class="alert alert-info">{{ Session::get('mensaje') }}</p>
@endif