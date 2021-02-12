<div class="container mt-5">
    @include('layouts.header')
    @include('layouts.mensaje')
    
    <div class="row">
        <div class="col-12">
            <h1 class="inline-block ">Mis listas por hacer</h1>
        </div>
        @foreach($list as $tarea)
        <div class="col-3 mt-5">
            <form method="POST" action="list/update">
                @csrf()
                <div class="col-8">
                    <input name="descripcion" value="{{$tarea->descripcion}}" >
                        
                </div>
                <input type="number" name="id" hidden value="{{$tarea->id}}">
                <div class="col-2">
                    <span>Modificar</span>
                    <button type="submit" class="btn btn-info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                            <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                        </svg>
                    </button>
                </div>
            </form>
            <div class="col-2">
                <span>Eliminar</span>
                <form method="POST" action="/list/delete">
                    @csrf()
                    <input type="number" name="id" hidden value="{{$tarea->id}}">
                    <button  type="submit" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash2" viewBox="0 0 16 16">
                            <path d="M14 3a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2zM3.215 4.207l1.493 8.957a1 1 0 0 0 .986.836h4.612a1 1 0 0 0 .986-.836l1.493-8.957C11.69 4.689 9.954 5 8 5c-1.954 0-3.69-.311-4.785-.793z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        @endForeach
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <a href="{{ url('list/nueva')}}" class="btn btn-primary">Agregar nueva</a> 
        </div>
    </div>
    @include('layouts.footer')
</div>
