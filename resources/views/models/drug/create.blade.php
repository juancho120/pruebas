@extends('layout.panel.app')
@extends('layout.panel.navbar')

@section('navbar')

@section('content')
<div class="container">
    <form class="form-group" method="POST" action="/drug">
        @csrf
        <div class="form-group">
            <label>Nombre de Remedio</label>
            <input type="text" name="name" class="form-control">
            <label>Precio del Remedio</label>
            <input type="text" name="cost" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
    
@endsection