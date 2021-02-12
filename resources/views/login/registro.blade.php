<div class="container mt-5">
    
    @include('layouts.header')
    <form method="POST" action="/register">
        @include('layouts.mensaje')
        @csrf
        <div class="mb-3">
            <label  class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
            @if($errors->has('nombre'))
               <span class="text-danger"> {{$errors->first('nombre')}}"</span>
            @endIf   
        </div>
        <div class="mb-3">
            <label  class="form-label">Correo Eléctronico</label>
            @if($errors->has('correo'))
               <span class="text-danger"> {{$errors->first('correo')}}"</span>
            @endIf   
            <input type="email" class="form-control" name="correo" value="{{old('correo')}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            @if($errors->has('password'))
               <span class="text-danger"> {{$errors->first('password')}}"</span>
            @endIf   
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @include('layouts.footer')
</div>