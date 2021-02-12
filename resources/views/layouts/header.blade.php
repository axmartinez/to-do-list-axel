<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-do-List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="row">
    <div class="col">
        <h1>To do List</h1>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <a href="{{url('login')}}" class="btn btn-success">Iniciar sesión</a>
    </div>
    <div class="col-4">
        <a href="{{url('log-out')}}" class="btn btn-danger">Cerrar sesión</a>
    </div>
    <div class="col-4">
        <a href="{{url('/')}}" class="btn btn-info">Registrarse</a>
    </div>
</div>