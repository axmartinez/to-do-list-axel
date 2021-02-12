<div class="container mt-5">
    @include('layouts.header')
    <form method="POST" action="/authenticate">
        @include('layouts.mensaje')
        @csrf
        <div class="mb-3">
            <label class="form-label">Correo Eléctronico</label>
            <input type="correo" class="form-control" name="correo" aria-describedby="emailHelp" value="{{old('correo')}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @include('layouts.footer')
</div>