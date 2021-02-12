<div class="container mt-5">
    @include('layouts.header')
    <div class="row">
        <div class="col-6">
            <form method="POST" action="/list/nueva">
                @include('layouts.mensaje')
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Descripcion</label>
                    <textarea type="text" class="form-control" name="descripcion"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
    @include('layouts.footer')
</div>